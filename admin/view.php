<?php 
$page = isset($_GET['view']) ? $_GET['view'] : null;
switch($page){
    default:
    case "beranda":
         include "beranda.php";
    	 break;
    case 'pegawai':
         include "controller/pegawai/index.php";
    	 break;
    case 'pelapor':
    	include "controller/pelapor/index.php";
    	break;
    case 'data laporan':
        include "controller/datalaporan/index.php";
        break;
    case 'laporan':
        include "controller/laporan/index.php";
        break;
    case 'tanggapan':
        include "controller/tanggapan/index.php";
        break;
    case 'timpemeriksa':
        include "controller/timpemeriksa/index.php";
        break;
    case 'temuanpelaku':
        include "controller/temuanpelaku/index.php";
        break;
     case 'dpo':
        include "controller/dpo/index.php";
        break;
   
}
?>