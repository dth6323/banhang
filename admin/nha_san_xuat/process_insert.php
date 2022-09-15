<?php


$address = $_POST['address'];
$ten = $_POST['ten'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];
require'../conect.php';
$sql = "insert into nha_san_xuat(ten,dia_chi,sdt,anh) values('$ten','$address','$phone','$photo')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?sucess=Thêm thành công');