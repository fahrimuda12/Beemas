<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['sess_id'])){ // Jika session username ada berarti dia sudah login
  header("location:"); // Kita Redirect ke halaman welcome.php
}
else
{
    header("location:../");
}
?>
<?php include "include/header.php" ;?>
<!-- MENU SECTION END-->
<?php include "view.php"; ?>  
<?php include "include/footer.php" ;?>