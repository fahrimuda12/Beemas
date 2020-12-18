<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM tanggapan where id_tanggapan='$a'");
header("location:../../?view=tanggapan");
?>