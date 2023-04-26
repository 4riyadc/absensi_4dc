<?php 
include "koneksi.php";
$userid = $_POST["txtid"];
$userpwd = $_POST["txtpwd"];

$sqlnya = "SELECT * from pegawai where id=$userid AND kode ='$userpwd' ";

$hasil = mysqli_query($koneksi,$sqlnya);

if (mysqli_num_rows($hasil)>0) {
    $tglsekarang = date("Y/m/d");
    $tglwaktunow = date("Y/m/d h:i:sa");
    $sqlmerge="INSERT INTO precences (id,tgl,keterangan) values ('$userid','$tglsekarang','Masuk') 
    ON DUPLICATE KEY UPDATE keluar='$tglwaktunow', keterangan='Keluar'";
    $hasilpresensi = mysqli_query($koneksi,$sqlmerge);
    if ($hasil) {
        echo "Berhasil mencatat Masuk/keluar <br>";
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo "Gagal " .mysqli_error($koneksi) . $sqlmerges;
    }
    

} else {
    //kembali ke index.php dengan mengirimkan $pesan
    $pesan = "4004";
    include "index.php?p=".$pesan;
}

?>