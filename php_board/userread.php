<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시글 작성</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/userread.css">
</head>
<body>
   <div class="write_bg">
    <div class="write">
       <form action="writeOk.php">
        <h3 class="logo"><?=$row['title']?></h3>
        <ul>
            <li class="s1"><?=$row['name']?></li>
            <li class="s1"><?=$row['pass']?></li>
            <li class="s1"><?=$row['wdate']?></li>
            <li class="s1">조회수: <?=$row['view']?></li>
            <li class="s4">
                <h3>
                    글 내용
                </h3>
            </li>
            <li class="s2"><textarea name="content" id="" cols="30" rows="10"><?=$row['content']?></textarea></li>
            <li class="s3"><input type="submit" value="글작성">
                <input type="reset" value="다시작성">
                <input type="button" class="goback" value="되돌아가기">
            </li>
        </ul>
        </form>
    </div>
    </div>
    <script src="js/usertalk.js"></script>
</body>
</html>