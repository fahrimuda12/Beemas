<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;

		UploadImage($nama_file_unik);
		$nama=$_POST['nama'];
		$tempatlahir=$_POST['tempatlahir'];
		$tgl=$_POST['tgl'];
		$jk=$_POST['jk'];
		$umur=$_POST['umur'];
		$wni=$_POST['wni'];
		$pterakhir=$_POST['pterakhir'];
		$alamat=$_POST['alamat'];
		$pernahterkaitkasus=$_POST['pernahterkaitkasus'];
		$ciriciri=$_POST['ciriciri'];
		$pasaldilanggar=$_POST['pasaldilanggar'];
		$keteranganpolisi=$_POST['keteranganpolisi'];

		$simpan=mysqli_query($koneksi,"INSERT INTO dpo VALUES(NULL,'$nama','$tempatlahir','$tgl','$jk','$umur','$wni','$pterakhir','$alamat','$pernahterkaitkasus','$ciriciri','$pasaldilanggar','$keteranganpolisi','$nama_file_unik')") or die(mysqli_error());
		if ($simpan) {
			header("location:../../home?view=dpo");
		}
		else
		{
			echo "gagal";
		}
	

?>