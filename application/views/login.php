<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_login.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<form action="<?php echo base_url('login/proses_login'); ?>" method="post">
		<div class="login-box">
			<h1 class="h1-color">Masuk</h1>
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username" name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Kata Sandi" name="password" value="">
			</div>
			<input class="btn" type="submit" name="login" value="Masuk">
		</div>
			<footer class="footer">
				@ 1819 TSfast
			</footer>
	</form>
</body>
</html>