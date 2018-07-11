<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>usertalk</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/trade_menu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/right_modal.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    <div id="wrap">
      <?php include "header.php";?>
      
       <div class="imgShot"></div>
        <div class="title"><h1>이벤트 페이지</h1>
        <p>주기적으로 이벤트 공지사항이 업로드 됩니다!</p></div>

       <?php include "right_modal.php" ?>
        <div class="section">
            <ul>
            <li><a href="trade_read.php?no=<?=$no?>&id=<?=$row['id']?>"><?=$row['id']?></a></li>
            <li><a href="trade_read.php?no=<?=$no?>&id=<?=$row['id']?>"><?=$row['title']?></a></li>
            <li><?=$row['wdate']?></li>
            <li><?=$row['view']?></li>
            <li></li>
        </ul>
        </div>
          <div class="index">

          .......................Coming Soon!
          </div>
           
        <?php include "footer.php";?>
        <script>              
            $('.header .nav .menu.left>a>img').attr({ src: '/images/QnA2.png'});      
            $('.nav').removeClass('nav').addClass('nav_after');
        </script>
    </div>
</body>
</html>