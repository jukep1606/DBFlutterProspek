<?php

include 'conn.php';

$hasil = $connect->query("select * from tb_prospek");

$result = array();

while ($dapatData = $hasil->fetch_assoc()) {

	$result[] = $dapatData;
}

echo json_encode($result);

?>