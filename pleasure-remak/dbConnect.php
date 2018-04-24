<?php

$hostName = "localhost";//계정
$dbId = "soyo0823";//계정 아이디
$dbPw = "qus82391823";//계정 비밀번호
$dbName = "soyo0823";//DB명

$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);
$conn->query("SET NAMES utf8");//한글 깨짐 방지

if($conn->connect_error){
    echo"
    <script>
    alert('접속 오류');
    location.href='pleasure.php';
    </script>
    ";
    exit;
}


?>