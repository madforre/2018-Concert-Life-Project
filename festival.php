<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/auto.css">
  <link rel="stylesheet" href="css/festival.css">
  <link rel="stylesheet" href="css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/scroll.js"></script>
  <title>Festival</title>
</head>
<body>
<div id="wrap">

  <?php include 'header.php'; ?>

  <div class="header_festival">
    <h1 class="title">FESTIVAL</h1>
    <div class="line"></div>
    <p class="title_copy">우리가 함께 할 감동의 순간들</p>
  </div>

  <div class="gnb_plus">
    <ul>
      <li><p>Lifeplus Soul 페스티벌</p></li>
      <li><p>우리, 공연장으로 놀러 가요</p></li>
      <li><p>모두가 즐기는 테마 축제</p></li>
      <li><p>새로운 시작을 함께</p></li>
    </ul>
  </div>

  <div class="section_festival">
    <div class="sec one">
      <h1 class="sub_title">Lifeplus Soul 페스티벌</h1>
      <div class="line"></div>
      <p class="sub_copy">  Lorem ipsum dolor sit amet, Excepteur sint occaecat cupidatat non proident</p>

      <div class="img_box">
      <img src="images/festival/festival_sub.jpg" alt="festival_sub">
      </div>
      <div class="box_contents">
        <div class="center">
          <div class="box one">
            <img src="images/festival/sec1_1.jpg" alt="festival">
            <p>Lifeplus Soul - 페스티벌 거리의 피아노와 악기들 -  John widma Piano Concert</p>
          </div>
          <div class="box two">
            <img src="images/festival/sec1_2.jpg" alt="festival">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box three">
            <img src="images/festival/sec1_3.jpg" alt="festival">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box four">
            <img src="images/festival/sec1_4.jpg" alt="festival">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
        </div>
      </div>

    </div>
    <div class="sec two">
      <h1 class="sub_title">우리, 공연장으로 놀러 가요</h1>
      <div class="line"></div>
      <p class="sub_copy">cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <?php include('./autogallery.php');?>
    </div>

    <div class="sec three">
      <h1 class="sub_title">모두가 즐기는 테마 축제</h1>
      <div class="line"></div>
      <p class="sub_copy">sunt in culpa qui qizqakws officia deserunt mollit anim id est laborum.</p>
      <div class="box_contents">
        <div class="center">
          <div class="box one">
            <img src="images/festival/sec3_1.jpg" alt="concert">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box two">
            <img src="images/festival/sec3_2.jpg" alt="concert">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box three">
            <img src="images/festival/sec3_3.jpg" alt="concert">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
        </div>
      </div>
    </div>

    <div class="sec four">
      <h1 class="sub_title">새로운 시작을 함께</h1>
      <div class="line"></div>
      <p class="sub_copy">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut alhenda pariatur. </p>
      <div class="box_contents">
        <div class="center">
          <div class="box one">
            <img src="images/festival/sec4_1.jpg" alt="newstart">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box two">
            <img src="images/festival/sec4_2.jpg" alt="newstart">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="box three">
            <img src="images/festival/sec4_3.jpg" alt="newstart">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>

  <script type="text/javascript">

       $(document).ready(function($) {

          // header_festival h1 페이드인 슬라이드업

          $('.header_festival').fadeIn(1150,function(){

          $('.header_festival .line').fadeIn(550,function(){

            $(this).animate({'width': '108px'},550);
              });
          });

          // 새로고침시 sec one 슬라이드 업
          $('.section_festival').fadeIn(1150,function(){


          $('.sec.one h1, .sec.one p, .sec.one .line').fadeIn(0,function(){
          $(this).animate({'top': '0px'},1150);    });
          });
          $('.img_box').fadeIn(1150);

          // li 클릭시 이동

            $(".gnb_plus>ul>li:nth-child(1)").click(function(event){
                    $( 'html, body' ).animate( { scrollTop : 315 } );
                    $(".gnb_plus>ul>li:nth-child(1)").css({borderBottom : '1px solid #d17eec', color : '#d17eec'}).siblings().css({borderBottom : '0px solid', color : '#777'});
            });

            $(".gnb_plus>ul>li:nth-child(2)").click(function(event){
                    $( 'html, body' ).animate( { scrollTop : 2590 } );
                    $(".gnb_plus>ul>li:nth-child(2)").css({borderBottom : '1px solid #d17eec', color : '#d17eec'}).siblings().css({borderBottom : '0px solid', color : '#777'});
            });

            $(".gnb_plus>ul>li:nth-child(3)").click(function(event){
                    $( 'html, body' ).animate( { scrollTop : 3518 } );
                    $(".gnb_plus>ul>li:nth-child(3)").css({borderBottom : '1px solid #d17eec', color : '#d17eec'}).siblings().css({borderBottom : '0px solid', color : '#777'});
            });

            $(".gnb_plus>ul>li:nth-child(4)").click(function(event){
                    $( 'html, body' ).animate( { scrollTop : 5170 } );
                    $(".gnb_plus>ul>li:nth-child(4)").css({borderBottom : '1px solid #d17eec', color : '#d17eec'}).siblings().css({borderBottom : '0px solid', color : '#777'});
            });

           $(window).scroll(function() {

              // header

              if ($(this).scrollTop()<50){

              }

              if ($(this).scrollTop()<315){
              $('.gnb_plus').css({ position : 'static'});
              }

              if ($(this).scrollTop()>350){
              $('.gnb_plus').css({ position : 'fixed'});
              $('.gnb_plus').css({ top : '50px'});
              // $('.header').css({marginBottom : '50px'})
              }

              // section one fadeIn, slide up

              if ($(this).scrollTop()>290){
              $('.sec.one .box.one').fadeIn(200,function(){
                  $(this).animate({'top': '-20px'},800);
                  });
              }

              if ($(this).scrollTop()>630){
              $('.sec.one .box.two').fadeIn(200,function(){
                  $(this).animate({'top':'50px'},800);
                  });
              }

              if ($(this).scrollTop()>990){
              $('.sec.one .box.three').fadeIn(200,function(){
                  $(this).animate({'bottom':'150px'},800);
                  });
              }

              if ($(this).scrollTop()>1330){
              $('.sec.one .box.four').fadeIn(200,function(){
                  $(this).animate({'bottom':'10px'},800);
                  });
              }

              // section two fadeIn, slide up

              if ($(this).scrollTop()>1709){
              $('.sec.two').fadeIn(400,function(){
                  $(this).animate({'top':'0px'},450);
                  $('.sec.two h1, .sec.two p, .sec.two .line').fadeIn(0,function(){
                  $(this).animate({'top': '0px'},450);    });
                  });
              }

              if ($(this).scrollTop()>2609){
              $('.sec.three').fadeIn(200,function(){
                  $(this).animate({'top':'0px'},450);
                  $('.sec.three h1, .sec.three p, .sec.three .line').fadeIn(0,function(){
                  $(this).animate({'top': '0px'},450);    });
                  });
              }
              if ($(this).scrollTop()>4232){
              $('.sec.four').fadeIn(200,function(){
                  $(this).animate({'top':'0px'},450);
                  $('.sec.four h1, .sec.four p, .sec.four .line').fadeIn(0,function(){
                  $(this).animate({'top': '0px'},450);    });
                  });
              }



              // section three fadeIn, slide up



              if ($(this).scrollTop()>3370){
              $('.sec.three .box.one').fadeIn(200,function(){
                  $(this).animate({'top':'10px'},800);
                  });
              }

              if ($(this).scrollTop()>3930){
              $('.sec.three .box.two').fadeIn(200,function(){
                  $(this).animate({'top':'710px'},800);
                  });
              }

              if ($(this).scrollTop()>4230){
              $('.sec.three .box.three').fadeIn(200,function(){
                  $(this).animate({'top':'650px'},800);
                  });
              }

              // section four fadeIn, slide up

              if ($(this).scrollTop()>5116){
              $('.sec.four .box.one').fadeIn(200,function(){
                  $(this).animate({'top':'130px'},800);
                  });
              }

              if ($(this).scrollTop()>4916){
              $('.sec.four .box.two').fadeIn(200,function(){
                  $(this).animate({'top':'30px'},800);
                  });
              }

              if ($(this).scrollTop()>5516){
              $('.sec.four .box.three').fadeIn(200,function(){
                  $(this).animate({'top':'660px'},800);
                  });
              }
              });
       });







  </script>
</div>
</body>
</html>
