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
		$cart=$_SESSION['cart'];
	 ?>
	 <table border="1" width="100%">
	 	<tr>
	 		<th>Ảnh</th>
	 		<th>Tên</th>
	 		<th>Giá</th>
	 		<th>Số lượng</th>
	 		<th>Tổng tiền</th>
	 		<th>Xóa</th>

	 	</tr>
	 	<?php foreach($cart as $id => $each) : ?>
	 		<tr>
	 			<td><img height="100" src="admin/products/photos/<?php echo $each['photo'] ?>"></td>
	 			<td><?php echo $each['name'] ?></td>
	 			<td><?php echo $each['price'] ?></td>
	 			<td>
	 				<a href="update_quantity_in_cart.php?id=<?php echo $id ?>"></a>
	 				<?php echo $each['quantity'] ?>
	 					
	 				</td>
	 			<td><?php echo $each['price']*  $each['quantity'] ?></td>

	 		</tr>


	 	<?php endforeach ?>
	 </table>	
</body>
</html>