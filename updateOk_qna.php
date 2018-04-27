<?php
@session_start();

include "dbConnect.php";

//$name = $_POST['name'];
$pass = $_POST["pass"];
$title = $_POST["title"];
$content = $_POST["content"];

$pw_check = "SELECT pass FROM $tableName3 WHERE title=".$_SESSION['title']." and wdate=".$_SESSION['wdate'];

if($result = $conn->query($pw_check)){
    while($row=$result->fetch_assoc()){
        $pass_db2 = $result->fetch_row()[0];
        $pass_db = $row['pass'];
        echo $pass_db;
        echo $pass_db2;
    };    
    
};


//echo $pass_db;

if($pass == null ){
    
         echo "<script>
            alert('입력한 비밀번호가 없습니다.');
            history.go(-1)
            </script>";
        exit;
    
}

//if($pass!=$pass_db){
//        echo "<script>
//            alert('작성글의 비밀번호가 일치하지 않습니다.');
//            history.go(-1)
//            </script>";
//        exit;
//        }else{
//            echo "일단 비밀번호 확인은 되는군";
//        }


if(!isset($_SESSION['sessionId'])){
    echo "<script> 
            alert('올바른 접근이 아닙니다.');
            location.href = 'index.php';
    </script>";
    exit;
};
//
//
//$query = "SELECT id FROM $tableName3 where title=".$_SESSION['title']." and wdate=".$_SESSION['wdate'];
//
//if ($result = $conn->query($query)) {
//    while($row=$result->fetch_assoc()){
//        
//        $board_id = $row['id'];
//        
//    }
//    
//    $query2 = "update $tableName3 set title='$title', content='$content',
//    wdate = now() WHERE id=$board_id";
//    if ($result2 = $conn->query($query2)){
//        echo "<script>
//            alert('게시글 수정 성공');
//            location.href = 'qna.php';
//            </script>";
//   
//    }else{
//        echo "<script>
//            alert('게시글 수정 실패');
//            history.go(-1)
//            </script>";
//        exit;
//    }
//    
//        unset($_SESSION['title']);
//        unset($_SESSION['name']);
//        unset($_SESSION['wdate']);
//        unset($_SESSION['view']);
//        unset($_SESSION['content']);
//        
//}
//    
$conn->close();
//    

 ?>