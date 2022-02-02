<?php 

	session_start();
		if(isset($_POST['submit'])){
			include 'dbh.inc.php';

			$uid = mysqli_real_escape_string($conn, $_POST['username']);
			$pwd = mysqli_real_escape_string($conn, $_POST['password']);

			//error handlers
			//check if inputs are empty
			if(empty($uid)||empty($pwd)){
				header("Location: ../login.php?login=empty");
				exit();
			}else{
				$sql = "SELECT * FROM users WHERE username='$uid' OR email='$uid'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows ($result);
				if($resultCheck<1){
					header("Location: ../login.php?login=error");
					exit();
				}else{
					if($row = mysqli_fetch_assoc($result)){
						//dehashing the password
						$hashedPwdcheck = password_verify($pwd,$row['password']);
						if($hashedPwdcheck == false){
							header("Location: ../login.php?login=eror");
							exit();
						}
					
						elseif($hashedPwdcheck == true) {
							//Login The User Here

							$_SESSION['admin_status'] = $row['admin_status'];
							$_SESSION['u_id'] = $row['id'];
							$_SESSION['u_first'] = $row['fname'];
							$_SESSION['u_last'] = $row['lname'];
							$_SESSION['u_email'] = $row['email'];
							$_SESSION['u_uid'] = $row['username'];
							if($_SESSION['admin_status'] == 0){
								header("Location: ../adminstat.php");
								exit();
							}else{
								header("Location: ../../index.php");
								exit();
							}
						}
					}
				}
		}
	}else{
			header("Location: ../login.php");
			exit();
	}
 ?>