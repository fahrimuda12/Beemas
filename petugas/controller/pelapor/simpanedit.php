<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
session_start();
		$nik=$_POST['nik'];
		$nama=$_POST['nama'];	
		$password=md5($_POST['password']);
		$hp=$_POST['hp'];
		$query= "UPDATE masyarakat SET nama = '".$nama."', password = '".$password."', telp = '".$hp."' WHERE nik ='".$nik."'";    
		$query=mysqli_query($koneksi,$query) or die(mysqli_error());
		if ($query) {
			header("location:../../?view=pelapor");
		}
		else
		{
			echo "gagal";
		}
	

?>