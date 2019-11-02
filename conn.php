<?php

$connect = new mysqli("localhost", "root", "", "db_prospek");

if ($connect) {
	
} else { 
	echo "Connection Failed";
	exit();

}

?>