

$(document).ready(function(){
    //判断屏幕宽度改变fullpage滑动方式
    function fpScrollMode(){
        var winW=document.documentElement.clientWidth;
        var winH=window.innerHeight;
        window.onresize=function(){
            winW=document.documentElement.clientWidth;
        }
        if(winW<1024){
            //更改成移动端的结构
                var allTimer={};//全局定时器储存对象
                var in2=0,in3=0,in4=0;//是否进入第二/三/四屏
                $('.page2').addClass('fp-auto-height');
                $('.page3').addClass('fp-auto-height');
                $('.page5').addClass('fp-auto-height');
                $('.page6').addClass('fp-auto-height');
                $('.page7').addClass('fp-auto-height');
                $('.page8').addClass('fp-auto-height');//屛高度不足一屏作此处理

                $('.footer').remove();
                $('.m-slide-box .p2-liIn h5').remove();
                $('#contact-4btn').remove();
                $('.contact-box h4').eq(0).children('img').attr({'src':'images/contact-tel-m.gif'});
                $('.contact-box h4').eq(1).children('img').attr({'src':'images/contact-email-m.gif'});
                $('.contact-box p').html('广东省珠海市高新区唐家港乐路<br />大洲科技园二期8楼华标软件总部基地');

            $('#fp-box').fullpage({
                sectionsColor:['#FFF','#FFF','#f6f6f6','#fff'],
                controlArrows:false,
                resize:false,
                verticalCentered:false,
                scrollingSpeed:700,
                anchors:['page1','page2-5','page2','page3','page4','page5','page6','page7','page8','page8-5','page9','page10','page11'],
                lockanchors:true,
                css3:true,
                loopTop:false,
                loopBottom:false,
                //continuousVertical:true,
                loopHorizontal:true,
                //continuousHorizontal: true,
                autoScrolling:true,
                scrollBar:false,
                paddingTop:0,
                paddingBottom:0,
                fixedElements:'.side-btn-box',
                keyboardScrolling:true,
                animateAnchor:true,
                recordHistory:false,
                navigation:false,
                navigationPosition:'left',
                showActiveTooltip:true,
                slidesNavigation:true,
                slidesNavPosition:'bottom',
                scrollOverflow:false,
                //normalScrollElements:'.map-box',
                autoScrolling:false,
                fitToSection:false,
                animateAnchor:false,
                onLeave: function(index, nextIndex, direction){
                    //各页的过渡动画
                    if(nextIndex==1){
                        
                    }
                    if(index==1){
                        
                    }
                    if(nextIndex==2){
                        
                    }
                    if(index==2){
                        
                    }
                    if(nextIndex==3){
                        in2=1;
                    }
                    if(index==3){
                        in2=0;
                    }
                    if(nextIndex==4){
                        in3=1;
                    }
                    if(index==4){
                        in3=0;
                    }
                    if(nextIndex==5){
                        in4=1;
                    }
                    if(index==5){
                        in4=0;
                    }
                    if(nextIndex==6){
                    }
                    if(index==6){
                    }
                    if(nextIndex==7){
                    }
                    if(index==7){
                    }
                    if(nextIndex==8){
                    }
                    if(index==8){
                    }
                },
                afterLoad: function(anchorLink, index){
                    
                },
                afterRender:function(){
                    //Resize窗口时重载页面
                        /*window.onresize=function(){
                            location.reload(true);  
                        }*/
                    //Top-Nav
                        $('.top-nav .logo-box').click(function(event) {
                            $.fn.fullpage.moveTo(1, 0);
                        });
                        $("#top-nav-EBcase").parent('li').click(function(event) {
                            $.fn.fullpage.moveTo(3, 0);
                        });
                        $("#top-nav-ProductCenter").parent('li').click(function(event) {
                            $.fn.fullpage.moveTo(4, 0);
                        });
                        $("#top-nav-ContactUs").parent('li').click(function(event) {
                            $.fn.fullpage.moveTo(12, 0);
                        });
                        $('.top-qr-big').height($('.top-qr-big').width());

                    //page1
                        $('#banner1').css({'background':'url("images/banner01-m.jpg") no-repeat center center'});
                        $('#banner1').css({'background-size':'cover'});
                        var p1Menu=0;
                        $('.top-nav ul li a').click(function(event) {
                             $('.top-nav-bg').stop().animate({'height':'60px'},300);
                             $('.top-nav-bg').css({'background-color':'rgba(0,0,0,.8)'});
                             $('.top-nav ul').css({'display':'none'});
                             $('.top-qr-big').css({'display':'none'});
                             $('.top-nav .TN-3lines').attr({'src':'images/TN-3lines.png'});
                        });
                        $('.TN-3lines').click(function(event) {
                            var pH=$('.page1').height();
                            if(p1Menu==0){
                                $('.top-nav-bg').stop().animate({'height':pH},300,function(){
                                    $('.top-nav ul').css({'display':'block'});
                                    $('.top-qr-big').css({'display':'none'});
                                });
                                $('.top-nav-bg').css({'background-color':'rgba(0,0,0,1)'});
                                $('.top-nav .TN-3lines').attr({'src':'images/TN-X.png'});
                                p1Menu=1;
                            }else{
                                 $('.top-nav-bg').stop().animate({'height':'60px'},300);
                                 $('.top-nav-bg').css({'background-color':'rgba(0,0,0,.8)'});
                                 $('.top-nav ul').css({'display':'none'});
                                 $('.top-qr-big').css({'display':'none'});
                                 $('.top-nav .TN-3lines').attr({'src':'images/TN-3lines.png'});
                                 p1Menu=0;
                            }
                            
                        });


                    //page2动效
                        var p2LiW=0;
                        var p2Num=0;
                        var p2LiNum=0;
                        var p2Timer=null;
                        var p2CurrentIndex=null;
                        //用于判断p2是否在动画中
                        var p2onMove=0
                        //获取li数量
                        p2LiNum=$('.m-slide-box ul li:nth-last-of-type(1)').index()+1;
                        //单组li数量
                        p2Num=(p2LiNum-1)/2;
                        //重设UL宽度值
                        $('.m-slide-box ul').css({'width':(p2LiNum*100)+'%'});
                        //重设li宽度
                        $('.m-slide-box ul li').css({'width':(100/p2LiNum)+'%'})
                        //获取每个li宽度
                        p2LiW=$('.m-slide-box ul li').width();
                        //重设ul的初始left值
                        $('.m-slide-box ul').css({left:-(p2Num*p2LiW)});
                        //给正常视觉的第一个li添加class
                        $('.m-slide-box ul li').eq(p2Num).addClass('current').siblings('li').removeClass('current');
                        //重设指示条宽度
                        $('.p2-box ol').css({'width':(25*p2Num+15)});
                        $('.p2-box ol li').eq(0).addClass('current').siblings('li').removeClass('current');
                        //p2向右一个
                        function p2Next(p2NFlag){//参数二(0,1):位移目标是否为最后1个li,是1,否0)
                            if(in2==0){
                                return 0;
                            }
                            if(p2onMove==1){
                                return 0;
                            }
                            p2onMove=1;
                            p2NFlag=p2NFlag||0;
                            in2=0;
                            //current到下一个li
                            var nextIndex=0;     
                            p2CurrentIndex=$('.m-slide-box ul li.current').index();
                            //是否到最后一个li
                            if(p2CurrentIndex==(p2LiNum-1)){
                                p2NFlag=1;
                            }
                            if(p2NFlag==1){
                                p2CurrentIndex=p2Num;
                            }
                            
                            nextIndex=p2CurrentIndex+1;
                            $('.m-slide-box ul li').removeClass('current');
                            $('.m-slide-box ul li').eq(nextIndex).addClass('current');
                            if(nextIndex==(p2LiNum-1)){
                                $('.p2-box ol li').eq(0).addClass('current').siblings('li').removeClass('current');
                            }else{
                                $('.p2-box ol li').eq((p2CurrentIndex-p2Num+1)).addClass('current').siblings('li').removeClass('current');
                            }


                            //ul左移一个li宽
                            var ulL=parseFloat($('.m-slide-box ul').css('left'));
                            var nextUlL=ulL-p2LiW;
                            if(p2NFlag==1){
                                $('.m-slide-box ul').css({'left':-(p2Num*p2LiW)});
                                nextUlL=-((p2Num+1)*p2LiW);
                                $('.m-slide-box ul').animate({'left':nextUlL},300,function(){
                                    in2=1;
                                    p2onMove=0;
                                });
                            }else{                
                                $('.m-slide-box ul').animate({'left':nextUlL},300,function(){
                                    in2=1;
                                    p2onMove=0;
                                });
                            }
                        }

                        //p2向左一个
                        function p2Pre(p2NFlag){//参数二(0,1):位移目标是否为第1个li,是1,否0)
                            if(in2==0){
                                return 0;
                            }
                            if(p2onMove==1){
                                return 0;
                            }
                            p2onMove=1;
                            p2NFlag=p2NFlag||0;
                            //current到上一个li
                            var preIndex=0;     
                            p2CurrentIndex=$('.m-slide-box ul li.current').index();
                            if(p2CurrentIndex==(p2Num-1)){
                                p2NFlag=1;
                            }
                            if(p2NFlag==1){
                                p2CurrentIndex=p2LiNum-2;
                            }
                            preIndex=p2CurrentIndex-1;
                            $('.m-slide-box ul li').removeClass('current');
                            $('.m-slide-box ul li').eq(preIndex).addClass('current');
                            if(preIndex==(p2Num-1)){
                                $('.p2-box ol li').eq(p2Num-1).addClass('current').siblings('li').removeClass('current');
                            }else{
                                $('.p2-box ol li').eq(preIndex-p2Num).addClass('current').siblings('li').removeClass('current');
                            }

                            //ul右移一个li宽
                            var ulL=parseFloat($('.m-slide-box ul').css('left'));
                            var nextUlL=ulL+p2LiW;
                            if(p2NFlag==1){
                                $('.m-slide-box ul').css({'left':-((p2Num*2-1)*p2LiW)});
                                nextUlL=-p2LiW*(p2Num*2-2);
                                $('.m-slide-box ul').animate({'left':nextUlL},300,function(){
                                    p2onMove=0;
                                });
                            }else{                
                                $('.m-slide-box ul').animate({'left':nextUlL},300,function(){
                                    p2onMove=0;
                                });
                            }
                        }

                        //p2Li滑动
                            var p2box=$('.m-slide-box')[0];
                            var p2hammertime = new Hammer(p2box);
                            p2hammertime.on('swipe', function(ev) {
                                if(ev.direction==2){//左滑  
                                    p2Next();
                                }
                                if(ev.direction==4){//右滑
                                    p2Pre();
                                }
                            });
                        //p2Li按钮
                            /*$('#p2right').click(function(event) {
                                p2Next();
                            });
                            $('#p2left').click(function(event) {
                                p2Pre();
                            });*/
                        //p2自动轮播
                            clearInterval(p2Timer);
                            p2Timer=setInterval(p2Next,2500);
                            allTimer.p2Timer=p2Timer;
                            $('.p2-box').on('touchstart',function(event){
                                clearInterval(p2Timer);
                            })
                            $('.p2-box').on('touchend',function(event){
                                clearInterval(p2Timer);
                                p2Timer=setInterval(p2Next,2500);
                            })
                         //p2Li点击
                        $('.m-slide-box ul li').click(function(event) {
                            var clickIndex=$(this).index();
                            var hasCurrentIndex=null;
                            hasCurrentIndex=$('.m-slide-box ul li.current').index();
                            if(clickIndex==hasCurrentIndex){
                                if($(this).children('div').attr('data-url').indexOf('http',0)!=-1){
                                    window.location.href=($(this).children('div').attr('data-url'));
                                }else{
                                    alert('正在维护');
                                }                               
                            }

                        });
                        
                    //page3动效
                        var p3OlW=0;
                        var p3Num=0;
                        var p3LiNum=0;
                        var p3Timer=null;
                        var p3CurrentIndex=null;
                        var p3NavLiW=null;
                        //获取li数量
                        p3LiNum=$('.p3-divide ol li:nth-last-of-type(1)').index()+1;
                        ////获取ol宽度
                        p3OlW=$('.p3-divide ol').width();
                        //给第一个li添加class
                        $('.p3-divide ol li').eq(0).addClass('show').siblings('li').removeClass('show');
                       //重设指示条
                        $('.p3-divide ul.p3-nav').css({'width':p3LiNum*25+15});
                        $('.p3-divide ul.p3-nav li').eq(0).addClass('current');
                        
                        
                        //p3向右
                        function p3Next(){
                            if(in3==0){
                                return 0;
                            }
                            //下一个li添加class
                            p3CurrentIndex=$('.p3-divide ol li.show').index();
                            if(p3CurrentIndex==p3LiNum-1){
                                p3CurrentIndex=-1;
                            }
                            $('.p3-divide ol li').eq(p3CurrentIndex+1).addClass('show').siblings('li').removeClass('show');
                            $('.p3-divide ul.p3-nav li').eq(p3CurrentIndex+1).addClass('current').siblings('li').removeClass('current');
                        }
                        //p3向左
                        function p3Pre(){
                            p3CurrentIndex=$('.p3-divide ol li.show').index();
                            if(p3CurrentIndex==0){
                                p3CurrentIndex=p3LiNum;
                            }
                            $('.p3-divide ol li').eq(p3CurrentIndex-1).addClass('show').siblings('li').removeClass('show');
                            $('.p3-divide ul.p3-nav li').eq(p3CurrentIndex-1).addClass('current').siblings('li').removeClass('current');
                        }
                        //p3自动轮播
                        clearInterval(p3Timer);
                        p3Timer=setInterval(p3Next,2500);
                        $('.p3-divide').on('touchstart',function(event){
                            clearInterval(p3Timer);
                        })
                        $('.p3-divide').on('touchend',function(event){
                            clearInterval(p3Timer);
                            p3Timer=setInterval(p3Next,2500);
                        })
                        //p3滑动
                        var p3box=$('.p3-divide ol')[0];
                        var p3hammertime = new Hammer(p3box);
                        p3hammertime.on('swipe', function(ev) {
                            if(ev.direction==2){//左滑  
                                p3Next();
                            }
                            if(ev.direction==4){//右滑
                                p3Pre();
                            }
                        });
                        
                    //page4动效
                        var p4OlW=0;
                        var p4Num=0;
                        var p4LiNum=0;
                        var p4Timer=null;
                        var p4CurrentIndex=null;
                        //获取li数量
                        p4LiNum=$('.p4-divide ol li:nth-last-of-type(1)').index()+1;
                        ////获取ol宽度
                        p4OlW=$('.p4-divide ol').width();
                        //给第一个li添加class
                        $('.p4-divide ol li').eq(0).addClass('show').siblings('li').removeClass('show');
                       //重设指示条
                        $('.p4-divide ul.p4-nav').css({'width':p4LiNum*25+15});
                        $('.p4-divide ul.p4-nav li').eq(0).addClass('current');

                        //p4向右
                        function p4Next(){
                            if(in4==0){
                                return 0;
                            }
                            //下一个li添加class
                            p4CurrentIndex=$('.p4-divide ol li.show').index();
                            if(p4CurrentIndex==p4LiNum-1){
                                p4CurrentIndex=-1;
                            }
                            $('.p4-divide ol li').eq(p4CurrentIndex+1).addClass('show').siblings('li').removeClass('show');
                            $('.p4-divide ul.p4-nav li').eq(p4CurrentIndex+1).addClass('current').siblings('li').removeClass('current');
                        }
                        //p4向左
                        function p4Pre(){
                            p4CurrentIndex=$('.p4-divide ol li.show').index();
                            if(p4CurrentIndex==0){
                                p4CurrentIndex=p4LiNum;
                            }
                            $('.p4-divide ol li').eq(p4CurrentIndex-1).addClass('show').siblings('li').removeClass('show');
                            $('.p4-divide ul.p4-nav li').eq(p4CurrentIndex-1).addClass('current').siblings('li').removeClass('current');
                        }
                        //p4自动轮播
                        clearInterval(p4Timer);
                        p4Timer=setInterval(p4Next,2500);
                        $('.p4-divide').on('touchstart',function(event){
                            clearInterval(p4Timer);
                        })
                        $('.p4-divide').on('touchend',function(event){
                            clearInterval(p4Timer);
                            p4Timer=setInterval(p4Next,2500);
                        })
                        //p4滑动
                        var p4box=$('.p4-divide')[0];
                        var p4hammertime = new Hammer(p4box);
                        p4hammertime.on('swipe', function(ev) {
                            if(ev.direction==2){//左滑  
                                p4Next();
                            }
                            if(ev.direction==4){//右滑
                                p4Pre();
                            }
                        });
                    //page5
                        /*$('.page5 .p5-l').css({'height':winH*.25});
                        $('.page5 .p5-r').css({'height':winH*.8});*/

                    //page6
                        $('.p6-r .steve-box p').css({'width':($('.p6-r').width())});
                    //page7
                    //page8
                        $('#p8-ERPdetails').click(function(event) {
                            alert("正在维护");
                        });
                        

                    //page9
                        $('.p9-text a.p9-join').click(function(event) {
                            /*$.fn.fullpage.moveSectionDown();
                            $.fn.fullpage.moveSectionDown();*/
                        });
                    //page10
                        $('.page10 ul li:even').css({'margin-right':($('.page10 ul').width()*0.1)})
                        $('.page10 ul li a').css({'text-indent':($('.page10 ul li').width()*0.20)})
                        $('.page10 ul li img').css({'left':($('.page10 ul li').width()*0.08)})

                }//afterRender
           
            });//fullpage
        }else if(winW>=1024){
            //处理PC和移动端不同的结构节点
                $('.page8-5').remove();//PC下删掉page8-5
                $('.page2-5').remove();//PC下删掉page2-5
                $('.page2').removeClass('fp-auto-height');

            //用于判断是否从11到10，是的话阻止刷新百度地图
                var p11top10=0;

            $('#fp-box').fullpage({
                sectionsColor:['#FFF','#FFF','#f6f6f6','#fff'],
                controlArrows:false,
                resize:false,
                verticalCentered:false,
                scrollingSpeed:700,
                anchors:['page1','page2','page3','page4','page5','page6','page7','page8','page9','page10','page11'],
                lockanchors:true,
                css3:true,
                loopTop:false,
                loopBottom:false,
                //continuousVertical:true,
                loopHorizontal:true,
                //continuousHorizontal: true,
                autoScrolling:true,
                scrollBar:false,
                paddingTop:0,
                paddingBottom:0,
                fixedElements:'#top-nav-bg, .side-btn-box',
                keyboardScrolling:true,
                animateAnchor:true,
                recordHistory:false,
                navigation:false,
                navigationPosition:'left',
                showActiveTooltip:true,
                slidesNavigation:true,
                slidesNavPosition:'bottom',
                scrollOverflow:false,
                //normalScrollElements:'.map-box',
                autoScrolling:true,
                fitToSection:true,
                animateAnchor:false,
                onLeave: function(index, nextIndex, direction){
                    //各页的过渡动画
                    if(nextIndex==1){
                        $('.page1 .slide .banner-title-box img').addClass('maYunShow');
                        $('#top-nav-bg').removeClass('top-nav-bg2');
                        $('.top-nav ul li').removeClass('current');
                        $('.TN-rl li').eq(0).addClass('current');
                    }
                    if(index==1){
                        $('.page1 .slide .banner-title-box img').removeClass('maYunShow');
                        $('#top-nav-bg').addClass('top-nav-bg2');
                    }
                    if(nextIndex==2){
                        $('.top-nav ul li').removeClass('current');
                        $('.TN-r li').eq(0).addClass('current');
                    }
                    if(index==2){
                        $('.TN-r li').eq(0).removeClass('current');
                    }
                    if(nextIndex==3){
                        $('.top-nav ul li').removeClass('current');
                        $('.TN-r li').eq(1).addClass('current');
                    }
                    if(index==3){
                        if(nextIndex!=4&&nextIndex!=2&&nextIndex!=10){
                            $('.TN-r li').eq(1).removeClass('current');
                        }   
                    }
                    if(nextIndex==4){
                        $('.top-nav ul li').removeClass('current');
                        $('.TN-r li').eq(1).addClass('current');
                    }
                    if(index==4){
                        if(nextIndex!=3&&nextIndex!=2&&nextIndex!=10){
                            $('.TN-r li').eq(1).removeClass('current');
                        }  
                    }
                    if(nextIndex==5){
                        $('.maYun').addClass('maYunShow');
                    }
                    if(index==5){
                        $('.maYun').removeClass('maYunShow');
                    }
                    if(nextIndex==6){
                        $('.steveJobs').addClass('maYunShow');
                    }
                    if(index==6){
                        $('.steveJobs').removeClass('maYunShow');
                    }
                    if(nextIndex==7){
                        $('.p7-character').addClass('maYunShow');
                    }
                    if(index==7){
                        $('.p7-character').removeClass('maYunShow');
                    }
                    if(nextIndex==8){
                        $('.page8 .p8-r .p8-flowChart').addClass('p8-flowChart-show');
                    }
                    if(index==8){
                        $('.page8 .p8-r .p8-flowChart').removeClass('p8-flowChart-show');
                    }
                    if(nextIndex==10){
                        $('.contact-box ul').addClass('maYunShow');
                        $('.top-nav ul li').removeClass('current');
                        $('.TN-r li').eq(2).addClass('current');
                        setTimeout(function(){init();},1000)//重载百度地图
                    }
                    if(index==10){
                        $('.contact-box ul').removeClass('maYunShow');
                        if(nextIndex!=3&&nextIndex!=2&&nextIndex!=4){
                            $('.TN-r li').eq(2).removeClass('current');
                        }
                    }
                    if(nextIndex==11){

                    }
                    if(index==11){

                    }
                },
                afterLoad: function(anchorLink, index){
                    if(index==1){
                         setTimeout(function(){$('.page1 .slide .banner-title-box img').addClass('maYunShow');}, 200);
                    }
                },
                afterRender:function(){
                    //Resize窗口时重载页面
                        window.onresize=function(){
                            location.reload(true);
                            //$.fn.fullpage.reBuild();
                        }
                    //侧边按钮
                        $('#side-go-top').click(function(event) {
                            $.fn.fullpage.moveTo(1);
                        });
                    //Top-Nav
                        $("#top-nav-EBcase").click(function(event) {
                            $.fn.fullpage.moveTo(2, 0);
                        });
                        $("#top-nav-ProductCenter").click(function(event) {
                            $.fn.fullpage.moveTo(3, 0);
                        });
                        $("#top-nav-ContactUs").click(function(event) {
                            $.fn.fullpage.moveTo(11, 0);
                            $.fn.fullpage.moveTo(10, 0);
                        });

                    //page1的banner轮播
                        /*var bannerTimer=null;
                        clearInterval(bannerTimer);
                        function bannerPlay(){
                            $.fn.fullpage.moveSlideRight();
                        }
                        var bannerTimer=setInterval(bannerPlay, 3000);*/
                        $('.p1-bottom-right').hover(function() {
                            $('.p1-bottom-box img').addClass('current');
                            $('.p1-bottom-box span').css({'opacity':1,'transform':'translate(0,-50%)'});
                        }, function() {
                            $('.p1-bottom-box img').removeClass('current');
                            $('.p1-bottom-box span').css({'opacity':0,'transform':'translate(50%,-50%)'});
                        });

                    //page2动效
                        var p2LiW=0;
                        var p2Num=0;
                        var p2LiNum=0;
                        var p2Timer=null;
                        var p2CurrentIndex=null;
                        //获取li数量
                        p2LiNum=$('.slide-box ul li:nth-last-of-type(1)').index()+1;
                        //单组li数量
                        p2Num=p2LiNum/3;
                        //重设UL宽度值
                        $('.slide-box ul').css({'width':((p2LiNum/5)*100)+'%'});
                        //重设li宽度
                        $('.slide-box ul li').css({'width':(100/p2LiNum)+'%'})
                        ////获取每个li宽度
                        p2LiW=$('.slide-box ul li').width()+20;
                        //重设ul的初始left值
                        $('.slide-box ul').css({left:-p2Num*p2LiW});
                        //给中间的li添加class
                        $('.slide-box ul li').eq(p2Num+2).addClass('current').siblings('li').removeClass('current');
                        //p2产品向右看
                        function p2Next(rightNum,p2NFlag){//(参数一(1,2):右移1位/2位;参数二(0,1):位移目标是否为最后两个li,是1,否0)
                            rightNum=rightNum||1;
                            p2NFlag=p2NFlag||0;
                            //放大下一个li
                            var nextIndex=0;     
                            p2CurrentIndex=$('.slide-box ul li.current').index();
                            if(p2CurrentIndex>=(p2LiNum-3)){
                                p2NFlag=1;
                            }
                            if(p2NFlag==1){
                                p2CurrentIndex=p2CurrentIndex-p2Num;
                            }
                            nextIndex=p2CurrentIndex+rightNum;
                            $('.slide-box ul li').removeClass('current');
                            $('.slide-box ul li').eq(nextIndex).addClass('current');

                            //ul左移一个li宽
                            var ulL=parseFloat($('.slide-box ul').css('left'));
                            var nextUlL=ulL-(p2LiW*rightNum);
                            if(p2NFlag==1){
                                var p2CurrentUlL=p2CurrentIndex-2;//对应原li的left
                                $('.slide-box ul').css({'left':(-p2LiW*p2CurrentUlL)});
                                nextUlL=-p2LiW*(p2CurrentUlL+rightNum);
                                $('.slide-box ul').animate({'left':nextUlL},300);
                            }else{                
                                $('.slide-box ul').animate({'left':nextUlL},300);
                            }
                        }
                        //p2产品向左看
                        function p2Pre(leftNum,p2NFlag){
                            leftNum=leftNum||1;
                            p2NFlag=p2NFlag||0;
                            //放大上一个li
                            var preIndex=0;      
                            p2CurrentIndex=$('.slide-box ul li.current').index();
                            if(p2CurrentIndex<=2){
                                p2NFlag=1;
                            }
                            if(p2NFlag==1){
                                p2CurrentIndex=p2CurrentIndex+p2Num;
                            }
                            preIndex=p2CurrentIndex-leftNum;
                            $('.slide-box ul li').removeClass('current');
                            $('.slide-box ul li').eq(preIndex).addClass('current');
                            //ul右移一个li宽
                            var ulL=parseFloat($('.slide-box ul').css('left'));
                            var nextUlL=ulL+(p2LiW*leftNum);
                            if(p2NFlag==1){
                                var p2CurrentUlL=p2CurrentIndex-2;//对应原li的left
                                $('.slide-box ul').css({'left':(-p2LiW*p2CurrentUlL)});
                                nextUlL=-p2LiW*(p2CurrentUlL-leftNum);
                                $('.slide-box ul').animate({'left':nextUlL},300);
                            }else{                
                                $('.slide-box ul').animate({'left':nextUlL},300);
                            }
                        }

                        //p2自动轮播
                        clearInterval(p2Timer);
                        p2Timer=setInterval(p2Next,2500);

                        $('.slide-box ul').mouseenter(function(event) {
                            clearInterval(p2Timer);
                        });
                        $('.slide-box ul').mouseout(function(event) {
                            clearInterval(p2Timer);
                            p2Timer=setInterval(p2Next,2500);
                        });

                        //p2左右按钮
                        $("#p2-toright").click(function(event) { 
                            p2Next();
                        });
                        $("#p2-toleft").click(function(event) {
                             p2Pre();
                        });
                        $('.p2-box ol li').mouseenter(function(event) {
                            clearInterval(p2Timer);
                        });
                        $('.p2-box ol li').mouseout(function(event) {
                            clearInterval(p2Timer);
                            p2Timer=setInterval(p2Next,1500);
                        });

                        //p2Li点击
                        $('.slide-box ul li').click(function(event) {
                            var clickIndex=$(this).index();
                            var hasCurrentIndex=null;
                            hasCurrentIndex=$('.slide-box ul li.current').index();
                            if(clickIndex==hasCurrentIndex){
                                if($(this).children('div').attr('data-url').indexOf('http',0)!=-1){
                                    window.open($(this).children('div').attr('data-url'));
                                }else{
                                    alert('正在维护');
                                }                               
                            }
                            if(clickIndex>hasCurrentIndex){
                                if((clickIndex-hasCurrentIndex)==1){
                                        p2Next();  
                                }else{
                                    if(clickIndex==(p2LiNum-2)){
                                        p2Next(2,1);
                                    }else{
                                        p2Next(2);
                                    }   
                                }
                            }else if(clickIndex<hasCurrentIndex){
                                if((hasCurrentIndex-clickIndex)==1){
                                    p2Pre();
                                }else{
                                    if(clickIndex==1){
                                        p2Pre(2,1);
                                    }else{
                                        p2Pre(2);
                                    }
                                }
                            }

                        });
                        

                    //page3动效
                        $('.p3-list ul li').eq(0).addClass('current').siblings('li').removeClass('current');
                        var p3Timer=null;
                        $('.p3-list ul').mouseover(function(event) {
                            clearInterval(p3Timer);
                            clearInterval(p4Timer);
                        });
                        
                        $('.p3-list ul li').mouseenter(function(event) {
                            $(this).addClass('current').siblings('li').removeClass('current');
                            var p3Index=$(this).index();
                            $(this).closest('.p3-list').siblings('.p3-divide').children('ol').children('li').removeClass('show').eq(p3Index).addClass('show');
                        });
                        $('.p3-list ul').mouseout(function(event) {
                            clearInterval(p3Timer);
                            clearInterval(p4Timer);
                            p3Timer=setInterval(p3Next, 2500);
                            p4Timer=setInterval(p4Next, 2500);
                        });
                        function p3Next(){
                            var p3CurrentIndex= $('.page3 .p3-list ul li.current').index();
                            if(p3CurrentIndex<7){
                                p3CurrentIndex+=1;
                            }else{
                                p3CurrentIndex=0;
                            }
                            $('.page3 .p3-list ul li').eq(p3CurrentIndex).addClass('current').siblings('li').removeClass('current');
                            $('.page3 .p3-list ul li').eq(p3CurrentIndex).closest('.p3-list').siblings('.p3-divide').children('ol').children('li').removeClass('show').eq(p3CurrentIndex).addClass('show');
                        }
                        clearInterval(p3Timer);
                        p3Timer=setInterval(p3Next, 2500);
                    //page4动效
                        var p4Timer=null;
                        function p4Next(){
                            var p4CurrentIndex= $('.page4 .p3-list ul li.current').index();
                            if(p4CurrentIndex<6){
                                p4CurrentIndex+=1;
                            }else{
                                p4CurrentIndex=0;
                            }
                            $('.page4 .p3-list ul li').eq(p4CurrentIndex).addClass('current').siblings('li').removeClass('current');
                            $('.page4 .p3-list ul li').eq(p4CurrentIndex).closest('.p3-list').siblings('.p3-divide').children('ol').children('li').removeClass('show').eq(p4CurrentIndex).addClass('show');
                        }
                        clearInterval(p4Timer);
                        p4Timer=setInterval(p4Next, 2500);
                    //page8
                        $('#p8-ERPdetails').click(function(event) {
                            alert("正在维护");
                        });
                    //page9
                        $('.p9-text a.p9-join').click(function(event) {
                            $.fn.fullpage.moveSectionDown();
                            $.fn.fullpage.moveSectionDown();
                        });
                        
                }//afterRender
           
            });//fullpage
        }
    }
    fpScrollMode();
    


});