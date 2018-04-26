  
/*family_site */

$('.family_site').on('click',function(){
        $('.site_list').toggle();
    });





 $(document).ready(function($) {
           
            $(".go_top").click(function(event){    
                    $( 'html, body' ).stop().animate( { scrollTop : 0 },2000 );
            });


 });

/*마우스 스크롤*/

$(window).scroll(function() {
    
    if ($(this).scrollTop()>1800)
     {
         $('.go_top').fadeIn(500,function(ql){
            
        });
     }
    else
     {
        $('.go_top').fadeOut();
          
     }
 });
