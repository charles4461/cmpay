<?php /*a:2:{s:73:"F:\phpStudy\PHPTutorial\WWW\cmpay\application\index\view\index\index.html";i:1552315554;s:74:"F:\phpStudy\PHPTutorial\WWW\cmpay\application\index\view\index-layout.html";i:1552315554;}*/ ?>
<!DOCTYPE html>
<!--
  ~ +----------------------------------------------------------------------
  ~  | 草帽支付系统 [ WE CAN DO IT JUST THINK ]
  ~ +----------------------------------------------------------------------
  ~  | Copyright (c) 2019 知行信息科技. All rights reserved.
  ~ +----------------------------------------------------------------------
  ~  | Licensed ( https://www.apache.org/licenses/LICENSE-2.0 )
  ~ +----------------------------------------------------------------------
  ~  | Author: Brian Waring <BrianWaring98@gmail.com>
  ~ +----------------------------------------------------------------------
  -->

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes">
    <link href="/favicon.ico" rel="shortcut icon" />
    <title><?php echo htmlentities((isset($site['seo_title']) && ($site['seo_title'] !== '')?$site['seo_title']:"聚合支付")); ?> - 支付技术服务商，让支付简单、专业、快捷！</title>
    <link rel="stylesheet" href="/static/index/css/qietu.css">
    <link rel="stylesheet" href="/static/index/css/iconfont.css">
    <link rel="stylesheet" href="/static/index/css/animate.min.css">
    
    <!-- css for this page -->
    <!-- End css for this page -->
    
    <link rel="stylesheet" href="/static/index/css/style.css">
    <link rel="stylesheet" href="/static/index/css/responsive.css">

</head>
<body>
<!--头部-->
<div class="header bj-3d7bf8">
    <div class="wrapper">
        <div class="logo">
            <a href="/">
                <img src="/static/common/logo.png" />
            </a>
        </div>
        <div class="nav-wrap">
            <div class="nav">
                <ul>
                    <li class="home_index">
                        <strong>
                            <a href="/">
                                首页
                            </a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="#">
                                产品中心
                                <i class="iconfont icon-jiantou8">
                                </i>
                            </a>
                        </strong>
                        <dl>
                            <dd>
                                <a href="<?php echo url('index/Index/products'); ?>#pro1">
                                    聚合收款
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo url('index/Index/products'); ?>#pro4">
                                    二维码支付
                                </a>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>
                            <a href="#">
                                开发者中心
                                <i class="iconfont icon-jiantou8">
                                </i>
                            </a>
                        </strong>
                        <dl>
                            <dd>
                                <a href="<?php echo url('index/Index/demo'); ?>">
                                    DEMO体验
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo url('index/Index/introduce'); ?>">
                                    接入指南
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo url('index/Index/document'); ?>">
                                    开发文档
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo url('index/Index/sdk'); ?>">
                                    SDK下载
                                </a>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <strong>
                            <a href="<?php echo url('index/Index/about'); ?>">
                                关于我们
                            </a>
                        </strong>
                    </li>
                </ul>
            </div>
            <div class="btns">
                <ul>
                    <?php if(is_login()): ?>
                    <li class="">
                        <a href="<?php echo url('index/User/index'); ?>">
                            用户中心
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo url('index/Auth/logout'); ?>">
                            退出
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="">
                        <?php if(app('request')->action() == 'login'): ?>
                        <a href="<?php echo url('index/Auth/register'); ?>">
                            注册
                        </a>
                        <?php else: ?>
                        <a href="<?php echo url('index/Auth/login'); ?>">
                            登录
                        </a>
                        <?php endif; ?>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="gh">
            <a href="#">
            </a>
        </div>
    </div>
</div>
<!--内容-->

<!--底部-->
<div class="footer">
    <div class="wrapper">
        <dl class="s">
            <dt>
                联系我们
            </dt>
            <dd>
                <a href="">
                联系方式
                <p> QQ:702154416</p>
                <p> Email:me@iredcap.cn</p>
                </a>
            </dd>
            <dd>
                <img src="/static/common/logo.png" style="width: 120px" />
            </dd>
        </dl>
        <dl>
            <dt>
                产品项目
            </dt>
            <dd>
                <a href="<?php echo url('index/index/products'); ?>#pro1">
                    聚合收款
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/products'); ?>#pro2">
                    商户系统
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/products'); ?>#pro3">
                    代付系统
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/products'); ?>#pro4">
                    二维码支付
                </a>
            </dd>
        </dl>
        <dl>
            <dt>
                关于公司
            </dt>
            <dd>
                <a href="<?php echo url('index/index/about'); ?>">
                    关于我们
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/partner'); ?>">
                    接口合作
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/partner'); ?>">
                    流量合作
                </a>
            </dd>
        </dl>
        <dl>
            <dt>
                开发者
            </dt>
            <dd>
                <a href="<?php echo url('index/index/demo'); ?>">
                    DEMO体验
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/introduce'); ?>">
                    接入指南
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/document'); ?>">
                    API开发文档
                </a>
            </dd>
            <dd>
                <a href="<?php echo url('index/index/sdk'); ?>">
                    SDK下载
                </a>
            </dd>
        </dl>
        <dl class="s">
            <dt>
                扫一扫
            </dt>
            <dd>
                <img src="/static/common/qr-pub.jpg" style="width: 109px;" />
            </dd>
        </dl>
    </div>
</div>
<div class="copyright">
    <div class="wrapper">
        <?php echo htmlentities((isset($site['app_copyright']) && ($site['app_copyright'] !== '')?$site['app_copyright']:"© 2018 CMPAY. ")); ?> <a href="https://www.iredcap.cn" style="color: #fff;" target="_blank">小红帽科技</a> · <?php echo htmlentities((isset($site['seo_title']) && ($site['seo_title'] !== '')?$site['seo_title']:"草帽聚合支付")); ?> · 桂ICP备180004251号
    </div>
</div>
<div class="sidebar">
    <ul>
        <!--<li><a href="#"><i class="iconfont icon-liaotian"></i></a></li>-->
        <li class="sidebar-scroll">
            <a href="#">
                <i class="iconfont icon-shang">
                </i>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript" src="/static/index/js/jquery-1.7.2.min.js">
</script>
<script type="text/javascript" src="/static/index/js/jquery.glide.js">
</script>
<script type="text/javascript" src="/static/index/js/wow.min.js">
</script>
<script type="text/javascript" src="/static/index/js/script.js">
</script>
<script src="/static/common/js/copyright.js"></script>
<!--Layui-->
<script type="text/javascript" src="/static/layui/layui.js">
</script>

<script type="text/javascript">
    $(function() {
        //$(".home_index").addClass("on");
        $('.sidebar-scroll').click(function() {
            $('html ,body').animate({
                scrollTop: 0
            }, 1000);
            return false
        });
        var glide = $('.list-wrper').glide({
            arrows: false
        }).data('api_glide');
        $(".hpart-prev").click(function() {
            glide.prev()
        });
        $(".hpart-next").click(function() {
            glide.next()
        })
    })
</script>

</body>

</html>