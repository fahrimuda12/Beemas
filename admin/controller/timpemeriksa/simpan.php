<?php 
session_start();
include "../../include/koneksi.php";
include "fungsi_thumb.php";


			$notlhp=$_POST['notlhp'];
			//$tgl_tlhp=$_POST['tgl_tlhp'];
			//$nama=$_POST['nama'];
			//$nolaporan=$_POST['nolaporan'];
			//$jumlah_tim=$_POST['jumlah_tim'];
			foreach ($_SESSION['temp_var'] as $value) {
				$kode = $value['kde'];
				$jbt = $value['jbt'];

				$a=mysqli_query($koneksi,"insert into tim_pemeriksa values('$notlhp','$kode','$jbt')");
				if ($a) {
					echo "yo";
				}else{
					echo "ndk: insert into tim_pemeriksa values('$notlhp','$kode','$jbt')";
				}
			}
?>