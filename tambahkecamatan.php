<?php
	include "koneksi.php";
	
	$namakecamatan = $_POST['nama'];
	
	$tambah = "INSERT INTO kecamatan VALUES(null,'$namakecamatan');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('daftarkecamatan.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatamember.php');</script>"; 
		echo mysql_error();
	}
?>