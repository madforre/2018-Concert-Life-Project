<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
include "dbConnect.php";
// 접속 경로가 확인
if(!isset($_POST['name']) ||  !isset($_POST['email']) || !isset($_POST['pass']) || 
   !isset($_POST['title']) || !isset($_POST['content'])){
	echo "
		<script>
			alert('접속정보 오류');
			location.href='index.php';
		</script>
	";
	exit;
}
   $name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];

    $REMOTE_ADDR = $_SERVER[REMOTE_ADDR];// ip

	$query = "INSERT INTO joinmember2 (name, email, pass, title, content,	wdate, ip, view) 
	                   VALUES ( '$name', '$email', '$pass', '$title',  '$content',	now(), '$REMOTE_ADDR', 0)";
		
$result=$conn-> query($query);// 쿼리문을 실행... 성공 1반환

if($result==1){
	echo "
	<script>
		alert('게시글 작성 성공');
		location.href='list.php';
		</script>
	";
}else{
	echo "
	<script>
		alert('게시글 작성 실패 ');
		history.go(-1);
	</script>	
	";	
}	
$conn->close(); // DB연결 해제
?>


