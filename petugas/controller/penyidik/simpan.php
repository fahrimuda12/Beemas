<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;

		UploadImage($nama_file_unik);
		$kdpenyidik=$_POST['kdpenyidik'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$nohp=$_POST['nohp'];
		$jenkel=$_POST['jenkel'];
		$pangkat=$_POST['pangkat'];

		$simpan=mysqli_query($koneksi,"INSERT INTO penyidik VALUES('$kdpenyidik','$nama','$alamat','$nohp','$jenkel','$pangkat','$nama_file_unik')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../home?view=penyidik");
		}
		else
		{
			echo "gagal";
		}
	

?>