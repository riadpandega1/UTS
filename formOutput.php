<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Output</title>
</head>
<body>
    <table>
    <p style="text-align:center">Data Pemantaun Covid19 wilayah Jawa Barat Per 18 April 2020 21:38:16 
    (Waktu dan Jam Sekarang)Nama Operator/NIM</p>
    <tr>
        <th>Positif</th>
        <th>Dirawat</th>
        <th>Sembuh</th>
        <th>Meninggal</th>
    </tr>
    <tr>
        <?php
        $result1 = $koneksi->query('SELECT SUM(positif) AS value_sum1 FROM dataCovid');
        $result2 = $koneksi->query('SELECT SUM(rawat) AS value_sum2 FROM dataCovid');
        $result3 = $koneksi->query('SELECT SUM(sembuh) AS value_sum3 FROM dataCovid');
        $result4 = $koneksi->query('SELECT SUM(tewas) AS value_sum4 FROM dataCovid');
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $row3 = $result3->fetch_assoc();
        $row4 = $result4->fetch_assoc();
        echo"<td>$sum1 = $row1['value_sum1']</td>";
        echo"<td>$sum2 = $row2['value_sum2']</td>";
        echo"<td>$sum3 = $row3['value_sum3']</td>";
        echo"<td>$sum4 = $row4['value_sum4']</td>";
        ?>
    </tr>
    </table>
</body>
</html>