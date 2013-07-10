
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
                <h2>解决方案</h2>
                <p>
                    <a href="#">首页</a>
                    &gt;
                    <a href="#">解决方案</a>
                </p>
            </div>
            <div class="m-main clearfix">
                <div class="m-sidemenu">
                    <?php
                        include 'section/side-category.html';//加入左侧内容
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
                    <div class="m-catslogo">
                        <h4>协同管理</h4>
                        <div class="icon icon-xt"></div>
                    </div>

                    <div id="J_GoTab" class="m-tabops">
                        <div class="tabs clearfix">
                            <ul>
                                <li class="j-tab crt" tab="t1">方案概述</li>
                                <li class="j-tab" tab="t2">典型应用</li>
                            </ul>
                        </div>
                        <div class="contents">
                            <div id="t1" class="tab-item" >
                                <div class="m-tabinner">
                                    <h3>构建高效执行，助力战略落地</h3>
                                    <p>
                                        协同管理软件作为组织的运营管理和工作管理平台，对于提升组织的经营绩效、加快自主创新、增强组织核心竞争力发挥着重要作用，帮助组织从机会驱动、业务驱动，转向管理驱动，创新驱动。 金蝶协同认为，高效的战略执行力体系，要以文化为核心，建立协同业务模式，并着重构建六个方面的能力，包含领导力、创新力、凝聚力、执行力、可视力、整合力，我们称之为“协同六力模型”。
                                    </p>
                                </div>
                            </div>
                            <div id="t2" class="tab-item" style="display:none;">
                                <div class="m-tabinner">
                                    <ul class="grid grid-1 grid-4 clearfix">
                                        <li>
                                            <h4>信息门户——<br>文化传播、业务协同</h4>
                                            <p>金蝶协调平台信息门户，是企业信息化的第一入口，并能形成企业信息化应用的高度整合，满足客户信息获取和协同商务的管理需求，提升企业竞争力！</p>
                                        </li>
                                        <li>
                                            <h4>流程管理——<br>制度落地、规范运营</h4>
                                            <p>解决业务及管理中的衔接问题，培养企业习惯，形成管理优化链，提升组织应变能力，构建客户导向的高效运营体系，帮助创造客户价值。
                                            </p>
                                        </li>
                                        <li>
                                            <h4>知识管理——<br>智慧共享、价值创新</h4>
                                            <p>通过人与技术的充分结合，并在分享的文化下，将组织内外部的知识进行系统的沉淀、共享、学习、应用和创新，打造智慧组织，快速提升组织软实力。</a>
                                            </p>
                                        </li>
                                        <li>
                                            <h4>移动应用——<br>移动云端、决策千里</h4>
                                            <p>整合了3G移动应用，满足基于iphone、android、iPad等智能终端的协同移动应用，减少了员工对办公室的高度依赖，实现了零距离零空间的信息交流和办公。
                                            </p>
                                        </li>
                                        <li>
                                            <h4>沟通社区——<br>敏捷组织、以人为本</h4>
                                            <p>以人为本，通过微博、论坛、视频系统等多种工具建立开放社区，形成多元文化氛围，增强员工对企业的认同感、责任感和幸福感，同时提升能力，以促员工与企业共同发展进步。
                                            </p>
                                        </li>
                                        <li>
                                            <h4>业务协作——<br>精细管理、协作共赢</h4>
                                            <p>以项目为载体进行精细管理，在进程中合理配置资源，完善团队之间的对接协作能力，形成高度有效的执行力，全方位合作，实现多方共赢。
                                            </p>
                                        </li>
                                    </ul>
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
