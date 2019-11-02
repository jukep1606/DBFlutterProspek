<?php

include 'conn.php';

$id = $_POST['id'];
$nama = $_POST['namaPegawai'];
$posisi = $_POST['posisiPegawai'];
$gaji = $_POST['gajiPegawai'];

$connect->query("UPDATE tb_prospek SET nama='".$nama."', posisi='".$posisi."', gaji='".$gaji."' WHERE id=". $id);

?>