<html>
<head>
<title>Data Pegawai</title></head>
<body>
    <table border="1">
    <tr><th>ID Pegawai</th><th>Nama Pegawai</th><th>Passcode</th>
    </tr>
    <?php 
    include "koneksi.php";
    $sqlnya="SELECT * from pegawai;";
    $hasil = mysqli_query($koneksi,$sqlnya);
    if (mysqli_num_rows($hasil)>0) {
        while($baris = mysqli_fetch_assoc($hasil)){
            echo "<tr>";
            echo "<td>".$baris['id']."</td><td>".$baris['nama']."</td><td>".$baris['kode']."</td>";
            echo "</tr>  ";
        }        
    }
     ?>
    
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>