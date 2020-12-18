<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
session_start();
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$pass=md5($_POST['password']);
		$nohp=$_POST['hp'];
		$level=$_POST['level'];
		$simpan= "UPDATE petugas SET nama_petugas = '".$nama."', password = '".$pass."', telp = '".$nohp."', level='".$level."' WHERE id_petugas ='".$id."'";   
		$query=mysqli_query($koneksi,$simpan) or die(mysqli_error());
		if ($query) {
			header("location:../../?view=pegawai");
		}
		else
		{
			echo "gagal";
		}
	

?>