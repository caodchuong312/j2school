<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php include '../menu.php' ;
	require '../connect.php';
	$sql="select *from products ";
	$result = mysqli_query($connect,$sql);
	mysqli_close($connect);
	?>
	<h1>Quản lí sản phẩm</h1>
	<a href="form_insert.php">Thêm</a>

	 <?php 
	if(isset($_GET['success'])){  ?>
		<span style="color: green;"> <?php echo $_GET['success']; ?></span>	
	<?php }  ?>


	<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Ảnh</th>
			<th>Giá</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		<?php foreach($result as $each): ?>
			<tr>
				<td><?php echo $each['id']; ?></td>
				<td><?php echo $each['name']; ?></td>
				<td>
					<img height="100" src="photos/<?php echo $each['photo']; ?>" alt="">
				</td>
				<td><?php echo $each['price']; ?></td>
				<td>
					<a href="form_update.php?id=<?php echo $each['id'] ?> ">Sửa</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?> ">Xóa</a>
				</td>
			</tr>

		<?php endforeach ?>
	</table>


</body>
</html>