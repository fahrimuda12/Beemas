<?php 
include "../../include/koneksi.php";

		$id=$_POST['id'];
		$ket_pasal=$_POST['ket_pasal'];
		$sanksi_min=$_POST['sanksi_min'];
		$sanksi_max=$_POST['sanksi_max'];
		$denda_min=$_POST['denda_min'];
		$denda_max=$_POST['denda_max'];
$simpan='UPDATE pasal SET ket_pasal="'.$ket_pasal.'", sanksi_min="'.$sanksi_min.'", sanksi_max="'.$sanksi_max.'", denda_min="'.$denda_min.'", denda_max="'.$denda_max.'" WHERE nopasal="'.$id.'" ' ;
$query=mysqli_query($koneksi,$simpan);
		if ($query) {
			header("location:../../home?view=pasal");
		}
		else
		{
			echo "gagal";
		}
	

?>