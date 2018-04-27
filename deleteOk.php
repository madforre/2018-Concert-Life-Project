<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
	//데이터 베이스 연결하기
	include "dbConnect.php";

    $query = "delete $boardName WHERE name=".$_SESSION['sessionId'];

    $conn->query($query);

if ($result){
    


echo "
		<script>
		alert('삭제완료 되었습니다.');
		location.href='QnA.php';
		</script>
		";
} 
      

$result->free();

$conn->close();//데이터베이스와의 연결을 끊는다.

		
	
?>
