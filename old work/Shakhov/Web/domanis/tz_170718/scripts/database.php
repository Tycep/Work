<?php
try {
	$link = mysqli_connect('127.0.0.1', 'root', '', 'TZ');
} catch (Exception $e) {
	echo "лох";
	exit();
}



function Get_Data(){
	global $link;
	$sql = "SELECT * FROM `Users`";
	$result = mysqli_query($link, $sql);
	$logPass = mysqli_fetch_all($result, 1);
	var_dump($logPass);
	return($logPass);
}



?>