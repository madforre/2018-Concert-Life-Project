<?php

$arrSec = array();

  // 아래는 각 섹션에 해당되는 연관배열 선언이다.



// sec1
$arrSec[0]=array( 'title'=>'PERFORMANCE',
                  'h1_copy'=>"무지갯빛 당신의 하루",
                  'h1_comment' =>' 내한 공연,관람 문화,공연 정보,티켓 예매 등<br>
                   볼 거리 즐길 거리가 가득합니다.',
                  'btnLink' => '/performance.php'
                 );
// sec2
$arrSec[1]=array( 'title'=>'INNOVATION',
                  'h1_copy'=>"콘서트의 모든 것",
                  'h1_comment' =>'  가장 핫한 아티스트 부터  나만 아는 인디공연 까지   콘서트 정보를<br> 알기 쉽게 이용 가능한 페이지 입니다.',
                  'btnLink' => '/innovation.php'
                 );
// sec3
$arrSec[2]=array(
                 'title'=>'FESTIVAL',
                 'h1_copy'=>"우리가 함께 할 감동의 순간들",
                 'h1_comment' =>'LifeSoul Festival Project이 여러분께 <br>
                 빛나는 추억의 순간을 선물합니다.',
                 'btnLink' => '/festival.php'
                  );
// sec4
$arrSec[3]=array('title'=>'TICKET EVENT',
                  'h1_copy'=>"추첨을 통해 티켓을 무료로 제공합니다!",
                  'h1_comment' =>'감사의 마음을 담은 회원분들을 위한 다양한 <br> 이벤트들이 마련되어 있습니다.',
                  'btnLink' => '/trade_menu.php'
                 );


 ?>
    <div class="section">



        <?php
          $i=1;
        foreach($arrSec as $key){
            echo "
            <div class='section sec$i'>
              <div class='contents'>
                  <h1 class='title'>

                        ".$key['title']."
                        <img src='' alt=''> <!--- nav 에 해당되는 글자. 이미지나 h1으로 처리--->
                    </h1>
                    <p class='h1_copy'>
                        ".$key['h1_copy']."
                    </p>
                    <p class='h1_comment'>
                        ".$key['h1_comment']."
                    </p>
                    <div class='btn'>
                        <a href=".$key['btnLink']."><span>알아보기</span></a>
                    </div>
                    <div class='icon_wheel'>
                        <div class='arrow top'></div>
                        <div class='arrow bt'></div>
                    </div>
                </div>
            </div>"
            ;
            $i++;
          };
        ?>


<!--
             <div class="sec0">

                <iframe width="100%"  height="710px"
src="https://www.youtube.com/embed/cL4uhaQ58Rk?
autoplay=1&amp;controls=0"   frameborder="0"
allow="autoplay; encrypted-media"
allowfullscreen></iframe>
-->

        </div>