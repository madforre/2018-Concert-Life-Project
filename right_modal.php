
  <div class="right_bg">

  
  </div> 
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
        <li><p>LOGIN</p></li>
      </ul>

    </div>
    <div class="right_close">
    <img src="images/btn_close.png" alt="right_close">
    </div>
  </div>



<script type="text/javascript">
  var r_bg= $('.right_bg')
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
