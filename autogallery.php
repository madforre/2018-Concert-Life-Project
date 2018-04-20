<?php

$arrBox = array();

  // 아래는 각 박스에 해당되는 연관배열 선언이다.

// box1
$arrBox[0]=array( 'p1'=>'lorem',
                 'p2'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur quisquam nihil',
                 'p3'=> 'neque fugit? Non a comquam error voluptatibus quae!' 
                 );
// box2
$arrBox[1]=array( 'p1'=>'INNOVATION',
                  'p2'=>"새로운 꿈이 현실이 되는 곳",
                  'p3' =>'다양한 기업이 꿈을 키워 나가는 곳<br>
                  혁신의 시작을 함께하는 곳, 63입니다.',
                 );
// box3
$arrBox[2]=array('p1'=>'ABOUT 63',
                  'p2'=>"아름다운 한강변에 반사되는 금빛 파사드",
                  'p3' =>'1985년 완공 이후 서울을 대표하는 상징적인 건축물로<br>
                  햇빛에 따라 반사되는 금빛 외관이 인상적입니다',
                 );
// box4
$arrBox[3]=array(
                 'p1'=>'FESTIVAL',
                 'p2'=>"우리가 함께 할 감동의 순간들",
                 'p3' =>'봄 내음 가득한 벚꽃축제, 가을하늘을 수놓은 불꽃축제가<br>
                 빛나는 추억의 순간으로 함께합니다',
                  );
// box5
$arrBox[4]=array(
                 'p1'=>'아름다운 추억',
                 'p2'=>"추억으로 새겨지는 순간들과 함께",
                 'p3' =>'여러분들의 즐거운 하루를 유명한 공연, 가수들과 함께합니다',
                  );



?>

<!--

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/auto.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
</head>
<body>
-->

 <div class="gallery_wrap">
     <div class="gallery">
         <ul>
       <?php
        $arrImg = array();
        for($i=0;$i<5;$i++){          array_push($arrImg,"images/festival/auto$i.jpg");
          echo "<li><img src='$arrImg[$i]' alt='auto$i'><div class='box li_$i'>"
        ."</div></li>";
        }
                 
        ?>

          </ul>
      </div>
      <div class="slide_wrap">
          <div class="left_bg"><span class="arrow arrow_left"></span></div>
          <div class="right_bg"><span class="arrow arrow_right"></span></div>
<!--
          <span class="box">
              <p class="box_p1">
                 Riding                  
              </p>
              <p class="box_p2">
                 한강라이딩
              </p>
              <p class="box_p3">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum tempore nesciunt consequuntur non quos odit!
                  
              </p>
          </span>
-->
      </div>
  </div>
<!--</body>-->

 <script>
    var ul = document.querySelector('.gallery>ul');
    var li = document.querySelectorAll('.gallery>ul>li');
    var left = document.querySelectorAll('.left_bg')[0];
    var right = document.querySelectorAll('.right_bg')[0];
    
    


    left.addEventListener('click',leftManual);
    function leftManual(){
        
        var li_first = document.querySelectorAll('.gallery>ul>li')[0];        
        var li_last = document.querySelectorAll('.gallery>ul>li')[4];
        
        ul.insertBefore(li_last,li_first);
        
//        클릭하면 li의 마지막 인덱스를 li의 첫번째 앞에 삽입 insertBefore
    }
     

    right.addEventListener('click',rightManual);
    function rightManual(){
        
        var li_first = document.querySelectorAll('.gallery>ul>li')[0];
        
        ul.appendChild(li_first);
//        setTimeout(ul.style.left="0%",100);
//        setTimeout(ul.style.left="-100%",0);
        
//        클릭하면 li의 첫번째 인덱스를 ul의 마지막에 appendchild 
    }
     


    
  </script>
<!--</html>-->