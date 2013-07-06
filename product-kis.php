
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>蝶舞----随时随地管账、管货、管生产，尽享行云流水畅快管理；心情，如蝶一般随之飞扬</title>
<link rel="stylesheet" href="style/base.css" />
<link rel="stylesheet" href="style/sp.css" />
<link rel="stylesheet" href="style/ip.css" />
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>
<body>
    
    <?php
        include 'section/header.html';//加入头部内容
    ?>

    <div class="g-bd">
        <div class="inner">
            <div class="m-pagename">
                <h2>产品</h2>
                <p>
                    <a href="#">首页</a>
                    &gt;
                    <a href="#">产品</a>
                </p>
            </div>
            <div class="m-main clearfix">
                <div class="m-sidemenu">
                    <?php
                        include 'section/side-product.html';//加入头部内容
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
                    <div class="m-prointro clearfix">
                        <div class="pic"><img src="pictures/jd-kis.jpg" /></div>
                        <div class="title">
                            <h2>金蝶KIS</h2>
                            <h4>面向小微型企业</h4>
                            <p>全面覆盖小型企业管理的五大关键环节：老板查询、财务管理、采购管理、销售管理、仓存管理。</p>
                        </div>
                    </div>

                    <div id="J_GoTab" class="m-tabops">
                        <div class="tabs clearfix">
                            <ul>
                                <li class="j-tab crt" tab="t1">产品简介&定位</li>
                                <li class="j-tab" tab="t2">产品特性</li>
                                <li class="j-tab" tab="t3">领域应用</li>
                                <li class="j-tab" tab="t4">客户案例</li>
                                <li class="j-tab" tab="t5">产品架构</li>
                            </ul>
                        </div>
                        <div class="contents">
                            <div id="t1" class="tab-item" >
                                <div class="m-tabinner">
                                    <h3>产品简介</h3>
                                    <p>企业在创造价值的动态过程中，从原料采购、生产运作、市场销售、售后服务等基本活
动，到计划、财务、人力资源、协同办公等支持系统，都会对各环节的分工和管理方法不断
进行总结提炼和持续改善，寻找解决问题的最佳方案，最大限度减少管理所占用的资源和降
低管理成本，以获得更高效率、更多效益和更强竞争力。
</p>
                                    <p>金蝶 KIS 旗舰版是金蝶公司为满足小型制造、商贸流通企业的业务需要，本着好用、
适用、用得起，适应企业未来创新发展的原则研发而成。系统集财务管理、供应链管理、生
产制造管理、HR、移动商务、B2C 电子商务、集成引擎及行业插件等业务管理组件为一体，
以成本管理为目标，计划与流程控制为主线，通过对成本目标及责任进行考核激励，推动管
理者应用 ERP 等先进的管理模式和工具，建立企业人、财、物、产、供、销科学完整的管理体系。
</p>
                                    <h3>产品定位</h3>
                                    <p>金蝶 KIS 旗舰版结合国外先进管理理论和数十万国内客户最佳应用实践，面向单个利
润中心的企业，包括单体企业或集团下属的利润中心子公司，提供了 13 种细分行业专业应用方案解决方案，包括：电子设备、电子元器件、仪器仪表、灯饰照明、五金行业、塑胶行业、汽摩零部件、通用专用设备、医疗器械、玩具行业、金属加工等。
</p>
                                </div>
                            </div>
                            <div id="t2" class="tab-item" style="display:none;">
                                <div class="m-tabinner">
                        
                                    
                                </div>
                            </div>
                            <div id="t3" class="tab-item" style="display:none;">
                                <div class="m-tabinner">
                                    
                                </div>
                            </div>
                            <div id="t4" class="tab-item" style="display:none;">
                                <div class="m-tabinner"></div>
                            </div>
                            <div id="t5" class="tab-item" style="display:none;">
                                <div class="m-tabinner">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include 'section/footer.html';//加入页尾内容
        ?>
    </div>

<script src="javascript/header.js"></script>
<script src="javascript/tabs.js"></script>
<script>
(function() {
    $('#J_GoTab').goTabs({
        'switchOps' : 'hover'
    });
})();
</script>
</body>
</html>
