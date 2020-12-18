<?php 
$host="localhost";
$user="root";
$password="robotic123";
$database="pengaduan";

$koneksi= new mysqli($host,$user,$password,$database);
if ($koneksi->connect_error) {
	echo "database tidak terkoneksi";
}
?>