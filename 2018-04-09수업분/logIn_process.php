<?php

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];

function loginChecked($userId, $userPw){
    if(!isset($userId) || !isset($userPw)){
        echo "<script>
            alert('아이디와 비밀번호 정보가 없습니다');
            location.href='login.php';
            </script>";
        exit;
    }
    if($userId=="" || $userId==null){
        echo "<script>
            alert('아이디를 입력해주세요.');
            history.go(-1); 
            </script>";
        exit;
    }
    if($userPw=="" || $userPw==null){
        echo "<script>
            alert('비밀번호를 입력해주세요.');
            history.go(-1);
            </script>";
        exit;
    }
    if($userId!="manso"){
        echo "<script>
            alert('아이디가 틀립니다. 다시 입력해주세요');
            history.go(-1);
            </script>";
        exit;
    }
    if($userPw!="1111"){
        echo "<script>
            alert('비밀번호가 틀립니다. 다시 입력해주세요');
            history.go(-1);
            </script>";
        exit;
    }
    if($userId!="manso" || $userPw!="1111"){
        echo "<script>
            alert('아이디나 비밀번호가 틀립니다. 다시 입력해주세요');
            history.go(-1);
            </script>";
        exit;
    }
    
    @session_start(); // @ <-- 오류로 인해 프로그램이 종료되는 것을 방지   
    $_SESSION["sessionId"] = $userId;
    
        echo "<script>
            alert('로그인에 성공하였습니다. index.php 페이지로 이동합니다.');
            location.href='index.php';
            </script>";
        exit;
}

loginChecked($userId,$userPw);

?>