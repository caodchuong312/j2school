 <style type="text/css">
	.product{
		width: 33%;
		border: 1px solid #34495e;
		height: 250px;
		float: left;
	}
</style>
<?php 
		require 'admin/connect.php';
		$sql="select * from products";
		$result=mysqli_query($connect,$sql);
	 ?>
<div id="main">
	<?php foreach($result as $each): ?>
		<div class="product">
			<h1><?php echo $each['name'] ?></h1>
			<img height="100px" src="admin/products/photos/<?php echo $each['photo'] ?>" alt="" >
			<p><?php echo $each['price'] ?>$</p>
			<a href="view_detail.php?id=<?php echo $each['id'] ?>">Xem chi tiết</a>
			<?php if(!empty($_SESSION['id'])) { ?>
				<br>
			<a href="add_to_cart.php?id=<?php echo $each['id'] ?>">Thêm vào giỏ hàng</a>

			<?php } ?>
		</div>
	<?php endforeach ?>
</div>
