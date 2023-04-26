<html>
<head>
<title>Data Kehadiran</title></head>
<body>
    <table border="1">
    <tr><th>Pegawai</th><th>Tanggal</th><th>Masuk</th><th>Keluar</th>
    </tr>
    <?php 
    include "koneksi.php";
    $sqlnya="SELECT precences.*, pegawai.nama from precences join pegawai on (precences.id=pegawai.id) order by precences.tgl,precences.id ;";
    $hasil = mysqli_query($koneksi,$sqlnya);
    //var_dump($hasil);
    if (mysqli_num_rows($hasil)>0) {
        while($baris = mysqli_fetch_assoc($hasil)){
            echo "<tr>";
            echo "<td>".$baris['id'].". ".$baris['nama']."</td><td>".$baris['tgl']."</td><td>".$baris['masuk']."</td><td>".$baris['keluar']."</td>";
            echo "</tr>  ";
        }        
    }
    mysqli_close($koneksi);
     ?>
    
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>