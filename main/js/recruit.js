
$(document).ready(function(){


    var winW=document.documentElement.clientWidth;
    var winH=document.documentElement.clientHeight;
    //console.log(winW+','+winH);
    window.onresize=function(){
        winW=document.documentElement.clientWidth;
        winH=document.documentElement.clientHeight;
    }


    if(winW<1025){
        //更改成移动端的结构
        $(".page4").removeClass('fp-auto-height');
        $('.contact-box p').html('广东省珠海市高新区唐家港乐路<br />大洲科技园二期8楼华标软件总部基地');

        $('#fp-box').fullpage({
            sectionsColor:['#FFF'],
            controlArrows:false,
            resize:false,
            verticalCentered:false,
            scrollingSpeed:700,
            anchors:['page1','page2','page3','page4','page5','page6','page10','page11'],
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
            fixedElements:'#pageLoad',
            keyboardScrolling:true,
            animateAnchor:true,
            recordHistory:false,
            navigation:false,
            navigationPosition:'right',
            showActiveTooltip:true,
            slidesNavigation:false,
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

                }
                if(index==3){

                }
                if(nextIndex==4){

                }
                if(index==4){

                }
                if(nextIndex==5){

                }
                if(index==5){

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
                if(nextIndex==10){

                }
                if(index==10){

                }
                if(nextIndex==11){

                }
                if(index==11){

                }
            },
            afterLoad: function(anchorLink, index){

            },
            afterRender:function(){
                //Resize窗口时重载页面
                    /*window.onresize=function(){
                        location.reload(true);
                    }*/
                //载入画面设置
                    //$('#pageLoad').remove();
                //Top-Nav
                    $('#top-nav-ContactUs').attr({'href':'javascript:void(null)'}).click(function(event) {
                        $.fn.fullpage.moveTo(8, 0);
                    });
                //page1
                    //使p1 Banner铺满整屏
                    var p1bgW=0,p1bgH=0;
                    $('.page1 .slide-box img').each(function(index,el){
                        p1bgW=$(this).width();
                        p1bgH=$(this).height();
                        if(winH>p1bgH){
                            $(this).css({'height':'100%','width':'auto'});
                        }else if(winW>p1bgW){
                            $(this).css({'width':'100%','height':'auto'});
                        }
                    })

                    window.onresize=function(){
                        $('.page1 .slide-box img').each(function(index,el){
                            p1bgW=$(this).width();
                            p1bgH=$(this).height();
                            if(winH>p1bgH){
                                $(this).css({'height':'100%','width':'auto'});
                            }else if(winW>p1bgW){
                                $(this).css({'width':'100%','height':'auto'});
                            }
                        })
                    }

                //page2

                //page3动效
                    //p3UlLi数量
                    var p3LiNum=$('.p3-box ul.p3-ul-m>li:nth-last-of-type(1)').index()+1;
                    $('.p3-box ul.p3-ul-m>li').eq(0).addClass('current').siblings('li').removeClass('current');
                    //重设olLi宽度
                    $('.p3-box ul.p3-ul-m ol li').width(winW/4);
                    //重设指示条dd
                    $('.p3-box dl').empty();
                    for(var i=0; i<p3LiNum;i++){
                        $('.p3-box dl').append('<dd></dd>');
                    }
                    $('.p3-box dl dd').eq(0).addClass('current').siblings('dd').removeClass('current');
                    $('.p3-box dl').css({'margin-left':-(($('.p3-box dl').width())/2)});

                    var p3CurrentIndex=null;
                    var p3NextIndex=null;
                    var p3onMove=0;
                    var p3Timer=null;
                    //p3下一个
                    function p3Next(){
                        if(p3onMove==1){//判断动画是否在进行
                            return 0;
                        }
                        p3onMove=1;

                        p3CurrentIndex=$('.p3-box ul.p3-ul-m>li.current').index();
                        if(p3CurrentIndex>=p3LiNum-1){
                            p3NextIndex=0;
                        }else{
                            p3NextIndex=p3CurrentIndex+1;
                        }
                        $('.p3-box ul.p3-ul-m>li').eq(p3NextIndex).css({'left':20+'%'}).animate({'left':0},300).addClass('current').siblings('li').removeClass('current');
                        $('.p3-box dl dd').eq(p3NextIndex).addClass('current').siblings('dd').removeClass('current');
                        p3onMove=0;
                    }

                    //p3上一个
                    function p3Pre(){
                        if(p3onMove==1){//判断动画是否在进行
                            return 0;
                        }
                        p3onMove=1;

                        p3CurrentIndex=$('.p3-box ul.p3-ul-m>li.current').index();
                        if(p3CurrentIndex<=0){
                            p3NextIndex=p3LiNum-1;
                        }else{
                            p3NextIndex=p3CurrentIndex-1;
                        }
                        $('.p3-box ul.p3-ul-m>li').eq(p3NextIndex).css({'left':-20+'%'}).animate({'left':0},300).addClass('current').siblings('li').removeClass('current');
                        $('.p3-box dl dd').eq(p3NextIndex).addClass('current').siblings('dd').removeClass('current');
                        p3onMove=0;
                    }

                    //p3计时器
                    clearInterval(p3Timer);
                    p3Timer=setInterval(p3Next, 2500);
                    $('.page3').on('touchstart', function(event) {
                        clearInterval(p3Timer);
                    });
                    $('.page3').on('touchend', function(event) {
                        clearInterval(p3Timer);
                        p3Timer=setInterval(p3Next, 2500);
                    });

                    //p3滑动
                    var p3Ul=$('.page3')[0];
                    var p3hammertime=new Hammer(p3Ul);
                    p3hammertime.on('swipe',function(ev){
                        if(ev.direction==2){
                            p3Next();
                        }
                        if(ev.direction==4){
                            p3Pre();
                        }
                    })


                //page4动效        

            }//afterRender

        });//fullpage

    }else if(winW>=1025){
        //处理PC和移动端不同的结构节点
        $(".page4").addClass('fp-auto-height');
        $('#fp-box').fullpage({
            sectionsColor:['#FFF'],
            controlArrows:false,
            resize:false,
            verticalCentered:false,
            scrollingSpeed:700,
            anchors:['page1','page2','page3','page4','page5','page6','page7','page10','page11'],
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
            fixedElements:'#top-nav-bg',
            keyboardScrolling:true,
            animateAnchor:true,
            recordHistory:false,
            navigation:false,
            navigationPosition:'right',
            showActiveTooltip:false,
            slidesNavigation:false,
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

                }
                if(index==3){

                }
                if(nextIndex==4){

                }
                if(index==4){

                }
                if(nextIndex==5){

                }
                if(index==5){

                }
                if(nextIndex==6){

                }
                if(index==6){

                }
                if(nextIndex==7){
                    $('.contact-box ul').addClass('maYunShow');
                    setTimeout(function(){init();},1000)//重载百度地图
                }
                if(index==7){

                }
                if(nextIndex==8){

                }
                if(index==8){

                }
                if(nextIndex==10){
                    
                }
                if(index==10){

                }
                if(nextIndex==11){

                }
                if(index==11){

                }
            },
            afterLoad: function(anchorLink, index){

            },
            afterRender:function(){
                //Resize窗口时重载页面
                    window.onresize=function(){
                        location.reload(true);
                    }
                //Top-Nav
                    var toCUY=$('#myPage10').offset().top;
                    $('#top-nav-ContactUs').attr({'href':'javascript:void(null)'}).click(function(event) {
                        $('html,body').animate({'scrollTop':toCUY},800)
                    });

                //page1
                    //使p1 Banner铺满整屏
                    var p1bgW=0,p1bgH=0;
                    $('.page1 .slide-box img').each(function(index,el){
                        p1bgW=$(this).width();
                        p1bgH=$(this).height()
                        console.log('p1bgW='+p1bgW+' p1bgH='+p1bgH);
                        if(winW<=p1bgW){
                            if(winH>p1bgH){
                                $(this).css({'height':'100%','width':'auto'});
                            }
                        }
                        if(winH<=p1bgH){
                            if(winW>p1bgW){
                                $(this).css({'wdith':'100%','height':'auto'});
                            }
                        }                       
                    })

                    //p1小电话
                    $('.p1-bottom-right').hover(function() {
                            $('.p1-bottom-box img').addClass('current');
                            $('.p1-bottom-box span').css({'opacity':1,'transform':'translate(0,-50%)'});
                        }, function() {
                            $('.p1-bottom-box img').removeClass('current');
                            $('.p1-bottom-box span').css({'opacity':0,'transform':'translate(50%,-50%)'});
                        });


                //page2

                //page3动效
                    var p3Timer=null;
                    var p3Num=$('.page3 .p3-box ul>li:nth-last-of-type(1)').index()+1;;
                    var p3CurrentIndex=null;
                    var p3NextIndex=null;

                    //重设指示条dd
                    $('.p3-box dl').empty();
                    for(var i=0; i<p3Num;i++){
                        $('.p3-box dl').append('<dd></dd>');
                    }
                    $('.p3-box dl dd').eq(0).addClass('current').siblings('dd').removeClass('current');
                    $('.p3-box dl').css({'margin-left':-(($('.p3-box dl').width())/2)});

                    //p3初始Class
                    $('.p3-box ul>li').eq(0).addClass('current').siblings('li').removeClass('current');

                    //鼠标移入切换
                    $('.p3-box dl dd').mouseenter(function(event) {
                        clearInterval(p3Timer);
                        $(this).addClass('current').siblings('dd').removeClass('current')
                        $('.page3 .p3-box ul>li').eq($(this).index()).addClass('current').css({'opacity':0}).animate({'opacity':1},500).siblings('li').removeClass('current');
                    });
                    $('.p3-box dl dd').mouseout(function(event) {
                        clearInterval(p3Timer);
                        p3Timer=setInterval(p3Next,2500);
                    });
                    

                    function p3Next(){
                        p3CurrentIndex=$('.p3-box ul>li.current').index();
                        if(p3CurrentIndex>=p3Num-1){
                            p3NextIndex=0;
                        }else{
                            p3NextIndex=p3CurrentIndex+1;
                        }
                        $('.p3-box ul>li').eq(p3NextIndex).addClass('current').css({'opacity':0}).animate({'opacity':1},500).siblings('li').removeClass('current');
                        $('.p3-box dl dd').eq(p3NextIndex).addClass('current').siblings('dd').removeClass('current');

                    }

                    //p3自动播放
                    clearInterval(p3Timer);
                    p3Timer=setInterval(p3Next,2500);
                    $('.page3 .p3-box ol li a').hover(function() {
                        clearInterval(p3Timer);
                    }, function() {
                        clearInterval(p3Timer);
                        p3Timer=setInterval(p3Next,2500);
                    });


                //page4动效        

            }//afterRender
       
        });//fullpage
    }
    


});