<?php
	require'../conect.php';
	$ma = $_GET['ma'];
	$sql = "delete from nha_san_xuat where ma = $ma";
	mysqli_query($connect,$sql);
	header('location:index.php');