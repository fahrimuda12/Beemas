<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;

		UploadImage($nama_file_unik);
		$kdpegawai=$_POST['kdpegawai'];
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=md5($_POST ['password']);
		$nohp=$_POST['nohp'];
		$level=$_POST['level'];

		$simpan=mysqli_query($koneksi,"INSERT INTO petugas VALUES('$kdpegawai','$nama','$username','$password','$nohp','$level')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../?view=pegawai");
		}
		else
		{
			echo "gagal";
		}
	

?>