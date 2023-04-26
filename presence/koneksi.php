<?php 
$hostname = "localhost";
$userdb = "root";
$passwd = "";
$dbname = "test";

$koneksi = mysqli_connect($hostname,$userdb,$passwd,$dbname);

if (!$koneksi) {
    die("Koneksi gagal ".mysqli_error($koneksi));
}

?>
