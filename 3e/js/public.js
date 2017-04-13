$(document).ready(function(){

    var winW=document.documentElement.clientWidth;

    $('.top-qr').hover(function() {
        $('.top-qr-big').css({'display':'block'}).stop().animate({'opacity':1},300);
    }, function() {
        $('.top-qr-big').css({'display':'none'}).stop().animate({'opacity':0},300);
    });

    //手机端
    if(winW<1024){
        //Top-Nav
        var p1Menu=0;
        $('.top-nav ul li a').click(function(event) {
             $('.top-nav-bg').stop().animate({'height':'60px'},300);
             $('.top-nav-bg').css({'background-color':'rgba(0,0,0,.8)'});
             $('.top-nav ul').css({'display':'none'});
             $('.top-qr-big').css({'display':'none'});
             $('.top-nav .TN-3lines').attr({'src':'../../images/TN-3lines.png'});
        });
        $('.TN-3lines').click(function(event) {
            var pH=window.innerHeight;
            if(p1Menu==0){
                $('.top-nav-bg').stop().animate({'height':pH},300,function(){
                    $('.top-nav ul').css({'display':'block'});
                    $('.top-qr-big').css({'display':'none'});
                });
                $('.top-nav-bg').css({'background-color':'rgba(0,0,0,1)'});
                $('.top-nav .TN-3lines').attr({'src':'../../images/TN-X.png'}).css({'width':'18px','height':'auto'});
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
        $('.top-qr-big').height($('.top-qr-big').width());
    }
    
});