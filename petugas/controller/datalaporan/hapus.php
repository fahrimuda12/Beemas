<?php 
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM pengaduan WHERE id_pengaduan='$a'" )or die(mysql_error());
header("location:../..?view=datalaporan");
?>