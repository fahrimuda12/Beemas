<?php 
session_start();
$r = $_SESSION['sess_id'];
    require 'config.php';
    $tampil = mysqli_query($koneksi, "SELECT * from pengaduan WHERE id_pengaduan =".$r."");
    $no=1; 
    while($r=mysqli_fetch_array($tampil)):          
?>