<?php
include 'koneksi.php';
$arrWilayah = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah'); //list wilayah
$keyWilayah = $_POST['wilayah']; //key wilayah
$valWilayah = $arrWilayah[$_POST['wilayah']]; //value wilayah
$jPositif = $_POST['jpositif'];
$jRawat = $_POST['jrawat'];
$jSembuh = $_POST['jsembuh'];
$jTewas = $_POST['jtewas'];
$NOperator = $_POST['noperator'];
$nim = $_POST['nim'];

//query mysql
$query = "INSERT INTO datacovid SET wilayah='$valWilayah',positif='$jPositif',rawat='$jRawat',
sembuh='$jSembuh',tewas='$jTewas',nama='$NOperator',nim='$nim'";
mysqli_query($koneksi, $query);
//back to home
header("location:index.php");
?>