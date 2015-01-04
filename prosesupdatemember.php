<?php
	include "koneksi.php";
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$tambah = "UPDATE petugas SET nama='$nama', username='$user', password='$pass' WHERE idpetugas='$id';";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Diupdate');location.replace('daftarmember.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Diupdate');location.replace('daftarmember.php');</script>";
		echo mysql_error();
	}
?>