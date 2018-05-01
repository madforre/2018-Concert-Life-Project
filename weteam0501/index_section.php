<?php

$arrSec = array();

  // 아래는 각 섹션에 해당되는 연관배열 선언이다.



// sec1
$arrSec[0]=array( 'title'=>'PLEASURE',
                  'h1_copy'=>"무지갯빛 당신의 하루",
                  'h1_comment' =>' 쇼핑,관람 문화,레스토랑,연회 웨딩 등<br>
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
                 'h1_comment' =>'LifeSoul Festival Project이 여러분과 함께<br>
                 빛나는 추억의 순간으로 함께합니다.',
                 'btnLink' => '/festival.php'
                  );
// sec4
$arrSec[3]=array('title'=>'TICKET TRADE',
                  'h1_copy'=>"간편한 티켓 회원 거래",
                  'h1_comment' =>'회원간의 간편한 1:1 티켓거래를 통해<br> 유명가수들의 빠른 콘서트 티켓 확보를 누리세요! ',
                  'btnLink' => '/'
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
        
        
             <div class="sec0">
             
                <iframe width="100%"  height="710px"
src="https://www.youtube.com/embed/cL4uhaQ58Rk?
autoplay=1&amp;controls=0"   frameborder="0" 
allow="autoplay; encrypted-media" 
allowfullscreen></iframe>
                
        </div>


    </div>
