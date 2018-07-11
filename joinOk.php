<?php
header("Content-Type:text/html;charset=UTF-8");
?>
<?php
require_once "settingDB.php";
require_once "dbConnect.php";

//접속 경로 확인

if(!isset($_POST['userId'])||!isset($_POST['userPw'])||!isset($_POST['userName'])||!isset($_POST['userYear'])||!isset($_POST['userGender'])||!isset($_POST['userPhone'])){
    echo"
    <script>
        alert('접속 경로 오류');
        location.href='index.php'
    </script>
    ";
    exit;
}

$userId=htmlspecialchars($_POST['userId'],ENT_QUOTES);
$userPw=htmlspecialchars($_POST['userPw'],ENT_QUOTES);
$pwCheck=htmlspecialchars($_POST['pwCheck'],ENT_QUOTES);
$userName=htmlspecialchars($_POST['userName'],ENT_QUOTES);
$userYear=htmlspecialchars($_POST['userYear'],ENT_QUOTES);
$userGender=htmlspecialchars($_POST['userGender'],ENT_QUOTES);
$userPhone=htmlspecialchars(implode('-',$_POST['userPhone']),ENT_QUOTES);//배열 >> 문자열

//패스워드 체크

if($userPw!==$pwCheck){
    echo"
    <script>
        alert('비밀번호가 비밀번호 확인란과 일치해야 합니다.');
        history.go(-1);
    </script>
    ";
    exit;
}

//공백처리

if($userId==""||$userId==null){
    echo"
    <script>
        alert('아이디를 확인해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}

if($userPw==""||$userPw==null){
    echo"
    <script>
        alert('비밀번호를 확인해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}

if($userName==""||$userName==null){
    echo"
    <script>
        alert('이름을 확인해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}


$query="insert into $tableName(userId,userPw,userName,userYear,userGender,userPhone)
values('$userId','$userPw','$userName','$userYear','$userGender','$userPhone')";


$result=$conn->query($query);//쿼리문을 실행 성공하면 1반환

if($result==1){
    echo"
    <script>
        alert('회원 가입 성공');
        location.href='login.php'
    </script>
    ";
}else{
    echo"
    <script>
        alert('회원 가입 실패');
        history.go(-1);
    </script>
    ";
}

$conn->close();//DB연결 해제

?>
