<?php 
	@session_start();
if(!$_SESSION['sessionId']){
	echo "
		<script>
			alert('로그인 후 이용해주세요');
			location.href='login.php';
		</script>
	";
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 작성</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/trade_read.css">
</head>
<body>
  
  
   <div class="write_bg">
    <div class="write">
       <form action="trade_update.php" method="post">
       <?php
	//데이터 베이스 연결하기
	include "dbConnect.php";

	$id = $_GET['id'];
	$no = $_GET['no'];
    
    
	// 글 정보 가져오기
    $query = "SELECT * FROM board where id=$id ";

$result=$conn->query($query);

$row=$conn->query("SELECT count(*) FROM board");
    
if ($result = $conn->query($query)) {
    while($row=$result->fetch_assoc()){

?>
       
        <h3 class="read_title"><?=$row['title']?></h3>
        <ul>
            <li class="s1">아이디: <?=$row['name']?></li>
            <li class="s1">작성날짜: <?=$row['wdate']?></li>
            <li class="s1">조회수: <?=$row['view']?></li>
            <li class="s1"><input type="hidden" name="pass" value="<?=$row['pass']?>"></li>
            <li class="s4">
                <h3>
                    글 내용
                </h3>
            </li>
            <li class="s2"><?=$row['content']?></li>
            <li class="s3">
                <a href="trade_update.php?id=<?=$row['id']?>"><input type="button" value="글수정 하기"></a>
                <input type="button" class="delete" value="글삭제">
                <input type="button" class="goback" value="되돌아가기">
            </li>
        </ul>
        <?php
    } // end While

        $result->free();
    }

    ?>
        </form>
    </div>
    </div>
    
    <script src="js/trade_write.js"></script>
    <script>
        window.onload=function(){

        var reset = document.getElementsByClassName('delete')[0];
        reset.addEventListener('click',function(){
            location.href="delete.php";
        })
            
        var goback = document.getElementsByClassName('goback')[0];
        goback.addEventListener('click',function(){
            location.href="trade_menu.php";
        })
        }

    
    </script>
</body>
</html>


<?php
	 //조회수 업데이트
     $query= "UPDATE board SET view=view+1 WHERE id=$id";
                  
     $conn->query($query); 

//데이터베이스와의 연결을 끝는다.
$conn->close();
?>