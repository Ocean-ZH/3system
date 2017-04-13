$(document).ready(function(){
    var winW=document.documentElement.clientWidth;
    var winH=document.documentElement.clientHeight;
    /*window.onresize=function(){
        location.reload();
    }*/

    $('.main-box .list-btn a').click(function(event) {
            $(this).addClass('current').siblings('a').removeClass('current');
            //console.log(event);
         $('.main-box ul').eq($(this).index()).addClass('current').siblings('ul').removeClass('current')
    });
    $('.list-up-btn a').hover(function() {
        $(this).children('img').attr({'src':'images/list/share2.gif'});
    }, function() {
        $(this).children('img').attr({'src':'images/list/share.gif'});
    });
    $('.list-up-btn a').click(function(event) {
        if($(this).parent('.list-up-btn').children('.bdsharebuttonbox').css('display')=='none'){
            $(this).parent('.list-up-btn').children('.bdsharebuttonbox').css({'display':'block'});
        }else{
            $(this).parent('.list-up-btn').children('.bdsharebuttonbox').css({'display':'none'});
        }
        
    });

    //移动端
    if(winW<1025){
        $('.banner-box-540').height(winH*.6);
    }
}); 