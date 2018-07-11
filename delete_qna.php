<?php
header("Content-Type:text/html;charset=UTF-8");
@session_start();
require_once "route/url_connect_defense.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 삭제</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/write.css">
    <script src="js/usertalk.js"></script>
</head>
<body>
   <div class="write_bg">
    <div class="write">
       <form action="delete_qnaOk.php" method="post">
        <h1 class="logo">게시글 삭제</h1>
        <ul>
            <li class="s1"> <?=$_SESSION['sessionId']?>님 안녕하세요. 게시글을 삭제하려면 게시글 비밀번호가 필요합니다.</li>
            글제목 <li class="s1"><input type="text" name="title" maxlength="15" value="<?=$_SESSION['title']?>" readonly></li>
            글비밀번호 입력<li class="s1"><input type="password" name="pass" placeholder="작성했던 글 비밀번호를 입력하세요.(10자이내)" maxlength ="10"></li>
            <li class="s4">
                <h3>
                    게시글 내용
                </h3>
            </li>
            <input type="hidden" name="name" value="<?=$_SESSION['sessionId']?>">
            <li class="s2"><textarea name="content" cols="30" rows="10" readonly><?=$_SESSION['content']?></textarea></li>
            <li class="s3"><input type="submit" value="글삭제">
                <a href="QnA.php"><input type="button" value="QnA로"></a>
            </li>
        </ul>
        </form>
    </div>
    </div>
</body>
</html>
