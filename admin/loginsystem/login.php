<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../../assest/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="jumbotron">
				<?php
					if(isset($_SESSION['u_id'])){
						echo "<p>welcome</p>" . $_SESSION['u_first'];
						echo 
						'<form action="includes/logout.inc.php" method="post">
							<button type="submit" name="submit">Logout</button>
						</form>';
					}else{
					?>
					<div class="my-5 py-5"></div>
					<div class="container bg-light rounded p-5">
					<h3 class="text-center py-4">Login - Admin panel</h3>
						<form method="post" action="includes/login.inc.php">
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password">
							</div>
							<button type="submit" class="btn btn-success d-block w-100" name="submit">Login</button>
							<div class="text-center my-md-4">
							<span>Donot have admin account ? </span>
							<a href="signup.php">Sign up</a></div>
						</form>
					</div>
					
					<?php
					}
				?>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
      <script src="../../assest/js/bootstrap.min.js"></script>
</body>
</html>
