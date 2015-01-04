<?php
	include "koneksi.php";
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	
	
	$tambah = "UPDATE pelayanan SET jenispelayanan='$nama' WHERE kodepelayanan='$id';";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Diupdate');location.replace('daftarkecamatan.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Diupdate');location.replace('daftarkecamatan.php');</script>";
		echo mysql_error();
	}
?>