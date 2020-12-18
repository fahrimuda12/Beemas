<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";

		$notlhp=$_POST['notlhp'];
		$tgl_tlhp=$_POST['tgl_tlhp'];
		$nolaporan=$_POST['nolaporan'];
		$jumlah_tim=$_POST['jumlah_tim'];
		$catatan_pemeriksaan=$_POST['catatan_pemeriksaan'];
		$hasil_sitaan=$_POST['hasil_sitaan'];
	
		//$simpan=mysqli_query($koneksi,"INSERT INTO pelapor VALUES('$noktp')") or die(mysqli_error());
		$simpan=mysqli_query($koneksi,"INSERT INTO tb_tlhp VALUES ('$notlhp','$tgl_tlhp','$nolaporan','$jumlah_tim','$catatan_pemeriksaan','$hasil_sitaan')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../home?view=tindaklanjut");
		}
		else
		{
			echo "gagal";
		}
	

?>