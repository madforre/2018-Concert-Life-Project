<?php
header("Content-Type:text/html;charset=UTF-8");
require_once 'settingDB.php';

$conn->query("SET NAMES utf8");//한글 깨짐 
//$conn->query("SET NAMES utf8");//한글 깨짐 

if($conn->connect_error){
	echo " 
	<script>
		alert('접속 오류');
		location.href='index.php';
	</script>";
	exit;
}

?>