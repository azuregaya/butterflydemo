
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>蝶舞----随时随地管账、管货、管生产，尽享行云流水畅快管理；心情，如蝶一般随之飞扬</title>
<link rel="stylesheet" href="style/base.css" />
<link rel="stylesheet" href="style/fp.css" />
<link rel="icon" href="images/fav.ico" type="image/x-icon" />
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>
<body>
    <?php
        include 'section/header.html';//加入头部内容
    ?>
    
    <div id="J_SHolder" class="m-bgslider">
        <div class="sldier-wrap">
            <div class="slider slider-1">
                <div class="m-infobxo">
                    <div class="slogan">
                        <h2></h2>
                        <p>随时随地管账、管货、管生产，尽享行云流水畅快管理；心情，如蝶一般随之飞扬。</p>
                        <a class="btn" href="about-intro.php">了解蝶舞</a>
                    </div>
                </div>
                <div id="J_S2" class="bg bg-2"></div>
                <div id="J_S1" class="bg bg-1"></div>
            </div>
            <div class="slider slider-2" style="display:none;">
                <div class="m-infobxo">
                    <div class="product">
                        <h2></h2>
                        <p>
                            面向大型企业集团的金蝶EAS<br />
                            面向大中型企业的金蝶K/3 Cloud<br />
                            面向中小型企业的金蝶K/3 WISE<br />
                            面向小微型企业的金蝶KIS<br />
                            ——四大推荐产品，总有一款适合您。
                        </p>
                        <a class="btn" href="product.php">了解产品</a>
                    </div>
                </div>
                <div class="bg bg-2"></div>
                <div class="bg bg-1"></div>
            </div>
            <div class="slider slider-3" style="display:none;">
                <div class="m-infobxo">
                    <div class="education">
                        <h2></h2>
                        <h5>【报名中】“提升ERP运用价值”系列培训第二期：生产制造--生产计划</h5>
                        <p>培训讲师：樊社东、陈刚</p>
                        <a class="btn" href="#">查看详情</a>
                    </div>
                </div>
                <div class="bg bg-2"></div>
                <div class="bg bg-1"></div>
            </div>
            <div class="slider slider-4" style="display:none;">
                <div class="m-infobxo">
                    <div class="news">
                        <h2></h2>
                        <ul>
                            <li>
                                <a href="news-detail.php">商贸销售助手最新版本，全面支持商贸v4.1</a>
                                <span>2013年6月18日</span>
                            </li>
                            <li>
                                <a href="news-detail.php">商贸销售助手最新版本，全面支持商贸v4.1</a>
                                <span>2013年6月18日</span>
                            </li>
                            <li>
                                <a href="news-detail.php">商贸销售助手最新版本，全面支持商贸v4.1</a>
                                <span>2013年6月18日</span>
                            </li>
                            <li>
                                <a href="news-detail.php">商贸销售助手最新版本，全面支持商贸v4.1</a>
                                <span>2013年6月18日</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bg bg-2"></div>
                <div class="bg bg-1"></div>
            </div>
        </div>
        <div class="control">
            <ol class="j-control clearfix">
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
            </ol>
        </div>
    </div>

    
    <?php
        include 'section/footer.html';//加入页尾内容
    ?>

<script src="javascript/header.js"></script>
<script src="javascript/slider.js"></script>
<script>
(function(){

    var wh,
        ww,
        Xpoint,
        Ypoint,
        Xpercent,
        Ypercent,
        XIncrement,
        YIncrement,
        pos,
        f1 = 0.09,
        f2 = -0.07;

    function setHeight(){
        ww = $(window).width();
        wh = $(window).height();
        Xpoint = $(window).width()/2;
        Ypoint = $(window).height()/2;
        $('#J_SHolder').height(wh-128);
        $('#J_Footer').css({'left': (ww/2 - 480)});
    }

    function setControler(){
        var crt = $('#J_SHolder .j-crt').text()-1;
            crt = crt < 0 ? 0 : crt;
        var positionX = $('.m-infobxo').eq(crt).position().left + 20,
            positionY = $('.m-infobxo').eq(crt).position().top + 390;

        $('#J_SHolder .control').css({'top':positionY,'left':positionX});
    }

    $(window).resize(function(){
        setHeight();
        setControler();
    });

    setHeight();
    setControler();
    
    
    $('#J_SHolder').goSlider({
        'animation' : 'fade',
        'sliderWrap' : '.sldier-wrap',
        'sliderItem' : '.slider'
    });

    $(document).mousemove(function(e){
        
        Xpercent = (e.pageX - Xpoint)/ww;
        Ypercent = (e.pageY - Ypoint)/wh;
        XIncrement = Math.round(Xpercent*100);
        YIncrement = Math.round(Ypercent*100);

        pos1 = (50 + XIncrement*f1) + '% ' + (5 + YIncrement*f1) + '%';
        pos2 = (50 + XIncrement*f2) + '% ' + (5 + YIncrement*f2) + '%';
        
        $('#J_SHolder .bg-1').css('background-position',pos1);
        $('#J_SHolder .bg-2').css('background-position',pos2);
    });
    
})()
</script>
</body>
</html>
