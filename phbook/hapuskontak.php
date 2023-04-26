<?php 
$idkontak = $_GET["txtid"];
include 'koneksi0.php';

$queryhapus = "DELETE from phonebook where id=".$idkontak."";


if (mysqli_query($koneksi,$queryhapus)) {
    echo "Penghapusan kontak berhasil<br><a href='index.php'>Kembali</a>";
} else {//gagal eksekusi query
    die("hapus kontak gagal" . $queryhapus."<br>". mysqli_error($koneksi)."<br> <a href='index.php'>Kembali</a>");
}
mysqli_close($koneksi);

?>