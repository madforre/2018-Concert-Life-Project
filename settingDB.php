<?php

$hostName='mydbinstance.cm98qq2xrrau.ap-northeast-2.rds.amazonaws.com:3306';// 계정
$dbId='madforre';//계정 아이디
$dbPw='fire0428';//계정 비빌번호
$dbName='test';//DB명
$tableName = 'user'; // 유저 테이블
$tableName2 = 'board_trade'; // trade 테이블
$tableName3 = 'board_qna'; // QnA 테이블
$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

?>
