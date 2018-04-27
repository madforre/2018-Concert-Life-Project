setTimeout(function(ti){
    $('.write').fadeIn(200,function(ql){
            $(this).animate({'top':'150px'},800);
        });
},200);

window.onload=function(){

var reset = document.getElementsByClassName('reset')[0];
        reset.addEventListener('click',function(){
            history.go(0);
        })
            
        
        var goback = document.getElementsByClassName('goback')[0];
        goback.addEventListener('click',function(){
            history.go(-1);
        })
}
