<html>
<head>
<title>simulasi mesin absensi/presensi
</title>
</head>
<h1>Simulasi Mesin Absensi/Presensi</h1>
<form action="catatpresensi.php" method="POST">
<table>
<thead>Silahkan Masukkan ID & password untuk Masuk/Keluar</thead>
<tr>
<td></td><td>ID</td><td></td><td><input type="text" name="txtid" id="txtid" autocomplete="off" required></td>
</tr>
<tr>
<td></td><td>Password</td><td></td><td><input type="password" name="txtpwd" id="txtpwd" required></td>
</tr>
<tr>
<td colspan="4" style="text-align: right;"><input type="submit" name="sub1" id="sub1" value="Catat"></td>
</tr>
</form>
</table>
<p id="keterangan" style="color:Tomato;"><?php 
if (isset($_GET["p"])) {
    if ($_GET["p"]>='4004') {
        echo "<b>ID/Password tidak sesuai</b>";
    };
}
 ?></p>
<hr>
<a href="tampilpegawai.php"> Data Pegawai</a>
<hr>
<form action="rekaphadir.php" method="POST">Rekap Presensi. Bulan <input type="number" id="bln" name="bln" min="1" max="12" required>, Tahun <input type="number" id="thn" name="thn" min="2020" max="2021" required> 
<input type="submit" name="subrekap" id="subrekap" value="Rekap">
</form>

<hr>
<a href="tampilhadir.php">Semua Data Kehadiran</a> 
</html>