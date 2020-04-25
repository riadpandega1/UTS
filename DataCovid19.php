<?php

$wilayah = $positif = $dirawat = $sembuh = $meninggal = $nama = $nim = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $wilayah = $_POST['namawilayah'] ;
    $positif = $_POST['jumlahpositif'] ;
    $dirawat = $_POST['jumlahdirawat'] ;
    $sembuh = $_POST['jumlahsembuh'] ;
    $meninggal = $_POST['jumlahmeninggal'] ;
    $nama = $_POST['namaoperator'] ;
    $nim = $_POST['nimmahasiswa'] ;
}
?>

<html>
    <head>
        <title> UTS PEMROGRAMAN WEB 2 </title>
    </head>
<body>
<h2> Data Pemantaun Covid19 </h2><hr>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
<pre>

Nama Wilayah: <select name="namawilayah"><br>
            <option >Dropdown</option>
            <option value="jakarta">DKI Jakarta</option>
            <option value="jawabarat">Jawa Barat</option>
            <option value="banten">Banten</option>
            <option value="jawatengah">Jawa Tengah</option>
        </select>
<br>
Jumlah Positif      : <input type="text" name="jumlahpositif" size="20">
<br>
Jumlah Dirawat      : <input type="text" name="jumlahdirawat" size="20">
<br>
Jumlah Sembuh       : <input type="text" name="jumlahsembuh" size="20">
<br>
Jumlah Meninggal    : <input type="text" name="jumlahmeninggal" size="20">
<br>
Nama Operator       : <input type="text" name="namaoperator" size="20">
<br>
NIM Mahasiswa       : <input type="text" name="nimmahasiswa" size="20">


<input type="submit" name="proses" value="Simpan" class="button"> <br>

<input type="reset" name="reset" value="Reset" class="button" >
</form>
<br>
<center>
    <h2> Data Pemantaun Covid19 Wilayah Banten<?php echo $_POST['namawilayah'];?><br>
Per 24 April 2020 16:11:00 <br>
Riad Pandega <?php echo $_POST['namaoperator'];?><br>
2016141689 <?php echo $_POST['nimmahasiswa'];?> </h2><hr>
<table>
   <h2></h2>
     <table width="40%" border="1">
    <tr>
       <td>Positif</td>
       <td>Dirawat</td>
       <td>Sembuh</td>
       <td>Meninggal</td>
    </tr>
  <tr>
    <td><?php echo $_POST['jumlahpositif'];?></td>
     <td><?php echo $_POST['jumlahdirawat'];?></td>
      <td><?php echo $_POST['jumlahsembuh'];?></td>
       <td><?php echo $_POST['jumlahmeninggal'];?></td>
</tr>
</table>
</center>