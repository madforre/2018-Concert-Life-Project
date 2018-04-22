<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>63빌딩</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index_section.css">
    <link rel="stylesheet" href="css/right_modal.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <div id="wrap">

    <?php include 'header.php';?>

    <?php include 'index_section.php';?>

      <div class="side_bar">
         <ul>
             <li><span class="active"></span></li>
             <li><span></span></li>
             <li><span></span></li>
             <li><span></span></li>
         </ul>
      </div>

    <?php include 'right_modal.php';?>

    <?php include 'footer.php';?>

  </div>


      <script type="text/javascript">

      var w_key = 1;
        // 스크롤 휠 이벤트

        $("html, body").on('mousewheel DOMMouseScroll', function(e) {
            var E = e.originalEvent;
            delta = 0;
            // console.log(E);
            if (E.detail) {
                delta = E.detail * -40;

                // $('body').text(delta);
            }else{
                delta = E.wheelDelta;

                // $('body').text(delta);
            };

            // if(delta == '120'){
            //
            //   alert('올라간다')
            //
            //
            //
            // }
            //
            //
            //
            // if(delta == '-120'){
            //
            //   alert('내려간드아');
            //   var w_top = $('.section .section').eq(w_key).offset().top;
            //   $('html,body').animate({scrollTop : w_top},1000);
            //
            //   w_key++;
            //
            // }


            });

            // 휠했는데 120 이면 위로 현재 화면 높이 - 100%
            // -120 이면 아래로 가는 것. 아래로 현재 화면 높이 + 100%


        // 사이드바 클릭 이벤트

        var side_li=$('.side_bar>ul>li');

        side_li.on('click',function(e){

        var index = $(this).index();

        // console.log(index);

        $(this).find('span').addClass('active');
        $(this).siblings().find('span').removeClass('active');

        var top = $('.section .section').eq(index).offset().top;

        // console.log(top);

        $('html,body').animate({scrollTop : top });


      });

      </script>
</body>
</html>
