<?php 

	if(isset($_POST['submit'])){
		include_once 'dbh.inc.php';
		$first = mysqli_real_escape_string($conn , $_POST['fname']);
		$last = mysqli_real_escape_string($conn , $_POST['lname']);
		$email = mysqli_real_escape_string($conn , $_POST['email']);
		$uid = mysqli_real_escape_string($conn , $_POST['username']);
		$pwd = mysqli_real_escape_string($conn , $_POST['password']);	
		//Error handles
		//check for empty fields
		if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)){
			header("Location: ../signup.php?signup=empty");
			exit();
		}else{
			//check if input characters are valid
			if(!preg_match("/^[a-z A-Z]*$/", $first)||!preg_match("/^[a-z A-Z]*$/", $last)){
					header("Location: ../signup.php?signup=invalid");
					exit();
			}else{
				//check if email is valid
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					header("Location: ../signup.php?signup=invalidemail");
					exit();
				}else{
					$sql = "SELECT * FROM users WHERE username='$uid'";
					$result = mysqli_query($conn,$sql);
					$resultCheck = mysqli_num_rows ($result);

					if($resultCheck>0){
						header("Location: ../signup.php?signup=usertaken");
						exit();
					}else{
						//Hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO users(fname,lname,email,username,password)VALUES('$first','$last','$email','$uid','$hashedPwd');";
						mysqli_query($conn,$sql);

						header("Location: ../login.php");
						exit();
					}
				}
			}
		}
	}else{
		header("Location: ../signup.php");
		exit();
	}
 ?>