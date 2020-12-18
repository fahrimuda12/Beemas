<?php 
include "../../include/koneksi.php";
include "fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;

		UploadImage($nama_file_unik);
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$nohp=$_POST['nohp'];
		$jenkel=$_POST['jenkel'];
		$pangkat=$_POST['pangkat'];
$simpan='UPDATE penyidik SET nama="'.$nama.'", alamat="'.$alamat.'", nohp="'.$nohp.'", jenkel="'.$jenkel.'", pangkat="'.$pangkat.'", foto="'.$nama_file_unik.'" WHERE kdpenyidik="'.$id.'" ' ;
$query=mysqli_query($koneksi,$simpan);
		if ($query) {
			header("location:../../home?view=penyidik");
		}
		else
		{
			echo "gagal";
		}
	

?>