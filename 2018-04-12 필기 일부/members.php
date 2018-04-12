<?php

class Members{
    
    public $userId;
    public $userPw;
    public $userName;
    
    function selectDoMethod(){
        echo $this->userId.", ".$this->userPw.", ".$this->userName;
    }
    
    function insertDoMethod($userId,$userPw,$userName){
        echo "회원 가입<br>";
        $this->userId=$userId;
    }
}

//클래스는 미리 만들어 놓고(틀만 만들어놓고)
//new 를 사용해서
//찍어낸다.
$member1 = new Members;

$member1->userId='manso1';
$member1->userPw='1111';
$member1->userName='son1';

echo "아이디 : ".$member1->userId.", ";
echo "비밀번호 : ".$member1->userPw.", ";
echo "이름 : ".$member1->userName.", ";

echo "<br> Members 클래스가 담긴 \$member1라는 객체유형 변수에 접근하여 selectDoMethod 호출 : ";

$member1->selectDoMethod();

$member1->insertDoMethod("Manso2","33333","son2");








$member2 = new Members(); 
// PHP는 괄호 해도 되고 안해도 됨
$member3 = new Members;

?>