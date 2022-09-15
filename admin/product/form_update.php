<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$id = $_GET['id'];
	require'../menu.php';
	require'../conect.php'; 
	$sql = "select * from products where id = '$id'";
	$result = mysqli_query($connect,$sql); 
	$each = mysqli_fetch_array($result); 
	$sql = "select * from nha_san_xuat";
	$result2 = mysqli_query($connect,$sql);
	?>
	<form method="post" action="process_update.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		Tên <input type="text" name="name" value="<?php echo $each['name'] ?>">
		<br>
		Lấy ảnh cũ
		<img src="photos/<?php echo $each['photo'] ?>" height="100" >
		<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
		<br>
		Hoặc cập nhật ảnh mới
		<br>
		<input type="file" name="photo" value="<?php echo $each['photo'] ?>">
		<br>
		Giá <input type="number" name="price" value="<?php echo $each['price'] ?>">
		<br>
		Mô tả <textarea name ="descreption"><?php echo $each['descreption'] ?></textarea>
		<br>
		Nhà sản xuất
		<select name="manufacturer_id">
			<?php foreach ($result2 as $each1): ?>
				<option value="<?php echo $each1['ma'] ?>" 
				<?php if ($each['manufacturer_id'] == $each1['ma']){ ?>
					selected
				<?php } ?>>
					<?php echo $each1['ten'] ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Thêm</button>
	</form>

</body>
</html>