<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 

		include '../menu.php';
		require '../connect.php';
		$id=$_GET['id'];
		$sql="select * from products
		where id='$id'";
		$result= mysqli_query($connect,$sql);
		$each=mysqli_fetch_array($result);


		$sql="select * from manufacturers";
		$manufacturers= mysqli_query($connect,$sql);

		mysqli_close($connect);
	 ?>
	

	<form action="process_update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Tên
		<input type="text" name="name" value="<?php echo $each['name'] ?>">
		<br>
		Đổi ảnh mới
		<input type="file" name="photo_new">
		<br>
		Hoặc giữ ảnh cũ
		<img height="100" src="photos/<?php echo $each['photo'] ?>" alt="">
		<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
		<br>
		Giá
		<input type="number" name="price" value="<?php echo $each['price'] ?>">
		<br>
		Mô tả
		<textarea name="description"><?php echo $each['description'] ?></textarea>
		<br>
		Nhà sản xuất
		<select name="manufacturer_id">
			<?php foreach($manufacturers as $manufacturer): ?>
				<option 
				value="<?php echo $manufacturer['id'] ?>"
				<?php if($each['manufacturer_id']==$manufacturer['id']) { ?>
					selected
				<?php } ?>
				>
					<?php echo $manufacturer['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Sửa</button>

	</form>
</body>
</html>