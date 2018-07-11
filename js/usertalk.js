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

var update = document.getElementsByClassName('update')[0];
        update.addEventListener('click',function(){
            location.href = 'update_qna.php';
        })

var delete_it = document.getElementsByClassName('delete')[0];
        delete_it.addEventListener('click',function(){
            location.href = 'delete_qna.php';
        })

var downloads = document.getElementsByClassName('download')[0];
        downloads.addEventListener('click',function(){
            location.href = 'download.php';
        })
}
