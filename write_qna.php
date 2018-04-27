<?php
header("Content-Type:text/html;charset=UTF-8");
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 작성</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/write.css">
</head>
<body>
   <div class="write_bg">
    <div class="write">
       <form action="write_qnaOk.php" method="post">
        <h1 class="logo">게시글 작성</h1>
        <ul>
            <li class="s1"> <?=$_SESSION['sessionId']?>님 안녕하세요. 게시글을 작성하려면 글제목과 비밀번호가 필요합니다.</li>
            <li class="s1"><input type="text" name="title" placeholder="글 제목을 입력하세요.(15자이내)" maxlength="15"></li>
            <li class="s1"><input type="password" name="pass" placeholder="비밀번호를 입력하세요.(10자이내)" maxlength ="10"></li>
            <li class="s4">
                <h3>
                    게시글 작성
                </h3>
            </li>
            <input type="hidden" name="name" value="<?=$_SESSION['sessionId']?>">
            <li class="s2"><textarea name="content" cols="30" rows="10"></textarea></li>
            <li class="s3"><input type="submit" value="글작성">
                <input type="button" class="reset" value="다시작성">
                <input type="button" class="goback" value="되돌아가기">
            </li>
        </ul>
        </form>
    </div>
    </div>
    <script src="js/usertalk.js"></script>
    <script>


    </script>
</body>
</html>
