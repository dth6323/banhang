<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	require'../menu.php';
	require'../conect.php';
	$ma = $_GET['ma'];
	$sql = "select * from nha_san_xuat where ma = $ma";
	$ket_qua = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($ket_qua);
	?>
<form method="post" action="process_update.php">
	<input type="hidden" name="ma" value="<?php echo $each['ma'] ?>">
	Tên
	<input type="text" name="ten" value="<?php echo $each['ten'] ?>">
	<br>
	Địa chỉ 
	<textarea name="address">
		<?php echo $each['dia_chi'] ?>
	</textarea>
	<br>
	Điện thoại
	<input type="text" name="phone"value="<?php echo $each['sdt']?>">
	<br>
	Ảnh	
	<input type="text" name="photo"value="<?php echo $each['anh']?>">
	<br>
	<button>Sửa</button>

</form>
</body>
</html>