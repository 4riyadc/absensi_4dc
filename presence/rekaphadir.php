<html>
<head>
<title>Rekap Kehadiran</title></head>
<body>
<h1>Rekap Kehadiran <br>
Bulan <?php echo $_POST['bln']; ?> , Tahun <?php echo $_POST['thn']; ?></h1>
    <table border="1">
    <tr><th>Pegawai</th><th>01</th><th>02</th><th>03</th><th>04</th><th>05</th><th>06</th>
    <th>07</th><th>08</th><th>09</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th><th>21</th><th>22</th>
    <th>23</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th><th>29</th><th>30</th>
    <th>31</th><th>Total Hadir</th>
    </tr>
    <?php 
    include "koneksi.php";

    $bln=$_POST['bln'];
    $thn=$_POST['thn'];

    $sqlnya='SELECT nama,SUM(d01) d1,SUM(d02) d2,SUM(d03) d3 ,SUM(d04) d4,SUM(d05) d5,SUM(d06) d6,SUM(d07) d7,SUM(d08) d8,SUM(d09) d9,SUM(d10) d10,
    sum(d11) d11,SUM(d12) d12,SUM(d13) d13 ,SUM(d14) d14, SUM(d15) d15,SUM(d16) d16,SUM(d17) d17,SUM(d18) d18,
    SUM(d19) d19,SUM(d20) d20,SUM(d21) d21,SUM(d22) d22,SUM(d23) d23,SUM(d24) d24 ,SUM(d25) d25,SUM(d26) d26 ,SUM(d27) d27,SUM(d28) d28,SUM(d29) d29,SUM(d30) d30,SUM(d31) d31
    FROM
    (
    SELECT pegawai.nama nama,
    (if(date_format(present.tgl,"%d")="01",1,null)) AS "d01" ,
    (if(date_format(present.tgl,"%d")="02",1,null)) AS "d02",
    (if(date_format(present.tgl,"%d")="03",1,null)) AS "d03", 
    (if(date_format(present.tgl,"%d")="04",1,null)) AS "d04", 
    (if(date_format(present.tgl,"%d")="05",1,null)) AS "d05", 
    (if(date_format(present.tgl,"%d")="06",1,null)) AS "d06", 
    (if(date_format(present.tgl,"%d")="07",1,null)) AS "d07", 
    (if(date_format(present.tgl,"%d")="08",1,null)) AS "d08", 
    (if(date_format(present.tgl,"%d")="09",1,null)) AS "d09", 
    (if(date_format(present.tgl,"%d")="10",1,null)) AS "d10", 
    (if(date_format(present.tgl,"%d")="11",1,null)) AS "d11", 
    (if(date_format(present.tgl,"%d")="12",1,null)) AS "d12", 
    (if(date_format(present.tgl,"%d")="13",1,null)) AS "d13", 
    (if(date_format(present.tgl,"%d")="14",1,null)) AS "d14", 
    (if(date_format(present.tgl,"%d")="15",1,null)) AS "d15", 
    (if(date_format(present.tgl,"%d")="16",1,null)) AS "d16", 
    (if(date_format(present.tgl,"%d")="17",1,null)) AS "d17", 
    (if(date_format(present.tgl,"%d")="18",1,null)) AS "d18", 
    (if(date_format(present.tgl,"%d")="19",1,null)) AS "d19", 
    (if(date_format(present.tgl,"%d")="20",1,null)) AS "d20", 
    (if(date_format(present.tgl,"%d")="21",1,null)) AS "d21", 
    (if(date_format(present.tgl,"%d")="22",1,null)) AS "d22", 
    (if(date_format(present.tgl,"%d")="23",1,null)) AS "d23", 
    (if(date_format(present.tgl,"%d")="24",1,null)) AS "d24", 
    (if(date_format(present.tgl,"%d")="25",1,null)) AS "d25", 
    (if(date_format(present.tgl,"%d")="26",1,null)) AS "d26", 
    (if(date_format(present.tgl,"%d")="27",1,null)) AS "d27", 
    (if(date_format(present.tgl,"%d")="28",1,null)) AS "d28", 
    (if(date_format(present.tgl,"%d")="29",1,null)) AS "d29", 
    (if(date_format(present.tgl,"%d")="30",1,null)) AS "d30", 
    (if(date_format(present.tgl,"%d")="31",1,null)) AS "d31"
     FROM pegawai left JOIN 
    ( SELECT *   FROM precences where YEAR(precences.tgl)='.$thn.' AND MONTH(precences.tgl)='.$bln.') present
    on(pegawai.id=present.id )
    ) allabsence
    GROUP BY nama
    ';

    $hasil = mysqli_query($koneksi,$sqlnya);
    
    if (mysqli_num_rows($hasil)>0) {
        while($baris = mysqli_fetch_assoc($hasil)){
            echo "<tr>";
            $Totalz= $baris['d1']+$baris['d2']+$baris['d3']+$baris['d4']+$baris['d5']+$baris['d6']+$baris['d7']+$baris['d8']+$baris['d9']+$baris['d10']+$baris['d11']+$baris['d12']+$baris['d13']+ $baris['d14']+$baris['d15']+$baris['d16']+$baris['d17']+$baris['d18']+$baris['d19']+$baris['d20']+$baris['d21']+$baris['d22']+$baris['d23']+$baris['d24']+$baris['d25']+$baris['d26']+$baris['d27']+$baris['d28']+$baris['d29']+$baris['d30']+$baris['d31']  ;

            echo "<td>".$baris["nama"]."</td><td>".$baris['d1']."</td><td>".$baris['d2']."</td><td>".$baris['d3']."</td><td>".$baris['d4']."</td><td>".$baris['d5']."</td><td>".$baris['d6']."</td> <td>".$baris['d7']."</td><td>".$baris['d8']."</td><td>".$baris['d9']."</td><td>".$baris['d10']."</td><td>".$baris['d11']."</td><td>".$baris['d12']."</td><td>".$baris['d13']."</td>
             <td>".$baris['d14']."</td><td>".$baris['d15']."</td><td>".$baris['d16']."</td><td>".$baris['d17']."</td><td>".$baris['d18']."</td><td>".$baris['d19']."</td><td>".$baris['d20']."</td>
             <td>".$baris['d21']."</td><td>".$baris['d22']."</td><td>".$baris['d23']."</td><td>".$baris['d24']."</td><td>".$baris['d25']."</td><td>".$baris['d26']."</td><td>".$baris['d27']."</td>
             <td>".$baris['d28']."</td><td>".$baris['d29']."</td><td>".$baris['d30']."</td><td>".$baris['d31']."</td><td>".$Totalz."</td>";
        }        
    }
    mysqli_close($koneksi);
     ?>
    
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>