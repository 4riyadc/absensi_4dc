<?php 
$hostname = "localhost";
$userdb = "inir8265_root";
$passwd = "root2021";
$dbname = "inir8265_test";

$koneksi = mysqli_connect($hostname,$userdb,$passwd,$dbname);

if (!$koneksi) {
    die("Koneksi gagal ".mysqli_error($koneksi));
}

?>