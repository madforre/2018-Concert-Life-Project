<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 작성</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/trade_read_write.css">
</head>
<body>
   <div class="write_bg">
    <div class="write">
       <form action="trade_read_write.php" method="post">
        <h1 class="logo">게시글 수정</h1>
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
        <ul>
            <li class="s1"><?=$_SESSION["sessionId"]?><input type="hidden" name="name" value="<?=$_SESSION["sessionId"]?>"></li>
            <li class="s1"><input type="text" name="title" placeholder="<?=$row['title']?>" value="<?=$row['title']?>"></li>
            <li class="s4">
                <h3>
                    게시글 작성
                </h3>
            </li>
            <li class="s2"><textarea name="content" id="" cols="30" rows="10"><?=$row['content']?></textarea></li>
            <li class="s3"><input type="submit" value="글작성">
                <input type="reset" value="다시작성">
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
</body>
</html>