<?php    
include "koneksi.php";
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['hp'];
    $cek_user=mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE username='$username'")  or die(mysqli_error());
    $cek = mysqli_num_rows($cek_user);
    if ($cek > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="../include/register.php";
              </script>';
              exit();
    }
    else {
        mysqli_query($koneksi,"INSERT INTO masyarakat (nik, nama, username, password, telp)VALUES ('$nik', '$nama', '$username', '$password', '$telp')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="../";
              </script>';
              exit();
    }
?>