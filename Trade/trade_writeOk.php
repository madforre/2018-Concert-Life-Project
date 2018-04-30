<?php
	header("Content-Type:text/html;charset=UTF-8");
?>
<?php
include "dbConnect.php";
// 접속 경로가 확인
if( !isset($_POST['pass']) ||  !isset($_POST['title']) || !isset($_POST['content'])){
	echo "
		<script>
			alert('접속정보 오류');
			location.href='trade_write.php';
		</script>
	";
	exit;
}
     $name = $_POST['name'];
     $pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];


if($pass=="" || $pass==null){
	echo "
		<script>
			alert('비빌번호 입력 오류');
			history.go(-1);
		</script>
	";
	exit;
}
if($title=="" || $title==null){
	echo "
		<script>
			alert('제목 입력 오류');
			history.go(-1);
		</script>
	";
	exit;
}
if($content=="" || $content==null){
	echo "
		<script>
			alert('글내용 입력 오류');
			history.go(-1);
		</script>
	";
	exit;
}


$query ="insert into board(name, pass, title, content,wdate,view) values('$name','$pass','$title','$content', now(), 0)";


$result=$conn->query($query);// 쿼리문을 실행... 성공 1반환



if($result==1){
	echo "
	<script>
		alert('게시글 작성 성공');
		location.href='trade_menu.php';
		</script>
	";
}else{
	echo "
	<script>
		alert('게시글 작성 실패');
		history.go(-1);
		</script>
	";
    exit;
}	
$conn->close(); // DB연결 해제
?>


