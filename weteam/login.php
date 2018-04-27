<?php
header("Content-Type:text/html;charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/right_modal.css">
</head>
<body>
  <div id="wrap">
   <?php include "header.php";?>
   <?php include "right_modal.php";?>
    <div class="login">
        <h1>Log In</h1>
        <div class="loginForm">
          <div class="loginHeader">
           <ul>
               <li class="on">일상의 즐거움! 여름밤의 축제! 여러분이 꿈꾸는 모든것을 만나보세요.</li>
           </ul>
           </div>
           <div class="loginContent">
            <form action="loginOk.php" method="post">
            <ul>
                <li><input type="text" name="userId" id="userId" placeholder="아이디"></li>
                <li><input type="password" name="userPw" id="userPw" placeholder="비밀번호"></li>
                <li><input type="submit" value="로그인" id="loginSubmit"></li>
            </ul>
            </form>
            </div>
            <div class="loginFooter">
                <ul>
                    <li><a href="join.php">회원가입</a></li>
                    <li><a href="idSearch.php">아이디/비밀번호 찾기</a></li>
                    <li><a href="index.php">HOME</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</div>
    <script>
        
        var topBtn=$('.loginHeader >ul>li');
        var arr1=['아이디','비밀번호'];
        var arr2=['주문번호','주문자 연락처'];
        var userId=$('input#userId');
        var userPw=$('input#userPw');
        
        topBtn.on('click',function(e){
            var idx=($(this).index());
           $(this).addClass('on').siblings().removeClass('on'); 
            
            if(idx==0){
                userId.attr('placeholder',arr1[0]);
                userPw.attr('placeholder',arr1[1]);
            }else if(idx==1){
                userId.attr('placeholder',arr2[0]);
                userPw.attr('placeholder',arr2[1]);
            }
        });
    
    </script>
    <script>
      
  $('.nav').removeClass('nav').addClass('nav_after');

</script>
    <script src="js/gnb.js"></script>
    
</body>
</html>