<?php 
include "../../include/koneksi.php";

		$id=$_POST['idtanggapan'];
		$tanggapan=$_POST['tanggapan'];
		$simpan= "UPDATE tanggapan SET tanggapan = '".$tanggapan."' WHERE id_tanggapan = '$id'" ;
		$query=mysqli_query($koneksi,$simpan) or die(mysqli_error());
		if ($query) {
			header("location:../../?view=tanggapan");
		}
		else
		{
			echo "gagal";
		}
	

?>