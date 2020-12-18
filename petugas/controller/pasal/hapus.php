<?php 
error_reporting(0);
include "../../include/koneksi.php";
$a=$_GET['id'];


mysqli_query($koneksi,"DELETE FROM pasal where nopasal='$a'");
header("location:../../home?view=pasal");
?>