<?
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
       <form action="writeOk.php">
        <h1 class="logo">게시글 작성</h1>
        <ul>
            <li class="s1"><?$_SESSION['sessionId']?>님 게시글을 작성하려면 비밀번호와 글제목을 입력해주세요.</li>
            <li class="s1"><input type="text" name="title" placeholder="글 제목을 입력하세요."></li>
            <li class="s1"><input type="password" name="password" placeholder="비밀번호를 입력하세요."></li>
            <li class="s4">
                <h3>
                    게시글 작성
                </h3>
            </li>
            <input type="hidden" name="name" value="<?$_SESSION['sessionId']?>">
            <li class="s2"><textarea name="content" id="" cols="30" rows="10"></textarea></li>            
            <li class="s3"><input type="submit" value="글작성">
                <input type="reset" value="다시작성">
                <input type="button" class="goback" value="되돌아가기">
            </li>
        </ul>
        </form>
    </div>
    </div>
    <script src="js/usertalk.js"></script>
    <script>
        var goback = document.getElementsByClassName('goback')[0];
        goback.addEventListener('click',function(){
            history.go(-1);
        })
    </script>
</body>
</html>