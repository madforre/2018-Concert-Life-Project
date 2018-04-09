<?php
@session_start();

?>
  

  <div class="header">
   <div class="gnb">
      <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="sub1.php">회원전용 sub1</a></li>
          <li><a href="sub2.php">VIP회원전용 sub2</a></li>
          <?php
            if(isset($_SESSION["sessionId"])){
          ?>
            <li><a href="logOut_process.php">로그아웃 <?=$_SESSION['sessionId']?>님</a></li>
          <?php
            }else{
          ?>
            <li><a href="logIn.php">로그인</a></li>
          <?php  };
          ?>
      </ul>      
   </div>
</div>