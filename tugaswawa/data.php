<?php

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$db = new pdo("mysql:host=localhost;dbname=data_siswaa","root","");
$query = $db->query("INSERT INTO `tddatasiswa` values ('$nis','$nama','$kelas')");

if($query){
    header("location:home.php");
}