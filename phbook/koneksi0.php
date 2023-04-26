<?php 
$namaserver = "localhost";
$username = "inir8265_root";
$passwd = "root2021";
$namadb="inir8265_test";

$koneksi = mysqli_connect($namaserver,$username,$passwd,$namadb);
//periksa koneksi berhasil atau tidak
if(!$koneksi){
    die("Koneksi database gagal" . mysqli_connect_error());
}
//echo "koneksi berhasil";
?>