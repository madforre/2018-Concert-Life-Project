   
  $(window).scroll(function() {

              // header

              if ($(this).scrollTop()>0){
              $('.header .nav .menu.left>a>img').attr({ src: '/images/QnA2.png'});
              $('.nav').removeClass('nav').addClass('nav_after');
              
              }

              if ($(this).scrollTop()<1){
              $('.header .nav_after .menu.left>a>img').attr({src: '/images/QnA.png'});
              $('.nav_after').removeClass('nav_after').addClass('nav');
              
              }
                
      
       if ($(this).scrollTop()<315){
              $('.tab_nav').css({ position : 'static'});
              }

              if ($(this).scrollTop()>350){
              $('.tab_nav').css({ position : 'fixed'});
              $('.tab_nav').css({ top : '50px'});
              // $('.header').css({marginBottom : '50px'})
              };
  });






          /*line 이벤트*/

    $(document).ready(function($) {



             $('.header_inno').fadeIn(1150,function(){

          $('.header_inno .line1').fadeIn(550,function(){

            $(this).animate({'width': '108px'},550);
              });
          });
       });
    



/*스큻롤 이벤트*/
   $(document).ready(function($) {
           
            $(".aTop").click(function(event){    
                    $( 'html, body' ).stop().animate( { scrollTop : 600 } );
            });
           
           $(".bTop").click(function(event){    
                    $( 'html, body' ).stop().animate( { scrollTop : 3400 } );
            });
       });
        



//******** setTimeout 시작 ********

setTimeout(function(ti){
    $('.article_one .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'0px'},800);
        });
},200);
   



$(window).scroll(function() {
    
    if ($(this).scrollTop()>1200)
     {
         $('.article_two .list2').fadeIn(300,function(ql){
            $(this).animate({'top':'0px'},800);
        });
     }
//    else
//     {
//        $('.article_two .list2').fadeOut();
//          
//     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>1800)
     {
        $('.article_three .list3').fadeIn(200,function(ql){
            $(this).animate({'top':'0px'},800);
        });
     }
//    else
//     {
//      $('.article_three .list3').fadeOut();
//     }
 });


/**/





/**/









$(window).scroll(function() {

    if ($(this).scrollTop()>2700)
     {
        $('.article_four .list4').fadeIn(200,function(ql){
            $(this).animate({'top':'0px'},800);
        });
     }
//    else
//     {
//      $('.article_four .list4').fadeOut();
//     }
 });







$(window).scroll(function() {
    
    
    if ($(this).scrollTop()>3800)
     {
        $('.article_five .list_pic1').fadeIn(200,function(ql){
            $(this).animate({'top':'50px'},800);
        });
        $('.article_five .list_pic2').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
        $('.article_five .list_pic3').fadeIn(200,function(ql){
            $(this).animate({'top':'50px'},800);
        });
     }
    else{
//        $('.section4 .list1').fadeOut();
//        $('.section4 .list2').fadeOut();
//        $('.section4 .list3').fadeOut();
    }
 });

//

