<?php 
include "../../include/koneksi.php";


		
		$nopasal=$_POST['nopasal'];
		$ket_pasal=$_POST['ket_pasal'];
		$sanksi_min=$_POST['sanksi_min'];
		$sanksi_max=$_POST['sanksi_max'];
		$denda_min=$_POST['denda_min'];
		$denda_max=$_POST['denda_max'];

		$simpan=mysqli_query($koneksi,"INSERT INTO pasal VALUES('$nopasal','$ket_pasal','$sanksi_min','$sanksi_max','$denda_min','$denda_max')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../home?view=pasal");
		}
		else
		{
			echo "gagal";
		}
	

?>