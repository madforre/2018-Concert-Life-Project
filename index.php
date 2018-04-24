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

                          
//          var test = -$('.footer').height(); 
//          var test2 = $('.footer').offset().top;
          //  footer 높이만큼 위로 포인트잡은듯 지금 
		$(window).on('mousewheel DOMMouseScroll', function(event) {
            
//            var footer = $('.footer').height();
//            var docu = $(document).height();
//            var no_footer = docu-footer
//            console.log(footer);
//            console.log(all);
            
              var E = event.originalEvent;
              delta = 0;
                // console.log(E);
              if (E.detail) {
              delta = E.detail * -40;

                // $('body').text(delta);
              }else{
                delta = E.wheelDelta;

                // $('body').text(delta);
              };
		
			  var top = $('html').scrollTop(); //처음에는 0 //이동하면 값이 달라짐
			  var num1=$('.section .section').eq(0).offset().top;
			  var num2=$('.section .section').eq(1).offset().top;
              var num3=$('.section .section').eq(3).offset().top;                    
			  var num=num2-num1; //상대적으로 다음섹션에서 이전섹션의 탑값을 빼준 값이다.
              var bottom = $('.footer').offset().top

				if (delta >= 0) { //올라갈땐 120 반환하므로 양수
                    //이면 올라가는 것. 
                    // 수업에서 delta는 원래 event.originalEvent.wheelDelta(파폭지원x)였음
                    
                    // 이코드는 파이어폭스(크로스 브라우징)도 지원하는 코드이다.
                    
                    
                            if($('.footer').is(':visible') == true){
                                
                            $('html, body').stop().animate({scrollTop:num3});
                                
                                
                                // display : none가 아닐 경우
                            }else{                         
                            // display : none일 경우
                                top=top-num;
                                
					           $('html, body').stop().animate({scrollTop:top}); 
            
                            }  
                    
                    $('.footer').fadeOut(200);
                        
                        
				}else{ // 내려갈땐 -120 반환하므로 음수이면 내려가는 것.                                                   
                        
                            if($('html').scrollTop() == $('.section .section').eq(3).offset().top){
                                $('.footer').fadeIn(600);
                                var f_in = $('.footer').offset().top;
                                $('html, body').stop().animate({scrollTop: f_in});                                    
                        
                            }else{
                                    top=top+num;
				                    $('html, body').stop().animate({scrollTop:top});
                            }

					}			   
				return false; //이벤트를 한번만 사용하고 중지 중복되지 않도록 처리하는 방법
		});
          

      var sample = [];

		  $('html').on('mousewheel DOMMouseScroll resize', function(e) {

      var html_top = $('html').scrollTop()

      for (var i = 3; i > -1; i--) {
        var test1 = $('.section .section').eq(i).offset().top;
        var test2 = $('.section .section').eq(i).height()*2/3;

          sample.push(test1 + test2); //샘플이라는 배열에다가
          // console.log(sample.splice(i,1,test1 + test2)); // i부터 시작해서 1개만큼을 삭제하고 test1 + test2 로 대체
          //				var sec_height = $('section').height();

          if (html_top < sample[i]) {

            $('.side_bar ul li').eq(i).find('span').addClass('active');
            $('.side_bar ul li').eq(i).siblings().find('span').removeClass('active');

          }




          }

      });


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
