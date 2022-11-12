<?php 
	session_start();
	if(empty($_SESSION['id'])){
		header('location:signin.php?error=Vui lòng đăng nhập');
		exit;
	}	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Đây là trang người dùng
	<?php
	echo $_SESSION['name']; 
	 ?>
	 <a href="signout.php">Đăng xuất</a>
	
</body>
</html>