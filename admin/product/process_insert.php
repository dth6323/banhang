<?php
$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$descreption = $_POST['descreption'];
$manufacturer_id = $_POST['manufacturer_id'];


$folder = 'photos/';
$file_extension = explode('.', $photo["name"])[1];
$file_name = time(). '.' . $file_extension;
$path_file = $folder . time(). '.' . $file_extension;
move_uploaded_file($photo["tmp_name"], $path_file);
require'../conect.php';
$sql = "insert into products(name,photo,price,descreption,manufacturer_id) value('$name','$file_name','$price','$descreption','$manufacturer_id')";
mysqli_query($connect,$sql);

header('location:index.php');