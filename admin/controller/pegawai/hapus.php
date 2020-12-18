<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM petugas where id_petugas='$a'");
header("location:../../?view=pegawai");
?>