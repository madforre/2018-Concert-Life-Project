<?php

$hostName='Database 앤드포인트 입력';// 계정
$dbId='DB 계정 아이디 입력';//계정 아이디
$dbPw='DB 계정 비밀번호 입력';//계정 비빌번호
$dbName='DB명 입력';//DB명
$tableName = 'user'; // 유저 테이블
$tableName2 = 'board_trade'; // trade 테이블
$tableName3 = 'board_qna'; // QnA 테이블
$conn=new mysqli($hostName,$dbId,$dbPw,$dbName);

?>
