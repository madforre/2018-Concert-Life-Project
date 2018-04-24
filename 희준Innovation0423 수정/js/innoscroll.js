//
//
////***********    clivk 했을때 내려가는  *******
//
// $(document).ready(function($) {
//           
//            $(".aTop").click(function(event){    
//                    $( 'html, body' ).stop().animate( { scrollTop : 500 } );
//            });
//           
//           $(".bTop").click(function(event){    
//                    $( 'html, body' ).stop().animate( { scrollTop : 3200 } );
//            });
//       });
//
//
//
//








//******** setTimeout 시작 ********

setTimeout(function(ti){
    $('.article_one .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
},200);
   
setTimeout(function(ti){
    $('.article_one .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'0px'},800);
        });
},200);


//******* section1 시작 ********

$(window).scroll(function() {

    if ($(this).scrollTop()>600)
     {
        $('.section1 .list3').fadeIn(1000);
     }
    else
     {
//      $('.section1 .list3').fadeOut();
     }
 });

//******* section2 시작 ********

$(window).scroll(function() {
    
    if ($(this).scrollTop()>1000)
     {
         $('.article_two .list2').fadeIn(200,function(ql){
            $(this).animate({'top':'195px'},200);
        });
     }
    else
     {
        $('.article_two .list2').fadeOut();
          
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>1800)
     {
        $('.article_three .list3').fadeIn(200,function(ql){
            $(this).animate({'top':'1080px'},800);
        });
     }
    else
     {
      $('.article_three .list3').fadeOut();
     }
 });



$(window).scroll(function() {

    if ($(this).scrollTop()>2700)
     {
        $('.article_four .list4').fadeIn(200,function(ql){
            $(this).animate({'top':'480px'},800);
        });
     }
    else
     {
      $('.article_four .list4').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>3700)
     {
        $('.article_five .list5').fadeIn(200,function(ql){
            $(this).animate({'top':'910px'},800);
        });
         
     }
    else
     {
      $('.article_five .list5').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>2900)
     {
        $('.section2 .list5').fadeIn(200,function(ql){
            $(this).animate({'top':'1730px'},800);
        });
     }
    else
     {
      $('.section2 .list5').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>3100)
     {
        $('.section2 .list6').fadeIn(200,function(ql){
            $(this).animate({'top':'1860px'},800);
        });
     }
    else
     {
      $('.section2 .list6').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>3800)
     {
        $('.section2 .list7').fadeIn(200,function(ql){
            $(this).animate({'top':'2610px'},800);
        });
     }
    else
     {
//      $('.section2 .list7').fadeOut();
     }
 });




//******* section3 시작 ********

$(window).scroll(function() {

    if ($(this).scrollTop()>4340)
     {
        $('.section3 .list3').fadeIn(200,function(ql){
            $(this).animate({'top':'395px'},800);
        });
        $('.backBg').fadeIn(2000);
     }
    else
     {
//      $('.section3 .list3').fadeOut();
//      $('.backBg').fadeOut(1000);
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>5370)
     {
        $('.section4 .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
        $('.section4 .list2').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
        $('.section4 .list3').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
     }
    else{
//        $('.section4 .list1').fadeOut();
//        $('.section4 .list2').fadeOut();
//        $('.section4 .list3').fadeOut();
    }
 });

