<?php
require 'koneksi.php';
session_start();
$id = $_POST['id'];
$query= "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan = '$id'";   
 $sql = mysqli_query($koneksi, $query);
 if($sql) // Cek jika proses simpan ke database sukses atau tidak
 { 
     header("location: ../?view=status.php"); // Redirectke halaman index.php
 }
 else
 {
         echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
         echo "<br><a href='form.php'>Kembali Ke Form</a>";
 }
?>