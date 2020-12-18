<?php
session_start();
require 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
if ( isset($_POST['username']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT nama_petugas, 
                         level, 
                         id_petugas,
                         telp 
                  FROM petugas 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $koneksi->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = md5( $_POST['password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama_petugas, $level, $id_petugas,$telp);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level;
            $_SESSION['sess_id']    = $id_petugas;
            $_SESSION['nama']       = $nama_petugas;
            $_SESSION['telp']       = $telp;
            
        }

        $check_log->close();

        header('location:../'.$level);
        exit();

    }
     else
    {

        $sql_check = "SELECT nama,  
                         nik,
                         telp 
                  FROM masyarakat 
                  WHERE 
                       username=? 
                       AND 
                       password=? 
                  LIMIT 1";

        $check_log = $koneksi->prepare($sql_check);
        $check_log->bind_param('ss', $username, $password);

        $username = $_POST['username'];
        $password = md5( $_POST['password'] );

        $check_log->execute();

        $check_log->store_result();

        if ( $check_log->num_rows == 1 ) {
            $check_log->bind_result($nama, $nik,$telp);
    
            while ( $check_log->fetch() ) {
                $_SESSION['sess_id']    = $nik;
                $_SESSION['nama']       = $nama;
                $_SESSION['telp']       = $telp;
                
            }
    
            $check_log->close();
    
            header('location:../masyarakat');
            exit();
        }
        else
        {
        header('location:../index.php?view=login');
        exit();
        }
    }

   
} 
else {
    header('location:../index.php?view=login');
    exit();
}