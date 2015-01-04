<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistem Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body onLoad="window.print()">

    

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
	  <?php
			
	  ?>

      <!-- Example row of columns -->
      
		<table border="0">
			<tr>
				<td>
					<img src="images/logo.png" width="70" height="70" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				<td>
					<center>
					<h4>PEMERINTAH KABUPATEN REMBANG</h4>
					<h4>DINAS PENDAPATAN PENGELOLAAN KEUANGAN DAN ASET DAERAH</h4>
					<h5>Jalan Pangeran Diponegoro No. 90 Rembang Telepon: (0295) 693124</h5>
					</center>
				</td>
			</tr>
		</table>
		-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		<h3>Data Registrasi </h3><br/>
		
		<table class="table table-striped">
			<tr>
				<td><b>No</b></td>
				<td><b>Tanggal Masuk</b></td>
				<td><b>Tanggal Proses</b></td>
				<td><b>Pemohon</b></td>
				<td><b>Penerima</b></td>
				<td><b>NOP Baru</b></td>
				<td><b>NOP Lama</b></td>
				<td><b>Jenis Pelayanan</b></td>
				<td><b>Kecamatan</b></td>
			</tr>
		<?php
			include "koneksi.php";
			
			$tampil = "SELECT * FROM melakukan AS m 
						INNER JOIN pemohon AS p ON m.idpemohon = p.idpemohon
						INNER JOIN pelayanan AS pe ON m.kodepelayanan = pe.kodepelayanan
						INNER JOIN kecamatan AS k ON p.idkecamatan = k.idkecamatan
						order by tglproses asc";
			$querytampil = mysql_query($tampil);
			$i = 1;
			while($hasil = mysql_fetch_array($querytampil)) {
				$tglmasuk = $hasil['tglmasuk'];
				$tglproses = $hasil['tglproses'];
				$pemohon = $hasil['nama'];
				$penerima = $hasil['Penerima'];
				$nopbaru = $hasil['nopbaru'];
				$noplama = $hasil['nop'];
				$jenispelayanan = $hasil['jenispelayanan'];
				$kecamatan = $hasil['namakecamatan'];
		?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $tglmasuk; ?></td>
					<td><?php echo $tglproses; ?></td>
					<td><?php echo $pemohon; ?></td>
					<td><?php echo $penerima; ?></td>
					<td><?php echo $nopbaru; ?></td>
					<td><?php echo $noplama; ?></td>
					<td><?php echo $jenispelayanan; ?></td>
					<td><?php echo $kecamatan; ?></td>
				</tr>
		<?php
				$i++;
			}
		?>
		</table>
		<br/><br/>
		
	  

      <hr>

      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
