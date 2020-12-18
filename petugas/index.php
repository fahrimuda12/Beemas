 <?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'petugas' ) ) {

	header('location:./../index.php');
	exit();
}
else
{
	include "include/header.php";

 	include "view.php"; 
			
 	include "include/footer.php";
}
?>
