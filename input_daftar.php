<?php
include 'koneksi.php';
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hp = $_POST['nomor_hp'];
	$sex = $_POST['jenis_kelamin'];
mysqli_query($host,"insert into register 
	values 
	('','$id','$username','$password','$hp','$sex')");

header("location:web.php");
?>