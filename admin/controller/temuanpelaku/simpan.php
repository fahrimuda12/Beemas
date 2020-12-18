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
				$noktpel = $value['noktpel'];
				$nama_pelaku = $value['nama_pelaku'];

				$alamat = $value['alamat'];
				$umur = $value['umur'];


				$status_pelaku = $value['status_pelaku'];
				$pasal_dilanggar = $value['pasal_dilanggar'];


				$hukuman = $value['hukuman'];
				$lama = $value['lama'];
				$denda = $value['denda'];


				$a=mysqli_query($koneksi,"insert into temuan_pelaku values('$notlhp','$noktpel','$nama_pelaku','$alamat','$umur','$status_pelaku','$pasal_dilanggar','$hukuman','$lama','$denda')");
				if ($a) {
					echo "yo";
				}else{
				
				}
			}
?>