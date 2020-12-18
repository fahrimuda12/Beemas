<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";

		//$nolaporan=$_POST['nolaporan'];
		$tanggal=$_POST['tanggal'];
		$noktp=$_POST['noktp'];
		$isi_laporan=$_POST['isi_laporan'];
		$kasus=$_POST['kasus'];
		$lokasi_kejadian=$_POST['lokasi_kejadian'];
		$tgl_kejadian=$_POST['tgl_kejadian'];
		$jam_kejadian=$_POST['jam_kejadian'];
		$kerugian_materi=$_POST['kerugian_materi'];
		$kerugian_benda=$_POST['kerugian_benda'];
		$kerugian_lain=$_POST['kerugian_lain'];
		$nominal_kerugian=$_POST['nominal_kerugian'];
		$ciri_ciri_pelaku=$_POST['ciri_ciri_pelaku'];
		$kronologis=$_POST['kronologis'];
		$kdpenyidik=$_POST['kdpenyidik'];
		//$simpan=mysqli_query($koneksi,"INSERT INTO pelapor VALUES('$noktp')") or die(mysqli_error());
		$simpan=mysqli_query($koneksi,"INSERT INTO laporan VALUES (NULL,'$tanggal','$noktp','$isi_laporan','$kasus','$lokasi_kejadian','$tgl_kejadian','$jam_kejadian','$kerugian_materi','$kerugian_benda','$kerugian_lain','$nominal_kerugian','$ciri_ciri_pelaku','$kronologis','$kdpenyidik')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../home?view=laporan");
		}
		else
		{
			echo "gagal";
		}
	

?>