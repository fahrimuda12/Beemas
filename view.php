<?php 
$page = isset($_GET['view']) ? $_GET['view'] : null;
switch($page){
    default:
    case "index":
         include "include/beranda.php";
    	 break;
    case 'lapor':
         include "include/lapor.php";
    	 break;
    case 'info':
       	 include "include/info.php";
         break;
    case 'login':
         include "include/login.php";
         break;
   
}
?>