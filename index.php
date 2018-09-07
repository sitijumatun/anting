<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Login Aplikasi Anting</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo anting.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><center>Login Aplikasi Anting</center></h4>
							<form action="controller_login.php" method="POST">
							 
								<div class="form-group">
									<label for="email">Username</label>

									<input id="text" type="text" class="form-control" name="username" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="" class="float-right">
											Forgot Password? Contact Administrator
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								

								<div class="form-group no-margin">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="">Contact Administrator</a>
								</div>
							</form>
							
						</div>
					</div>
					<div class="footer">
						Copyright &copy;  2018
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>


