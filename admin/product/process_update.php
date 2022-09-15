<?php
$id = $_POST['id'];
$photo_old = $_POST['photo_old'];
$name = $_POST['name'];
$photo_new = $_FILES['photo'];
$price = $_POST['price'];
$descreption = $_POST['descreption'];
$manufacturer_id = $_POST['manufacturer_id'];

if($photo_new['size']>0){
$folder = 'photos/';
$file_extension = explode('.', $photo_new["name"])[1];
$file_name = time(). '.' . $file_extension;
$path_file = $folder . time(). '.' . $file_extension;
move_uploaded_file($photo_new["tmp_name"], $path_file);
}
else
	$file_name = $_POST['photo_old'];
require'../conect.php';
$sql = "update products
set
name = '$name',
photo = '$file_name',
descreption = '$descreption',
price = '$price',
manufacturer_id = '$manufacturer_id'
where id = '$id'
";
header('location:index.php');
mysqli_query($connect,$sql);