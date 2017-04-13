$(document).ready(function(){
    var winW=document.documentElement.clientWidth;
    var winH=window.innerHeight;
    /*window.onresize=function(){
        location.reload();
    }*/


    //移动端
    if(winW<1024){
        $('.banner-box-540').height(winH*.6);
        $('.article-footer a').removeClass('fl-r').removeClass('fl-l');

        $('.article-content img').click(function(event) {
            window.location.href=$(this).attr('src');
        });


    }

});