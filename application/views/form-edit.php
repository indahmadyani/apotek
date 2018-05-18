<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Input Pelanggan</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;





	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Update</h1>
		
	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>">kembali</a>
		<?php if($dataEdit){
			$id 			= $dataEdit->kd_obat;
			$kdobat 		= $dataEdit->kd_obat;
			$proobat 		= $dataEdit->produser_obat;
			$expobat 		= $dataEdit->exp_obat;
			$nmobat 		= $dataEdit->nm_obat;
			$hrgobat 		= $dataEdit->harga_obat;
			$hrgbeli 		= $dataEdit->harga_beli;
			$stokobat 		= $dataEdit->stok_obat;
			$jenobat 		= $dataEdit->jenis_obat;
			$kdsatuan 		= $dataEdit->kd_satuan;
		}else{
			$id 			= "";
			$kdobat 		= "";
			$proobat 		= "";
			$expobat 		= "";
			$nmobat 		= "";
			$hrgobat 		= "";
			$hrgbeli 		= "";
			$stokobat 		= "";
			$jenobat 		= "";
			$kdsatuan 		= "";
		}
		 ?>
		<form action="<?php echo site_url('welcome/update/'. $id) ?>" method="POST">
			Kode obat<br>
			<input type="text" name="kodeobat" value="<?php echo $kdobat ?>" /> <br>
			Produsen Obat <br>
			<input type="text" name="prodobat" value="<?php echo $proobat ?>" /><br>
			Expired Obat<br>
			<input type="text" name="expaobat" value="<?php echo $expobat ?>" /> <br>
			Nama Obat<br>
			<input type="text" name="namaobat" value="<?php echo $nmobat ?>" /> <br>
			Harga Obat<br>
			<input type="text" name="hargaobat" value="<?php echo $hrgobat ?>" /> <br>
			Harga Beli <br>
			<input type="text" name="hargabeli" value="<?php echo $hrgbeli ?>" /><br>
			Stok Obat<br>
			<input type="text" name="stokobat" value="<?php echo $stokobat ?>" /> <br>
			Jenis Obat<br>
			<input type="text" name="jenisobat" value="<?php echo $jenobat ?>" /> <br><br>
			Kode Satuan
			<select type="text" name="kodesatuan" value="<?php echo $kdsatuan ?>">
			<option value="S00001">S00001</option>
			<option value="S00002">S00002</option>
			<option value="S00003">S00003</option>
			</select><br><br>
			<input type="submit" name="simpan" value="simpan" />
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

			