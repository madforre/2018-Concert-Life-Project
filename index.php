<?php

$arrSec = array();

  // 아래는 각 섹션에 해당되는 연관배열 선언이다.

// sec1
$arrSec[0]=array( 'title'=>'PLEASURE',
                  'h1_copy'=>"무지갯빛 당신의 하루",
                  'h1_comment' =>' 쇼핑,관람 문화,레스토랑,연회 웨딩 등<br>
                   볼 거리 즐길 거리가 가득합니다.',
                  'btnLink' => '/'
                 );
// sec2
$arrSec[1]=array( 'title'=>'INNOVATION',
                  'h1_copy'=>"새로운 꿈이 현실이 되는 곳",
                  'h1_comment' =>'다양한 기업이 꿈을 키워 나가는 곳
                  혁신의 시작을 함께하는 곳, 63입니다.',
                  'btnLink' => '/'
                 );
// sec3
$arrSec[2]=array('title'=>'ABOUT',
                  'h1_copy'=>"아름다운 한강변에 반사되는 금빛 파사드",
                  'h1_comment' =>'1985년 완공 이후 서울을 대표하는 상징적인 건축물로
                  햇빛에 따라 반사되는 금빛 외관이 인상적입니다',
                  'btnLink' => '/'
                 );
// sec4
$arrSec[3]=array(
                 'title'=>'FESTIVAL',
                 'h1_copy'=>"우리가 함께 할 감동의 순간들",
                 'h1_comment' =>'봄 내음 가득한 벚꽃축제, 가을하늘을 수놓은 불꽃축제가
                 빛나는 추억의 순간으로 함께합니다',
                 'btnLink' => '/'
                  );

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>63빌딩</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
   <div class="header">
       <div class="nav">
            <div class="menu left"></div>
            <div class="logo">63</div>
            <div class="menu right"></div>
       </div>
   </div>


   <div class="section">
       <ul>
        <?php

        foreach($arrSec as $key){
          $i=1;
            echo "
            <li class=sec".$i.">
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
                </div>
            </li>
            ";
            $i++;
          };
        ?>
       </ul>
       <div class="side_bar">
           <span class="active"></span>
           <span></span>
           <span></span>
           <span></span>
       </div>

   <div class="footer"></div>
</body>
</html>