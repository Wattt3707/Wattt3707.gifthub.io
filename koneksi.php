<?php
$host = mysqli_connect("127.0.0.1","root","root","daftar");
if (mysqli_connect_errno()){
	echo "Koneksi Database Gagal : "
	. mysqli_connect_error();
}
?>