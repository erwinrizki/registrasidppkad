<?php
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	
	include "koneksi.php";
	
	
	$nama = $_POST['nama1'];
	$nop1 = $_POST['nop1'];
	$kecamatan = $_POST['kecamatan'];
	$nama2 = $_POST['nama2'];
	$nop2 = $_POST['nop2'];
	$tanggal = $_POST['tanggal'];
	$tanggal2 = date('Y-m-d');
	
	
	
	
	
		$tambah2 = "INSERT INTO gantinama VALUES(null,'$nama','$nop1','$kecamatan','$nop2','$nop2',,tanggal','$id');";
		$querytambah2 = mysql_query($tambah2);
	
		$tambah2 = "INSERT INTO gantinama VALUES(null,'$nama','$nop1','$kecamatan','$nop2','$nop2',,tanggal','$id');";
		$querytambah2 = mysql_query($tambah2);
	
	
	
	if($querytambah2) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('gantinama.php?id=$id');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatapengunjung.php');</script>";
		echo mysql_error();
	}
	
?>