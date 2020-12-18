<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;

		UploadImage($nama_file_unik);
		$noktp=$_POST['noktp'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$pass=md5($_POST['password']);

		$nohp=$_POST['nohp'];
		//$simpan=mysqli_query($koneksi,"INSERT INTO pelapor VALUES('$noktp')") or die(mysqli_error());
		$simpan=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('$noktp','$nama','$username','$password','$nohp')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../?view=pelapor");
		}
		else
		{
			echo "gagal";
		}
	

?>