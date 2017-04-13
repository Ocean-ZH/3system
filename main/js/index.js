
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
        $('.contact-box p').html('广东省珠海市高新区唐家港乐路<br />大洲科技园二期8楼华标软件总部基地');
        $('.page5').addClass('fp-auto-height');
        $('.page5 .page-video-pc').remove();

        $('#fp-box').fullpage({
            sectionsColor:['#000'],
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
                    $('#top-nav-ContactUs').click(function(event) {
                         $.fn.fullpage.moveTo(8, 0);
                    });
                //page1
                    //使p1 Banner铺满整屏
                    /*var p1bgW=0,p1bgH=0;
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
                    }*/

                    //处理p1视觉欺骗li
                    $('.page1 ul li:nth-last-of-type(1)').clone().prependTo('.page1 ul');
                    $('.page1 ul li').eq(1).clone().appendTo('.page1 ul')
                    //p1轮播
                    //li总数
                    var p1LiNum=$('.page1 ul li:nth-last-of-type(1)').index()+1;
                    //单组li数量
                    var p1Num=p1LiNum-2;
                    var p1Timer=null;
                    var p1CurrentIndex=0;
                    var p1onMove=0;
                    var p1ulL=0;
                    var p1olIndex=0;               
                    //重设ul的宽度
                    $('.page1 ul').css({'width':p1LiNum*100+'%'});
                    //重设li宽度
                    $('.page1 ul li').css({'width':(1/p1LiNum)*100+'%'});
                    //获取每个Li宽度
                    var p1LiW=$('.page1 ul li').width();
                    //重设ul的初始left值
                    $('.page1 ul').css({left:-p1LiW});
                    //给初始的li添加class
                    $('.page1 ul li').eq(1).addClass('current').siblings('li').removeClass('current');

                    //给初始的指示条li添加class
                    $('.page1 ol li').eq(0).addClass('current').siblings('li').removeClass('current');
                    //p1往右
                    function p1Next(){
                        //是否在进行动画
                        if(p1onMove==1){
                            return 0;
                        }
                        p1onMove=1;
                        //当前的li索引
                        p1CurrentIndex=$('.page1 ul li.current').index();
                        //如果是最后一个li
                        if(p1CurrentIndex==p1LiNum-1){
                            p1CurrentIndex=1;
                            p1olIndex=p1CurrentIndex;
                            //重设ul的left
                            $('.page1 ul').css({'left':-(p1LiW*p1CurrentIndex)});
                        }
                        //下一个li加Class
                        $('.page1 ul li').eq(p1CurrentIndex+1).addClass('current').siblings('li').removeClass('current');
                        //此时的UL的left
                        p1ulL=-(p1LiW*p1CurrentIndex);
                        //ul左移一个li宽
                        $('.page1 ul').animate({'left':(p1ulL-p1LiW)},300,function(){
                            p1onMove=0;
                        });  
                        //指示条下一个li索引
                        if(p1CurrentIndex==p1Num){
                            p1olIndex=0;
                        }else{
                            p1olIndex=p1CurrentIndex;
                        }
                        //下一个指示条li加Class
                        $('.page1 ol li').eq(p1olIndex).addClass('current').siblings('li').removeClass('current');                  
                    }

                    //p1往左
                    function p1Pre(){
                        //是否在进行动画
                        if(p1onMove==1){
                            return 0;
                        }
                        p1onMove=1;
                        //当前的li索引
                        p1CurrentIndex=$('.page1 ul li.current').index();
                        //如果是第一个li
                        if(p1CurrentIndex==0){
                            p1CurrentIndex=p1Num;
                            //重设ul的left
                            $('.page1 ul').css({'left':-(p1LiW*p1CurrentIndex)});
                        }
                        //下一个li加Class
                        $('.page1 ul li').eq(p1CurrentIndex-1).addClass('current').siblings('li').removeClass('current');
                        //此时的UL的left
                        p1ulL=-(p1LiW*p1CurrentIndex);
                        //ul右移一个li宽
                        $('.page1 ul').animate({'left':(p1ulL+p1LiW)},300,function(){
                            p1onMove=0;
                        });  
                        //指示条上一个li索引
                        //上指示条li加Class
                        p1olIndex=p1CurrentIndex-2;
                        /*console.log(p1CurrentIndex);
                        console.log(p1olIndex);*/
                        $('.page1 ol li').eq(p1olIndex).addClass('current').siblings('li').removeClass('current');                  
                    }

                    //p1轮播循环计时器
                    clearInterval(p1Timer);
                    /*p1Timer=setInterval(p1Next,2500);
                    $('.page1').on('touchstart',function(event){
                        clearInterval(p1Timer);
                    })
                    $('.page1').on('touchend',function(event){
                        clearInterval(p1Timer);
                        p1Timer=setInterval(p1Next,2500);
                    })
                    //p1滑动
                    var p1Ul=$('.page1 ul')[0];
                    var p1hammertime=new Hammer(p1Ul);
                    p1hammertime.on('swipe',function(ev){
                        if(ev.direction==2){
                            p1Next();
                        }
                        if(ev.direction==4){
                            p1Pre();
                        }
                    })*/

                //page2
                    //使p2 及以下的同类 bg铺满整屏
                    /*var pagebgW=0,pagebgH=0;
                    $('.page-box img.page-bg').each(function(index,el){
                        pagebgW=$(this).width();
                        pagebgH=$(this).height();
                        if(winH>pagebgH){
                            $(this).css({'height':'100%','width':'auto'});
                        }else if(winW>pagebgW){
                            $(this).css({'width':'100%','height':'auto'});
                        }
                    })
                    window.onresize=function(){
                        $('.page-box img.page-bg').each(function(index,el){
                            pagebgW=$(this).width();
                            pagebgH=$(this).height();
                            if(winH>pagebgH){
                                $(this).css({'height':'100%','width':'auto'});
                            }else if(winW>pagebgW){
                                $(this).css({'width':'100%','height':'auto'});
                            }
                        })
                    }*/

                //page3动效
                    
                //page4动效        

                //page5处理
                winW=document.documentElement.clientWidth;
                winH=document.documentElement.clientHeight;
                //处理播放器的样式
                $('.page5 .page-box').height(winH);
                if(winW<874){
                    $('.page5 .page-video-m').height((winW*480)/854);
                    $('.page5 .page-video-m video').attr({'width':winW,'height':((winW*480)/854)});
                    $('.page5 .page-box').height(winH+((winW*480)/1708));
                }if(winW>=874){
                    $('.page5 .page-video-m').height((winW*480)/854);
                    $('.page5 .page-video-m video').attr({'width':854,'height':480});
                    $('.page5 .page-box').height(winH+240);

                }
                //播放器控制
                //console.log(navigator.userAgent);
                if (navigator.userAgent.toLowerCase().indexOf("iphone") > -1 && navigator.userAgent.toLowerCase().indexOf("safari") > -1){
                    $('.page5 .page-video-m .video-play').css({'visibility':'hidden'});
                    $('#p5VideoM').css({'visibility':'visible',"opacity":1});
                }
                var p5Play=0;
                $('.page5 .page-video-m .video-play').click(function(event){
                    $('#p5VideoM')[0].play();
                })
                $('#p5VideoM')[0].onplay=function(){
                    $('#p5VideoM').css({'visibility':'visible',"opacity":1});
                    $('.page5 .page-video-m .video-play').css({'visibility':'hidden'});
                }
                $('#p5VideoM')[0].onpause=function(){
                    $('#p5VideoM').css({'visibility':'hidden',"opacity":0});
                    $('.page5 .page-video-m .video-play').css({'visibility':'visible'});
                }

            }//afterRender

        });//fullpage

    }else if(winW>=1025){
        //处理PC和移动端不同的结构节点
        $('.page1 .slide-box img.p1-bg-m').remove();
        $('.page5 .page-video-m').remove();
        //$('#pageLoad').remove();
        $('#fp-box').fullpage({
            sectionsColor:['#000'],
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
            fixedElements:'#top-nav-bg',
            keyboardScrolling:true,
            animateAnchor:true,
            recordHistory:false,
            navigation:true,
            navigationPosition:'right',
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
                        location.reload();
                    }
                    winW=document.documentElement.clientWidth;
                    winH=document.documentElement.clientHeight;
                //Top-Nav
                    $('#top-nav-ContactUs').click(function(event) {
                         $.fn.fullpage.moveTo(8, 0);
                         $.fn.fullpage.moveTo(7, 0);       
                    });
                //page1
                    //使p1 Banner铺满整屏
                    var p1bgW=0,p1bgH=0;
                    $('.page1 .slide-box img').each(function(index,el){
                        var theImage=new Image();
                        theImage.src= $(this).attr('src');
                        p1bgW=theImage.width;
                        p1bgH=theImage.height;
                        console.log('winW='+winW+' , winH='+winH+' , p1bgW='+p1bgW+' , p1bgH='+p1bgH);
                        if((p1bgW/p1bgH)<(winW/winH)){
                            $(this).css({'width':'100%','height':'auto'});
                        }
                    })
                    
                    /*window.onresize=function(){
                        $('.page1 img.page-bg').each(function(index,el){
                            p1bgW=$(this).width();
                            p1bgH=$(this).height();
                            if(winW<=p1bgW){
                                if(winH>p1bgH && (p1bgH>=winH)){
                                    $(this).css({'height':'100%','width':'auto'});
                                }
                            }
                            if(winH<=p1bgH && (p1bgW>=winW)){
                                if(winW>p1bgW){
                                    $(this).css({'width':'100%','height':'auto'});
                                }
                            }      
                        })
                    }*/

                    //处理p1视觉欺骗li
                    $('.page1 ul li:nth-last-of-type(1)').clone().prependTo('.page1 ul');
                    $('.page1 ul li').eq(1).clone().appendTo('.page1 ul')

                    //p1轮播
                    //li总数
                    var p1LiNum=$('.page1 ul li:nth-last-of-type(1)').index()+1;
                    //单组li数量
                    var p1Num=p1LiNum-2;
                    var p1Timer=null;
                    var p1CurrentIndex=0;
                    var p1onMove=0;
                    var p1ulL=0;
                    var p1olIndex=0;
                    //重设ul的宽度
                    $('.page1 ul').css({'width':p1LiNum*100+'%'});
                    //重设li宽度
                    $('.page1 ul li').css({'width':(1/p1LiNum)*100+'%'});
                    //获取每个Li宽度
                    var p1LiW=$('.page1 ul li').width();
                    //重设ul的初始left值
                    $('.page1 ul').css({left:-p1LiW});
                    //给初始的li添加class
                    $('.page1 ul li').eq(1).addClass('current').siblings('li').removeClass('current');
                    //给初始的指示条li添加class
                    $('.page1 ol li').eq(0).addClass('current').siblings('li').removeClass('current');
                    //p1往右
                    function p1Next(){
                        //是否在进行动画
                        if(p1onMove==1){
                            return 0;
                        }
                        p1onMove=1;
                        //当前的li索引
                        p1CurrentIndex=$('.page1 ul li.current').index();
                        //如果是最后一个li
                        if(p1CurrentIndex==p1LiNum-1){
                            p1CurrentIndex=1;
                            p1olIndex=p1CurrentIndex;
                            //重设ul的left
                            $('.page1 ul').css({'left':-(p1LiW*p1CurrentIndex)});
                        }
                        //下一个li加Class
                        $('.page1 ul li').eq(p1CurrentIndex+1).addClass('current').siblings('li').removeClass('current');
                        //此时的UL的left
                        p1ulL=-(p1LiW*p1CurrentIndex);
                        //ul左移一个li宽
                        $('.page1 ul').animate({'left':(p1ulL-p1LiW)},300,function(){
                            p1onMove=0;
                        });  
                        //指示条下一个li索引
                        if(p1CurrentIndex==3){
                            p1olIndex=0;
                        }else{
                            p1olIndex=p1CurrentIndex;
                        }
                        //下一个指示条li加Class
                        $('.page1 ol li').eq(p1olIndex).addClass('current').siblings('li').removeClass('current');                  
                    }

                    //p1轮播循环计时器
                    clearInterval(p1Timer);
                    /*p1Timer=setInterval(p1Next,2500);

                    //p1点击跳转
                    $('.page1 ol li').click(function(event) {
                        //是否在进行动画
                        if(p1onMove==1){
                            return 0;
                        }
                        clearInterval(p1Timer);
                        p1onMove=1;
                        //本指示条加类
                        $(this).addClass('current').siblings('li').removeClass('current');
                        //获取本指示条索引
                        var p1clickIndex=$(this).index();
                        //获取li索引
                        p1CurrentIndex=$('.page1 ul li.current').index();
                        if(p1CurrentIndex==(p1LiNum-1)){
                            p1CurrentIndex=1;
                            $('.page1 ul').css({'left':-(p1LiW*p1CurrentIndex)});
                        }
                        //去的li加Class
                        $('.page1 ul li').eq(p1clickIndex+1).addClass('current').siblings('li').removeClass('current');

                         $('.page1 ul').animate({'left':-(p1LiW*(p1clickIndex+1))},300,function(){
                            p1onMove=0;
                            clearInterval(p1Timer);
                            p1Timer=setInterval(p1Next,2500);
                         });
                    });*/


                //page2
                    //使p2 及以下的同类 bg铺满整屏
                    var pagebgW=0,pagebgH=0;
                    $('.page-box img.page-bg').each(function(index,el){
                        var theImage=new Image();
                        theImage.src= $(this).attr('src');
                        pagebgW=theImage.width;
                        pagebgH=theImage.height;
                        console.log('winW='+winW+' , winH='+winH+' , pagebgW='+pagebgW+' , pagebgH='+pagebgH);
                        if((pagebgW/pagebgH)<(winW/winH)){
                            $(this).css({'width':'100%','height':'auto'});
                        }
                    })

                    /*window.onresize=function(){
                        $('.page-box img.page-bg').each(function(index,el){
                            pagebgW=$(this).width();
                            pagebgH=$(this).height();
                            if(winW>pagebgW && (pagebgH>=winH)){
                                $(this).css({'width':'100%','height':'auto'});
                            }else if(winH>pagebgH && (pagebgW>=winW)){
                                $(this).css({'height':'100%','width':'auto'});
                            }

                        })
                    }*/


                //page3动效
                    
                //page4动效        

                //page5
                
                

            }//afterRender
       
        });//fullpage
    }
    


});