<?php
	include "koneksi.php";
	
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$tambah = "INSERT INTO petugas VALUES(null,'$nama','$user','$pass');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('daftarmember.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatamember.php');</script>"; 
		echo mysql_error();
	}
?>