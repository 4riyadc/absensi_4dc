<?php 
include 'koneksi0.php';
//tangkap data yg dikirim form
$namabaru = $_GET["txtnama"];
$telpbaru = $_GET['txttelp'];
$alamatbaru = $_GET['txtalamat'];
$emailbaru = $_GET['txtemail'];
//cek data kiriman
//echo ($namabaru . ':: '.$telpbaru.'::'.$alamatbaru.$emailbaru);
$querytambah = "INSERT INTO phonebook (nama,telp,alamat,email) values ('".$namabaru."','".$telpbaru."','".$alamatbaru."','".$emailbaru."') ";
//eksekusi query

if (mysqli_query($koneksi,$querytambah)) {
    echo "Penambahan kontak baru berhasil<br><a href='index.php'>Kembali</a>";
} else {//gagal eksekusi query
    die("Tambah data gagal" . $querytambah."<br>". mysqli_error($koneksi)."<br><a href='index.php'>Kembali</a>");
}
mysqli_close($koneksi);

?>