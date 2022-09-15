<?php
$id = $_POST['ma'];
$address = $_POST['address'];
$ten = $_POST['ten'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];
require'../conect.php';
$sql = "update nha_san_xuat 
set
dia_chi = '$address',
ten = '$ten',
sdt = '$phone',
anh = '$photo'
where ma  = '$id'
";
header('location:index.php');
mysqli_query($connect,$sql);
mysqli_close($connect);