<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM kecamatan WHERE idkecamatan='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Berhasil Dihapus');location.replace('daftarkecamatan.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('daftarkecamatan.php');</script>";
	}
?>