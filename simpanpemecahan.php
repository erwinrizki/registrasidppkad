<?php
	date_default_timezone_set('Asia/Jakarta');
	
	include "koneksi.php";
	
	$nama = $_POST['nama'];
	$kecamatan = $_POST['kecamatan'];
	$nop = $_POST['nop'];
	$nama1 =$_POST['nama1'];
	$nop1 = $_POST ['nop1'];
	$tanggal = $_POST['tanggal'];
	$tanggal2 = date('Y-m-d');
	
	
	$tambah = "INSERT INTO pemohon VALUES(null,'$nama','$kecamatan','$nop');";
	$querytambah = mysql_query($tambah);
	
			
	$tampil = "SELECT * FROM pemohon where nop='$nop'";
	$querytampil = mysql_query($tampil);
	$hasil = mysql_fetch_array($querytampil);
	$idpemohon = $hasil['idpemohon'];
	
	foreach($nama1 as $namakey => $namavalue) {
		
			$tambah2 = "INSERT INTO melakukan VALUES(null,'$tanggal','$tanggal2','$namavalue','$nop1[$namakey]','$idpemohon',4);";
			$querytambah2 = mysql_query($tambah2);
				
	}
	
	
	if($querytambah2) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('pemecahan.php');</script>";
	} else {
		//echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatamember.php');</script>"; 
		echo mysql_error();
	}
?>