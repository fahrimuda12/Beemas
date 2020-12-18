<?php 
include "../../include/koneksi.php";

		$id=$_POST['id'];
		$tgl_tlhp=$_POST['tgl_tlhp'];
		$nolaporan=$_POST['nolaporan'];
		$jumlah_tim=$_POST['jumlah_tim'];
		$catatan_pemeriksaan=$_POST['catatan_pemeriksaan'];
		$hasil_sitaan=$_POST['hasil_sitaan'];
$simpan='UPDATE tb_tlhp SET tgl_tlhp="'.$tgl_tlhp.'", nolaporan="'.$nolaporan.'", jumlah_tim="'.$jumlah_tim.'",catatan_pemeriksaan="'.$catatan_pemeriksaan.'" ,hasil_sitaan="'.$hasil_sitaan.'" WHERE notlhp="'.$id.'" ' ;
$query=mysqli_query($koneksi,$simpan) or die(mysqli_error());
		if ($query) {
			header("location:../../home?view=tindaklanjut");
		}
		else
		{
			echo "gagal";
		}
	

?>