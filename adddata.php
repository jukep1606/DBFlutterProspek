<?php

include 'conn.php';

$nama = $_POST['namaPegawai'];
$posisi = $_POST['posisiPegawai'];
$gaji = $_POST['gajiPegawai'];

$connect->query("INSERT INTO tb_prospek (nama, posisi, gaji) values ('".$nama."', '".$posisi."', '".$gaji."')");

?>