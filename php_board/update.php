<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
	//데이터 베이스 연결하기
	include "dbConnect.php";
   $no = $_GET['no'];
    $id = $_GET['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$REMOTE_ADDR = $_SERVER[REMOTE_ADDR];

	// 글의 비밀번호를 가져온다.
	$query = "SELECT pass FROM php_board WHERE id=$id";
$result=$conn->query($query);

if ($result) {
    while($row= $result ->fetch_assoc()){
        
            //입력된 값과 비교한다.
        if ($pass==$row['pass']) { //비밀번호가 일치하는 경우

            $query = "update php_board set name='$name', email='$email', title='$title', content='$content' WHERE id=$id ";
            
           $conn->query($query);
			
        }else { // 비밀번호가 일치하지 않는 경우
            echo ("
            <script>
            alert('비밀번호가 틀립니다.');
            history.go(-1);
            </script>
            ");
            exit;
        }

    }
    $result->free();
}
echo ("
		<script>
		alert('수정완료 되었습니다.');
		location.href='read.php?id=$id&no=$no';
		</script>
		");
 
      //데이터베이스와의 연결을 끝는다.
$conn->close();

		
	
?>
