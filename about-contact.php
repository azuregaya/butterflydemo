
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>蝶舞----随时随地管账、管货、管生产，尽享行云流水畅快管理；心情，如蝶一般随之飞扬</title>
<link rel="stylesheet" href="style/base.css" />
<link rel="stylesheet" href="style/sp.css" />
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
<body>
    <?php
        include 'section/header.html';//加入头部内容
    ?>

    
    <div class="g-bd">
        <div class="inner">
            <div class="m-pagename">
                <h2>联系蝶舞</h2>
                <p>
                    <a href="#">首页</a>
                    &gt;
                    <a href="#">联系我们</a>
                </p>
            </div>
            <div class="m-main clearfix">
                <div class="m-sidemenu">
                    <?php
                        include 'section/side-about.html';//加入左侧内容
                    ?>
                    
                    <div class="sidebox grey">
                        <h4>联系蝶舞</h4>
                        <ul class="contact">
                            <li><span class="t"></span>0571-87758515</li>
                            <li><span class="m"></span>hzdwrj@deefly.cn</li>
                        </ul>
                    </div>
                </div>

                <div class="m-mb">
                    <div id="dituContent" style="height:200px;margin:0 0 30px 0;border:#ccc solid 1px;" ></div>
                    <div class="m-article">
                        <h2>联系蝶舞</h2>
                        <ul class="info">
                            <li>公司地址：杭州市西湖区萍水西街80号优盘时代中心4幢10层C座</li>
                            <li>公司电话：0571-87758515</li>
                            <li>公司传真：0571-87756703</li>
                            <li>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：hzdwrj@deefly.cn</li>
                            <li>公司网址：<a href="http://www.deefly.cn">www.deefly.cn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include 'section/footer.html';//加入页尾内容
        ?>
    </div>

<script src="javascript/header.js"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        //addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(120.10717,30.30681);//定义一个中心点坐标
        map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
                //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"蝶舞软件",content:"杭州市西湖区萍水西街80号优盘时代中心4幢10层C座",point:"120.10717|30.30681",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#008ecc",
                        backgroundColor:"#11aaee",
                        color:"#fff",
                        cursor:"pointer",
                        padding:"5px"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://map.baidu.com/image/us_cursor.gif", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</body>
</html>
