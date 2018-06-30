<?php

$hostName='DB앤드포인트';// 계정
$dbId='DB아이디입력';
$dbPw='DB비밀번호입력';//계정 비빌번호
$dbName='DB명';//DB명
$tableName = 'user'; // 유저 테이블
$tableName2 = 'board_trade'; // trade 테이블 (미구현)
$tableName3 = 'board_qna'; // QnA 테이블
$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

?>
