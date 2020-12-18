<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'robotic123');
define('DBNAME', 'pengaduan');

/**
 * $dbconnect : koneksi kedatabase
 */
$koneksi = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/**
 * Check Error yang terjadi saat koneksi
 * jika terdapat error maka die() // stop dan tampilkan error
 */
if ($koneksi->connect_error) {
	die('Database Not Connect. Error : ' . $koneksi->connect_error);
}