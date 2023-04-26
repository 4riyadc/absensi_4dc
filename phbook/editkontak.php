<html>
<head>
<title>Edit Kontak
</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
<table>
<tr>
<td>ID</td><td>:</td><td><input type="text" name="txtid" id="txtid" value=""></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="txtnama" id="txtnama" value=""></td>
</tr>
<tr>
<td>Telepon</td><td>:</td><td><input type="text" name="txttelp" id="txttelp" value=""></td>
</tr>
<tr>
<td>Alamat</td><td>:</td><td><input type="text" name="txtalamat" id="txtalamat" value=""></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="txtemail" id="txtemail" value=""></td>
</tr>
<tr>
<td colspan="3" style="text-align: right;"><input type="submit" value="Simpan"></td>
</tr>
</table>
</form>
<?php 

if (isset($_GET["txtid"]) && isset($_GET["txtnama"])) {
    
    include 'koneksi0.php';
    $idupdate= $_GET["txtid"];
    $namaupdate = $_GET["txtnama"];
    $telpupdate = $_GET["txttelp"];
    $alamatupdate = $_GET["txtalamat"];
    $emailupdate = $_GET["txtemail"];

    $queryupdate = "UPDATE phonebook set nama='".$namaupdate."', telp='".$telpupdate."', alamat='".$alamatupdate."', email='".$emailupdate."' where id= $idupdate ";
    
    if (mysqli_query($koneksi,$queryupdate)) {
        echo "Update kontak  berhasil<br><a href='index.php'>Kembali</a>";
		
    } else {//gagal eksekusi query
        die("Update kontak gagal" . $queryupdate."<br>". mysqli_error($koneksi)."<br><a href='index.php'>Kembali</a>");
    }
    mysqli_close($koneksi);
} else {
    # code...
}

?>
</body>
</html>