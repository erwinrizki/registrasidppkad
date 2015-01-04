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
	
	
	$tambah = "INSERT INTO pemohon VALUES(null,'$nama','$kecamatan','$nop1');";
	$querytambah = mysql_query($tambah);
	
			
	$id=$_POST['idpelayanan'];
	$tampil = "SELECT * FROM pemohon where nop='$nop1'";
	$querytampil = mysql_query($tampil);
	$hasil = mysql_fetch_array($querytampil);
	$idpemohon = $hasil['idpemohon'];
	
	if ($id==2|| $id==3){
		$tambah2 = "INSERT INTO melakukan VALUES(null,'$tanggal','$tanggal2','$nama2','$nop2','$idpemohon','$id');";
		$querytambah2 = mysql_query($tambah2);
	}else{
		$tambah2 = "INSERT INTO melakukan VALUES(null,'$tanggal','$tanggal2','$nama','$nop2','$idpemohon','$id');";
		$querytambah2 = mysql_query($tambah2);
	}
	
	
	if($querytambah2) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('gantinama.php?id=$id');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatapengunjung.php');</script>";
		echo mysql_error();
	}
	
?>