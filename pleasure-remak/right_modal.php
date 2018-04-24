<div class="right_modal_wrap">
  <div class="right_modal">
    <div class="right_top">
      <div class="right_head">
        <h1>Logo</h1>
      </div>
      <div class="right_menu">
        <ul>
          <li>MAIN</li>
          <li>INNOVATION</li>
          <li>FESTIVAL</li>
          <li>TICKET SHOP</li>
        </ul>
      </div>
    </div>
    <div class="right_bottom">
      <ul>
        <li><p>FAMILY SITE</p></li>
            <?php
               if(isset($_SESSION['sessionId'])){
                    echo "<li><a href=\"logoutOk.php\">LogOut</a></li>";
               }else{
                    echo "<li><a href='login.php'>LogIn</a></li>";
               }
            ?>
      </ul>

    </div>
  </div>
  <div class="right_close">
    <img src="img/btn_close.png" alt="right_close">
  </div>
</div>

<script type="text/javascript">
  var rmw = document.getElementsByClassName('right_modal_wrap')[0];
  var r_m = document.getElementsByClassName('right_modal')[0];
  var r_close = document.getElementsByClassName('right_close')[0];
  var r_open = document.getElementsByClassName('menu right')[0];

  r_close.addEventListener('click',function(){
    r_m.style.right ='-100%';

    rmw.style.display ='none';

  });

  r_open.addEventListener('click',function(){

    r_m.style.right ='0';

    rmw.style.display ='block';

  });

</script>
