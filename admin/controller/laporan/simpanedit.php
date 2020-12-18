<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
session_start();
		$r = $_SESSION['sess_id'];
		$id_tanggapan = base_convert(microtime(false), 10, 36);
		$id=$_POST['id'];
		$tgl_kejadian=date('Y-m-d');
		$tanggapan=$_POST['tanggapan'];	
		$query= "INSERT INTO tanggapan (id_tanggapan,id_pengaduan,tgl_tanggapan,tanggapan,id_petugas)
		VALUES ('$id_tanggapan','$id', '$tgl_kejadian','$tanggapan','$r')";    
		$query=mysqli_query($koneksi,$query) or die(mysqli_error());
		if ($query) {
			$query= "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan ='".$id."'";
			$query=mysqli_query($koneksi,$query) or die(mysqli_error());
			header("location:../../?view=laporan");
		}
		else
		{
			echo "gagal";
		}
	

?>