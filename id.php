)<style type="text/css">
	
</style>
<?php 
		$id=$_GET['id'];
		require 'admin/connect.php';
		$sql="select * from products
		where id='$id'";
		$result=mysqli_query($connect,$sql);
		$each=mysqli_fetch_array($result);
	 ?>
<div id="main">
			<h1><?php echo $each['name'] ?></h1>
			<img height="100px" src="admin/products/photos/<?php echo $each['photo'] ?>" alt="" >
			<p><?php echo $each['price'] ?>$</p>
			<p><?php echo $each['description'] ?>$</p>
</div>
