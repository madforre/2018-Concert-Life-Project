<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/auto.css">
    
</head>
<body>
 <div class="gallery_wrap">
      <ul class="gallery">
       <?php 
        $arrImg = array();
        for($i=0;$i<5;$i++){
          array_push($arrImg,"images/festival/auto$i.jpg");
          echo "<li><img src='$arrImg[$i]' alt='auto$i' width='100%' height='500px';></li>";
        }
        ?>
      <div class="left_bg"><span class="arrow arrow_left"></span></div>
      <div class="right_bg"><span class="arrow arrow_right"></span></div>
      <span class="box"></span>
      </ul>
  </div>
</body>

 <script>
    var gallery = document.getElementsByClassName('gallery');

    var idx=0;

    function autoGallery(){

      console.log(idx);

      gallery[0].style.background="url(images/festival/auto"+idx+".jpg) no-repeat 50%";
      gallery[0].style.backgroundSize="cover";

      if(idx==4){idx=-1};

      idx++;

    }

    var left = document.querySelectorAll('.left_bg')[0];
    var right = document.querySelectorAll('.right_bg')[0];

    left.addEventListener('click',leftManual);
    function leftManual(){
      console.log("arrow left");
      if(idx==4){
        idx=0;
      }else{
        idx++;
      }
      console.log(idx);
      gallery[0].style.background="url(images/festival/auto"+idx+".jpg) no-repeat 50%";
      gallery[0].style.backgroundSize="cover";
    }

    right.addEventListener('click',rightManual);
    function rightManual(){
      console.log("arrow right");
      if(idx==0){
        idx=4;
      }else{
        idx--;
      }
      console.log(idx);
      gallery[0].style.background="url(images/festival/auto"+idx+".jpg) no-repeat 50%";
      gallery[0].style.backgroundSize="cover";
    }
  </script>

</html>