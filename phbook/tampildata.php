<html>
<head>
<title>Daftar Buku Teleponku
</title></head>
<body>
<?php 
include 'koneksi0.php';

//ambil data
// buat query.nya
$sqlnya = "SELECT id, nama, telp, alamat, email from phonebook";
//eksekusi query & simpan hasilnya sebagai array
$hasil = mysqli_query($koneksi, $sqlnya);
//echo mysqli_num_rows($hasil);
if (mysqli_num_rows($hasil)>0) {
    
    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Telepon</th><th>Alamat</th><th>email</th><th>Aksi</th> </tr>";
    
    while($barisdata = mysqli_fetch_assoc($hasil)){
        echo "<tr>";
        echo "<td>".$barisdata["nama"]."</td><td>".$barisdata["telp"]."</td><td>".$barisdata["alamat"]."</td><td>".$barisdata["email"]."</td>";
        echo "<td> <FORM method='get' action='hapuskontak.php'><input type='hidden' name='txtid' name='txtid' value='".$barisdata['id']."'><input type='submit' value='Hapus'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
    

} else { // tidak ada data
    echo "Belum ada data";
}
mysqli_close($koneksi);
?>
    
    
</body></html>