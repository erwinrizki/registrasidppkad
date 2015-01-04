<?php
	include "koneksi.php";
	
	$jenispelayanan = $_POST['nama'];
	
	$tambah = "INSERT INTO pelayanan VALUES(null,'$jenispelayanan');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('daftarpelayanan.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatamember.php');</script>"; 
		echo mysql_error();
	}
?>