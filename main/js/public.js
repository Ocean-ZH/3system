$(document).ready(function(){
    var winW=document.documentElement.clientWidth;
    //手机端
    if(winW<1025){
        //Top-Nav
        //menu是否展开
        var p1Menu=0;
        $('.top-nav ul li a').click(function(event) {
             $('.top-nav-bg').stop().animate({'height':'60px'},300);
             $('.top-nav-bg').css({'background-color':'rgba(0,0,0,.8)'});
             $('.top-nav ul').css({'display':'none'});
             $('.top-qr-big').css({'display':'none'});
             $('.top-nav .TN-3lines').attr({'src':'../../images/TN-3lines.png'});
             p1Menu=0;
        });
        $('.TN-3lines').click(function(event) {
            var pH=window.innerHeight;
            if(pH<400){
                pH=400;
            }
            if(p1Menu==0){
                $('.top-nav-bg').stop().animate({'height':pH},300,function(){
                    $('.top-nav ul').css({'display':'block'});
                });
                $('.top-nav-bg').css({'background-color':'rgba(0,0,0,1)'});
                $('.top-nav .TN-3lines').attr({'src':'../../images/TN-X.png'}).css({'width':'20px','height':'auto'});
                p1Menu=1;
            }else{
                 $('.top-nav-bg').stop().animate({'height':'60px'},300);
                 $('.top-nav-bg').css({'background-color':'rgba(0,0,0,.8)'});
                 $('.top-nav ul').css({'display':'none'});
                 $('.top-qr-big').css({'display':'none'});
                 $('.top-nav .TN-3lines').attr({'src':'../../images/TN-3lines.png'}).css({'width':'20px','height':'auto'});
                 p1Menu=0;
            }
            
        });
    }
});