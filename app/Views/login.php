<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/public/assets/img/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/feathericon.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/style.css"> 
</head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="<?php echo base_url(); ?>/public/assets/img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<form method="post" action="Auth/login">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Username" name="txtUser" /> 
								</div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Password" name="txtPass"> 
								</div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>/public/assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/assets/js/script.js"></script>
</body>

</html>