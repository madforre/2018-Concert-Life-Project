<?php

$hostName='localhost';// 계정
$dbId='root';//계정 아이디
$dbPw='fire0428';//계정 비빌번호
$dbName='test';//DB명
$tableName = 'user'; // 유저 테이블
$tableName2 = ''; // trade 테이블
$tableName3 = 'board_qna'; // QnA 테이블
$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

?>