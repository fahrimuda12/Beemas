<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan ='$a'");
header("location:../../?view=laporan");
?>