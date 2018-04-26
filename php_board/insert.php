<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
	//데이터 베이스 연결하기
	include "dbConnect.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$REMOTE_ADDR = $_SERVER[REMOTE_ADDR];

	$query = "INSERT INTO php_board( name, email, pass, title, content,	wdate, ip, view)
	VALUES (  '$name', '$email', '$pass', '$title', 
	'$content',	now(), '$REMOTE_ADDR', 0)";
	
$result=$conn->query($query);// 쿼리문을 실행... 성공 1반환

if($result==1){
	echo "
	<script>
		alert('글쓰기 성공');
		location.href='list.php';
		</script>
	";
}else{
	echo "
	<script>
		alert('글쓰기 실패 ');
		history.go(-1);
	</script>	
	";	
}	
$conn->close(); // DB연결 해제
?>