<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM pengaduan where id_pengaduan='$a'");
header("location:../../?view=laporan");
?>