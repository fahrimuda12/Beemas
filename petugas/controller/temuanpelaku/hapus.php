<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM temuan_pelaku where notlhp='$a'");
header("location:../../home?view=temuanpelaku");
?>