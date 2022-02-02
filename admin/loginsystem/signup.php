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
					<div class="my-5 py-5"></div>
					<div class="container bg-light rounded p-5">
					<h3 class="text-center py-4">Sign up - Admin panel</h3>
						<form method="post" action="includes/signup.inc.php">
                            <div class="mb-3">
								<label for="fname" class="form-label">First Name</label>
								<input type="text" class="form-control" id="fname" name="fname">
							</div>
							<div class="mb-3">
								<label for="lname" class="form-label">Last Name</label>
								<input type="text" class="form-control" id="lname" name="lname">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="mb-3">
								<label for="username" class="form-label">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password">
							</div>
							<button type="submit" class="btn btn-success d-block w-100" name="submit">Sign up</button>
                            <div class="text-center my-md-4">
							<span>Already have account? </span>
							<a href="login.php">Log in</a></div>
						</form>
					</div>
					
                    <br>
                    <br>
                    <br>
                    
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

