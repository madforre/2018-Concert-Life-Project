<?php
    @session_start();
?>
<?php
require_once "dbConnect.php";

// 접속 경로 차단

require_once "route/url_connect_defense.php";


// 입력해야 작성 가능

if(!isset($_POST['title']) || !isset($_POST['pass']) || !isset($_POST['content'])){
	echo "
		<script>
			alert('전부 입력해야 작성이 가능합니다.');
			'location.href=write_qna.php';
		</script>
	";
	exit;
}

// 파일첨부 --------------------------->

// 설정
$uploads_dir = './uploads';
$allowed_ext = array('jpg','jpeg','png','gif','txt');
 
// 변수 정리
$error = $_FILES['myfile']['error'];
$file_name = $_FILES['myfile']['name'];
$exts = explode('.', $file_name);
$ext = array_pop($exts); // 변수만 참조로 전달해야 한다는 에러 제거.
 
// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "<script>
					alert('파일이 너무 큽니다.');
					history.go(-1);
	  			</script>";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "<script>
					alert('파일이 첨부되지 않았습니다.');
					history.go(-1);
	  			</script>";
			break;
		default:
			echo "<script>
					alert('파일이 제대로 업로드 되지 않았습니다.');
					history.go(-1);
		  		</script>";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "<script>
			alert('허용되지 않는 확장자입니다.');
			history.go(-1);
		  </script>";
	exit;
}

// 이미 있는지 확인

if(is_file($file_name)){
	echo "<script>
			alert('첨부하려는 파일 이름이 이미 있습니다. 다른 이름의 파일을 첨부하세요.');
			history.go(-1);
		  </script>";
	exit;
}
 
// 파일 이동
move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$file_name");

// 파일첨부 끝------------------------------>

// DB 삽입

  $name = $_POST['name'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$query = "INSERT INTO $tableName3 (name, pass, title, content, wdate, view, files) VALUES ( '$name', '$pass', '$title', '$content',	now(), 0, '$file_name')";

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
