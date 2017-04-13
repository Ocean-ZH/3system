//百度地图API功能
    var point=null;
    function loadJScript() {
        var baiduscript = document.createElement("script");
        baiduscript.type = "text/javascript";
        baiduscript.src = "http://api.map.baidu.com/api?v=2.0&ak=CP6zV7VaABB0T7POQaQd3YlbQPqRAjS7&callback=init";
        document.body.appendChild(baiduscript);
    }
    function init() {
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物 
            
        }
        function createMap(){ 
          map = new BMap.Map("map"); 
          point = new BMap.Point(113.60300,22.37);
          map.centerAndZoom(point, 17);
        }
        function setMapEvent(){
          //map.enableScrollWheelZoom();
          map.enableKeyboard();
          map.enableDragging();
          map.enableDoubleClickZoom()
        }
        function addClickHandler(target,window){
          target.addEventListener("click",function(){
            target.openInfoWindow(window);
          });
        }
        function addMapOverlay(){
            var marker = new BMap.Marker(new BMap.Point(113.6027500,22.370062)); // 创建点
              var circle = new BMap.Circle(point,50,{strokeColor:"blue", strokeWeight:2, strokeOpacity:0.2});             //创建圆
              map.addOverlay(marker);             //增加点
              map.addOverlay(circle);            //增加圆

        }
        //向地图添加控件
        function addMapControl(){
          var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
          scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
          map.addControl(scaleControl);
          var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
          map.addControl(navControl);
          var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
          map.addControl(overviewControl);
        }
        var map;
        initMap();


    }  
    window.onload = loadJScript;  //异步加载地图