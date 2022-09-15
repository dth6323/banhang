<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Đây là khu vực ql nhà sx
<a href="form_insert.php">
	thêm
</a>
<?php 
	require'../menu.php'; 
	require'../conect.php';
	$sql = "select * from nha_san_xuat";
	$ket_qua = mysqli_query($connect,$sql);
	?>
	<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Địa chỉ</th>
			<th>Điện thoại</th>
			<th>Ảnh</th>
		</tr>
		<?php foreach ($ket_qua as $each): ?>
			<tr>
			<td><?php echo $each['ma'] ?></td>
			<td><?php echo $each['ten'] ?></td>
			<td><?php echo $each['dia_chi'] ?></td>
			<td><?php echo $each['sdt'] ?></td>
			<td>
				<img height="100" src="<?php echo $each['anh'] ?> ">
			</td>
			<td><a href="update.php?ma=<?php echo $each['ma'] ?>">
				Sửa
			</a></td>
			<td><a href="delete.php?ma=<?php echo $each['ma'] ?>">Xoá</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>