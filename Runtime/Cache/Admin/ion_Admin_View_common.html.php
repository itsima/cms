<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>媒介匣--网站后台管理</title>
    <link rel="stylesheet" href="/Public/common/css/pintuer.css">
    <link rel="stylesheet" href="/Public/admin/css/admin.css">
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/common/js/pintuer.js"></script>
    <script src="/Public/common/js/respond.js"></script>
    <script src="/Public/admin/js/admin.js"></script>
    <script>
    var baseDir='/Public/js/';
    var rootUrl="/";
    var appUrl='/admin.php?s=/';
    var sessId='<?php echo session_id();?>';
    </script>
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/admin/js/admin.js"></script>
    <script src="/Public/js/do.js"></script>
    <script src="/Public/js/config.js"></script>
</head>
<body>
    <div class="dux-head clearfix">
        <div class="dux-logo">
            <a href="" target="_blank">
                <img src="/Public/admin/images/logo.png" alt="媒介匣后台管理系统" />
            </a>
            <button class="button icon-navicon admin-nav-btn" data-target=".admin-nav"></button>
            <button class="button icon-navicon icon-ellipsis-v admin-menu-btn" data-target=".admin-menu"></button>
        </div>
        <div class="dux-nav">
            <ul class="nav  nav-navicon nav-inline admin-nav">
               <?php foreach ( $menuList['list'] as $vo ) {?>
               <?php if ($vo['cur']){ ?>
               <li class="active">
               <?php }else{ ?>
               <li>
               <?php } ?>
               <?php if ($vo['url']){ ?>
               <a href="<?php echo $vo["url"];?>" class="icon-<?php echo $vo["icon"];?>"> <?php echo $vo["name"];?></a></li>
               <?php } ?>
               
               <?php } ?>
            </ul>
            <ul class="nav  nav-navicon nav-menu nav-inline admin-nav nav-tool">
               <li> <a href="/" target="_blank" class="icon-home"></a></li>
                <li> <a href="<?php echo U('Admin/AdminUser/edit',array('user_id'=>$loginUserInfo['user_id']));?>" class="icon-user"></a></li>
                <li> <a href="<?php echo U('Admin/Login/logout');?>" class="dux-logout bg-red icon-power-off"></a></li>
            </ul>
        </div>
    </div>
    <div class="dux-sidebar">
        <ul class="nav  nav-navicon admin-menu">
            <div class="nav-head"><?php echo $menuList["curList"]["name"];?></div>
               <?php foreach ( $menuList['curList']['menu'] as $vo ) {?>
               <?php if ($vo['cur']){ ?>
               <li class="active">
               <?php }else{ ?>
               <li>
               <?php } ?>
               <a href="<?php echo $vo["url"];?>" class="icon-<?php echo $vo["icon"];?>"> <?php echo $vo["name"];?></a></li>
               <?php } ?>
        </ul>
    </div>
    <div class="dux-bread">
        <ul class="bread">
            <li><a href="<?php echo U('Admin/Index/index');?>" class="icon-home"> 开始</a>
            </li>
            <?php foreach ( $breadCrumb as $name => $url ) {?>
            <li><a href="<?php echo $url;?>"><?php echo $name;?></a></li>
            <?php } ?>
        </ul>
    </div>
    
    <div class="dux-admin">
        
        <div class="dux-tools">
            <div class="bread-head"><?php echo $infoModule["info"]["name"];?>
                <span class="small"><?php echo $infoModule["info"]["description"];?></span>
            </div>
            <?php if ($infoModule['menu']){ ?>
            <br>
            <div class="tools-function clearfix">
                <div class="float-left">
                   <?php foreach ( $infoModule['menu'] as $vo ) {?>
                   <?php if (($vo['url'] == $self) || ($vo['url'] == $url) || (stristr($vo['url'],U()))){ ?>
                    <a class="button button-small bg-main icon-<?php echo $vo["icon"];?>" href="<?php echo $vo["url"];?>">
                    <?php }else{ ?>
                    <a class="button button-small bg-back icon-<?php echo $vo["icon"];?>" href="<?php echo $vo["url"];?>">
                    <?php } ?>
                     <?php echo $vo["name"];?></a>
                    <?php } ?>
                </div>
                <?php if ($infoModule['add']){ ?>
                <div class="button-group float-right">
                    <a class="button button-small bg-dot icon-plus dropdown-toggle"> 添加 <span class="downward"></span></a> 
                    <ul class="drop-menu pull-right">
                       <?php foreach ($infoModule['add'] as $vo ) {?>
                        <li><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
        <br>
        <!--common-->
    </div>
</body>
</html>