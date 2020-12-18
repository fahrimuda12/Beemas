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
		$tempatlhr=$_POST['tempatlhr'];
		$tgllahr=$_POST['tgllahr'];
		$jenkel=$_POST['jenkel'];
		$alamat=$_POST['alamat'];
		$lurah_desa=$_POST['lurah_desa'];
		$nohp=$_POST['nohp'];
$simpan='UPDATE pelapor SET nama="'.$nama.'", tempatlhr="'.$tempatlhr.'", tgllahr="'.$tgllahr.'",jenkel="'.$jenkel.'" ,alamat="'.$alamat.'",lurah_desa="'.$lurah_desa.'",nohp="'.$nohp.'",foto="'.$nama_file_unik.'" WHERE noktp="'.$id.'" ' ;
$query=mysqli_query($koneksi,$simpan) or die(mysqli_error());
		if ($query) {
			header("location:../../home?view=pelapor");
		}
		else
		{
			echo "gagal";
		}
	

?>