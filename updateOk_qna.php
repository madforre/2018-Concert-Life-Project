<?php
@session_start();

require_once "dbConnect.php";
require_once "route/url_connect_defense.php";

$pass = $_POST["pass"];
$before_title = $_SESSION['title'];
$after_title = $_POST["title"];
$before_content = $_SESSION['content'];
$after_content = $_POST["content"];
$wdate = $_SESSION['wdate'];

// 입력한 글 비밀번호가 없을 경우를 걸러냄
if($pass == null ){

         echo "<script>
            alert('비밀번호를 입력해주세요.');
            history.go(-1)
            </script>";
        exit;

};
// 세션 아이디가 없을 경우를 걸러냄
if(!isset($_SESSION['sessionId'])){
    echo "<script>
            alert('올바른 접근이 아닙니다.');
            location.href = 'index.php';
    </script>";
    exit;
};

//작성 글 비밀번호 찾기
$pw_check = " SELECT pass FROM $tableName3 WHERE title='$before_title' AND wdate='$wdate'; ";

if($result = $conn->query($pw_check)){

    while($row=$result->fetch_assoc()){
        $pass_db = $row['pass'];
    };
};
$result->free();
//작성 글 비밀번호 일치 여부 확인
if($pass!=$pass_db){
       echo "<script>
           alert('작성글의 비밀번호가 일치하지 않습니다.');
           history.go(-1)
           </script>";
       exit;
       }else{

           //일치하면 게시글 번호 찾기
           $query = "SELECT id FROM $tableName3 WHERE title='$before_title' and wdate='$wdate';";

           if ($result = $conn->query($query)) {
              while($row=$result->fetch_assoc()){
                // 게시글 번호를 변수에 담음
                  $board_id = $row['id'];
                };
              };
            $result->free();

              //찾은 게시글 번호에 해당하는 부분을 입력한 새로운 제목과 내용으로 업데이트(수정)한다.
            $query2 = "UPDATE $tableName3 SET title='$after_title', content='$after_content',
            wdate = now() WHERE id=$board_id";

            if ($result2 = $conn->query($query2)){

              //성공했으면 세션값들을 초기화시키고 DB접속을 종료하고 qna.php로 넘어간다.

              unset($_SESSION['title']);
              unset($_SESSION['name']);
              unset($_SESSION['wdate']);
              unset($_SESSION['view']);
              unset($_SESSION['content']);

              echo "<script>
              alert('게시글 수정 성공');
              location.href = 'QnA.php';
              </script>";

              }else{

              //실패했으면 DB접속을 종료하고 이전페이지로 이동한다.

              echo "<script>
              alert('게시글 수정 실패');
              history.go(-1)
              </script>";
              exit;
              }
              $result2->free();

            }
          $conn->close();
 ?>
