<?php
	header("Content-Type:text/html;charset=UTF-8");
    @session_start();
?>
<?php
require_once "dbConnect.php";
// 접속 경로가 확인
if(!isset($_POST['title']) || !isset($_POST['pass']) || !isset($_POST['content'])){
	echo "
		<script>
			alert('전부 입력해야 작성이 가능합니다.');
			'location.href=write_qna.php';
		</script>
	";
	exit;
}
    $name = $_POST['name'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$query = "INSERT INTO $tableName3 (name, pass, title, content, wdate, view) VALUES ( '$name', '$pass', '$title', '$content',	now(), 0)";

$result=$conn-> query($query);// 쿼리문을 실행... 성공 1반환

if($result==1){
	echo "
	<script>
		alert('게시글 작성 성공');
		location.href='QnA.php';
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


