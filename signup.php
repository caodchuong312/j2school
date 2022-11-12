<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	 ?>
	<form action="process_signup.php" method="post">
		<h1>Form đăng ký</h1>
		Tên
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Mật khẩu
		<input type="password" name="password">
		<br>
		<button>Đăng ký</button>
	</form>
	
</body>
</html>