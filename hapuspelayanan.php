<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM pelayanan WHERE kodepelayanan='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Berhasil Dihapus');location.replace('daftarpelayanan.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('daftarpelayanan.php');</script>";
	}
?>