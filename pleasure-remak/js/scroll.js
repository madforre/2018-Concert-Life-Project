//
//$(window).scroll(function() {
//
//  var scrollTop = $(this).scrollTop();
//  console.log(scrollTop);
//});
//


//******** setTimeout 시작 ********

setTimeout(function(ti){
    $('.header .line').fadeIn(550,function(ql){
            $(this).animate({'width':'105px'},800);
        });
},200);


setTimeout(function(ti){
    $('.section1 .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
},200);
   
setTimeout(function(ti){
    $('.section1 .list2').fadeIn(200,function(ql){
            $(this).animate({'top':'0px'},800);
        });
},200);


//******* section1 스크롤 이벤트 시작 ********

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

//******* section2 스크롤 이벤트 시작 ********

$(window).scroll(function() {
    
    if ($(this).scrollTop()>1300)
     {
         $('.section2 .list1').fadeIn(200,function(ql){
            $(this).animate({'top':'130px'},800);
        });
     }
    else
     {
        $('.section2 .list1').fadeOut();
          
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>1450)
     {
        $('.section2 .list2').fadeIn(200,function(ql){
            $(this).animate({'top':'260px'},800);
        });
     }
    else
     {
      $('.section2 .list2').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>2300)
     {
        $('.section2 .list3').fadeIn(200,function(ql){
            $(this).animate({'top':'1080px'},800);
        });
     }
    else
     {
      $('.section2 .list3').fadeOut();
     }
 });

$(window).scroll(function() {

    if ($(this).scrollTop()>2100)
     {
        $('.section2 .list4').fadeIn(200,function(ql){
            $(this).animate({'top':'910px'},800);
        });
         
     }
    else
     {
      $('.section2 .list4').fadeOut();
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




//******* section3 스크롤 이벤트 시작 ********

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

//
//$('.section_box').addClass("hidden").viewportChecker({
//		classToAdd: 'visible animated fadeInUp',
//		offset: 100
//	});