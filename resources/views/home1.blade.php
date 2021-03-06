<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Amaze UI Admin index Examples</title>
        <meta name="description" content="这是一个 index 页面">
        <meta name="keywords" content="index">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="assets/i/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
        <meta name="apple-mobile-web-app-title" content="Amaze UI" />
        <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
        <link rel="stylesheet" href="assets/css/admin.css">
        <script src="js/jquery.min.js"></script>        
        <script src="assets/js/app.js"></script>


    </head>
    <body>
    <!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->

        <style>
            .page-tabs-content{float:left;}
            .page-tabs a.active {
                background: #ff6c60 none repeat scroll 0 0;
                color: #fff;
            }

        </style>




    </head>

<body>
    <header class="am-topbar admin-header">
        <div class="am-topbar-brand"><img src="assets/i/logo.png"></div>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

                <li class="am-dropdown tognzhi" data-am-dropdown>
                    <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理<span class="am-badge am-badge-danger am-round">6</span></button>
                    <ul class="am-dropdown-content">



                        <li class="am-dropdown-header">所有消息都在这里</li>



                        <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
                        <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
                        <li><a href="#">未处理汇款</a></li>
                        <li><a href="#">未发放提现</a></li>
                        <li><a href="#">未发货订单</a></li>
                        <li><a href="#">低库存产品</a></li>
                        <li><a href="#">信息反馈</a></li>



                    </ul>
                </li>

<!--                <li class="kuanjie">

                    <a href="#" class="J_menuItem">会员管理</a>   
                    <a class="J_menuItem" href="http://www.baidu.com" >商品列表</a>
                    <a href="#">奖金管理</a> 
                    <a href="#">订单管理</a>   
                    <a href="#">产品管理</a> 
                    <a href="#">个人中心</a> 
                    <a href="#">系统设置</a>
                </li>-->

                <li class="soso">

                    <p>   

                        <select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
                            <option value="b">全部</option>
                            <option value="o">产品</option>
                            <option value="o">会员</option>

                        </select>

                    </p>

                    <p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
                    <p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
                </li>

                <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
            </ul>
        </div>
    </header>



    <div class="am-cf admin-main"> 

        <div class="nav-navicon admin-main admin-sidebar">


            <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：清风抚雪</div>
            <div class="sideMenu">
                <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
                <ul>
                    <li><a class="J_menuItem" href="http://www.hao123.com" >商品列表</a></li>
                    <li class="func" dataType='html' dataLink='http://www.baidu.com' iconImg='images/msn.gif'>添加新商品</li>
                    <li>商品分类</li>
                    <li>用户评论</li>
                    <li>商品回收站</li>
                    <li>库存管理 </li>
                </ul>
                <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
                <ul>
                    <li>订单列表</li>
                    <li>合并订单</li>
                    <li>订单打印</li>
                    <li>添加订单</li>
                    <li>发货单列表</li>
                    <li>换货单列表</li>
                </ul>

                <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
                <ul>
                    <li>站内消息 /留言 </li>
                    <li>短信</li>
                    <li>邮件</li>
                    <li>微信</li>
                    <li>客服</li>
                </ul>
                <h3 class="am-icon-users"><em></em> <a href="#">用户管理</a></h3>
                <ul>
                    <li><a class="J_menuItem" href="/admin/user/index" >会员列表</a></li>
                    <li>未激活会员</li>
                    <li>权限</li>
                    <li>角色</li>
                    <li>推荐列表</li>
                </ul>
                <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
                <ul>
                    <li>菜单管理</li>
                    <li>数据备份</li>
                    <li>邮件/短信管理</li>
                    <li>上传/下载</li>
                    <li>权限</li>
                    <li>网站设置</li>
                    <li>第三方支付</li>
                    <li>提现 /转账 出入账汇率</li>
                    <li>平台设置</li>
                    <li>声音文件</li>
                </ul>
            </div>
            <!-- sideMenu End --> 

            <script type="text/javascript">
                jQuery(".sideMenu").slide({
                    titCell: "h3", //鼠标触发对象
                    targetCell: "ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
                    effect: "slideDown", //targetCell下拉效果
                    delayTime: 300, //效果时间
                    triggerTime: 150, //鼠标延迟触发时间（默认150）
                    defaultPlay: true, //默认是否执行效果（默认true）
                    returnDefault: true //鼠标从.sideMen移走后返回默认状态（默认false）
                });
            </script> 



        </div>


        <div class="row content-tabs daohang">
            <span class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </span>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="am-btn am-btn-default am-radius am-btn-xs active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>



        </div>
        <div class="row J_mainContent admin" >	
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="/admin/index" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>






        <!--[if lt IE 9]>
        <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
        <script src="assets/js/polyfill/rem.min.js"></script>
        <script src="assets/js/polyfill/respond.min.js"></script>
        <script src="assets/js/amazeui.legacy.js"></script>
        <![endif]--> 

        <!--[if (gte IE 9)|!(IE)]><!--> 
        <script src="assets/js/amazeui.min.js"></script>
        <!--<![endif]-->
        <script src="js/layer.min.js"></script>
        <script src="js/contabs.min.js"></script>


</body>
</html>