<?php
@session_start();
?>



  <div class="right_wrap">

  
  </div> 
  <div class="right_modal">
    <div class="right_top">
      <div class="right_head">
        <?php
            if(isset($_SESSION["sessionId"])){
                echo "<h1>".$_SESSION["sessionId"]." 님 안녕하세요!"."</h1>";
            }else{
                echo "<h1><a href='join.php'>JOIN US</a></h1>";
            }
        ?>
        </h1>
      </div>
      <div class="right_menu">
        <ul>
          <li><a href="/performance.php">PERFORMANCE</a></li>
          <li><a href="/innovation.php">INNOVATION</a></li>
          <li><a href="/festival.php">FESTIVAL</a></li>
          <li><a href="/trade_menu.php">TICKET TRADE</a></li>
        </ul>
      </div>
    </div>
    <div class="right_bottom">
      <ul>
        <li><a href="/QnA.php"><p>QnA</p></a></li>
                    <?php
               if(isset($_SESSION['sessionId'])){
                    echo "<li><a href=\"logoutOk.php\">LogOut</a></li>";
               }else{
                    echo "<li><a href='login.php'>LogIn</a></li>";
               }
            ?>
      </ul>
    </div>
    <div class="right_close">
    <img src="images/btn_close.png" alt="right_close">
    </div>
  </div>



<script type="text/javascript">
  var r_bg= $('.right_wrap')
  var r_m = document.getElementsByClassName('right_modal')[0];
  var r_close = document.getElementsByClassName('right_close')[0];
  var r_open = document.getElementsByClassName('menu right')[0];
    
  r_close.addEventListener('click',function(){
  
    r_m.style.right ='-300%';
     r_bg.fadeOut();

  });

  r_open.addEventListener('click',function(){
  
    r_m.style.right ='0';
      r_bg.fadeIn();

  });

</script>
