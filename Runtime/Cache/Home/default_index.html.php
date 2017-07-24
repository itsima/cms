<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0001, minimum-scale=1.0001, maximum-scale=1.0001, user-scalable=no">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>上海凯贤流体科技有限公司</title>
<link href="/Themes/default/css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bx_header">
	<div class="bx_left">
		<a href="javascript:history.go(-1)"><img src="/Themes/default/images/fanhui.png" /></a>
    </div>
    <div class="bx_right">
    	<a href="#"><img src="/Themes/default/images/fanhui_right.png" /></a>
    </div>
    <img class="bx_logo" src="/Themes/default/images/bx_logo.png" />
</div>
<div class="bx_banner">
	<img src="/Themes/default/images/bx_banner.jpg" />
</div>
<div class="bx_xx">
	<img class="xx_i" src="/Themes/default/images/phone.png" />
    <form action="/?m=home&c=index&a=add" enctype="multipart/form-data" method="post" id="yan">

  <?php if(!empty($list)) {?>
        <div class="bx_xxa">
            <img src="/Themes/default/images/xlh.png" />
            <p>项&nbsp;目&nbsp;编&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="num" id="textfield" placeholder="项目序列号" value="<?php echo $list["num"];?>"/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/xh.png" />
            <p>设&nbsp;备&nbsp;型&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="xinghao" id="textfield" placeholder="设备型号" value="<?php echo $list["xinghao"];?>"/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/bh.png" />
            <p>序&nbsp;&nbsp;&nbsp;列&nbsp;&nbsp;&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="xuliehao" id="textfield" placeholder="序列号" value="<?php echo $list["xuliehao"];?>"/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/dqsj.png" />
            <p>质保到期日</p>
            <div class="xx_r">
                <input type="text" name="endtime" id="textfield" placeholder="质保到期日" value="<?php echo date('y-m-d',$list['endtime']) ?>" />
            </div>
        </div>
        <input type="hidden" name="aid" value="<?php echo $list["content_id"];?>">
        <input type="hidden" name="type" value="1">
        <?php }else{ ?>

        <div class="bx_xxa">
            <img src="/Themes/default/images/xlh.png" />
            <p>项&nbsp;目&nbsp;编&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="num" id="textfield" placeholder="项目序列号" value=""/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/xh.png" />
            <p>设&nbsp;备&nbsp;型&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="xinghao" id="textfield" placeholder="设备型号" value=""/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/bh.png" />
            <p>序&nbsp;&nbsp;&nbsp;列&nbsp;&nbsp;&nbsp;号</p>
            <div class="xx_r">
                <input type="text" name="xuliehao" id="textfield" placeholder="序列号" value=""/>
            </div>
        </div>
        <div class="bx_xxa">
            <img src="/Themes/default/images/dqsj.png" />
            <p>质保到期日</p>
            <div class="xx_r">
                <input type="text" name="endtime" id="textfield" placeholder="质保到期日" value="" />
            </div>
        </div>
        <input type="hidden" name="type" value="0">
        <?php } ?>
  <div class="bx_sc">
        <div class="tabPanel">
		<ul>
			<li class="hit">图片+</li>
			<li class="li_ce">视频+</li>
            <li style="float:right;">语音+</li>
		</ul>
		<div class="panes">
			<div class="pane" style="display:block;">
            	<div class="bx_scsp">

                    <div class="uploader">
                        <input type="file" name="myimg" class="input_add">
                    </div>

                </div>
            </div>
			<div class="pane">
            	<div class="bx_scsp">
                	<div class="uploader">
                        <input type="file" name="myvideo" class="input_add">
                    </div>
                </div>
            </div>
            <div class="pane">
            	<div class="bx_scsp">
                	<div class="uploader">
                        <input type="file" name="mysound" class="input_add">
                    </div>
                </div>
            </div>
		</div>
    </div>
  </div>
  <p class="sp_warn">（本网站已加密，绝对保障个人隐私）</p>
    <div class="bx_name">
   	  <p>联系人：</p>
      <div class="na_left">
        	<input type="text" name="name" id="textfield2" placeholder="请输入您的姓名" datatype="s4-8" errormsg="请填写正确姓名" />
            <span>*</span>

      </div>
    </div>
    <div class="bx_name">
   	  <p>联系电话：</p>
      <div class="na_left">
        	<input type="text" name="tel" id="textfield2" placeholder="请填写联系电话" datatype="m" errormsg="请填写正确联系电话"/>
            <span>*</span>
      </div>
    </div>
  <div class="bx_name">
    	<p>邮箱：</p>
        <div class="na_left">
        	<input type="text" name="email" id="textfield2" placeholder="请输入邮箱" datatype="e" errormsg="请填写正确邮箱"/>
            <span>*</span>
      </div>
    </div>
    <div class="bx_name">
   	  <p>微信号：</p>
      <div class="na_left">
        	<input type="text" name="weixin" id="textfield2" placeholder="请输入微信号 " />
            <span>*</span>
      </div>
    </div>
    <div class="bx_name">
   	  <p>报修类型：</p>
      <div class="na_left">
        	<select name="staue">
                <?php foreach($bxtype as $list) {?>
            	<option value="<?php echo $list["id"];?>"><?php echo $list["name"];?></option>
               <?php } ?>
            </select>
        </div>
    </div>
    <div class="bx_name">
    	<p>问题描述：</p>
        <div class="na_left">
       	  <textarea name="content" id="textarea" cols="45" rows="5" placeholder="根据实际情况填写 "></textarea>
        </div>
    </div>
    <div class="bx_btn">
   	  <input class="btn_i" type="submit"  id="button" value="" />
      <input class="btn_a" type="reset"  id="button" value="" />
    </div>
    </form>
</div>
<div class="nav_a">
	<ul>
    	<li>
        	<a href="#">
            	<img src="/Themes/default/images/home.png" />
                <p>凯贤首页</p>
            </a>
        </li>
        <li>
        	<a href="#">
            	<img style="width:35px;" src="/Themes/default/images/about_us.png" />
                <p>关于我们</p>
            </a>
        </li>
        <li>
        	<a href="#">
            	<img style="width:27px;" src="/Themes/default/images/lx_fs.png" />
                <p>联系方式</p>
            </a>
        </li>
        <li class="li_nav">
        	<a href="#">
            	<img style="width:26px;" src="/Themes/default/images/gzh.png" />
                <p>公众号</p>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript" src="/Themes/default/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Themes/default/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript">
$(function(){   
    $('.tabPanel ul li').click(function(){
        $(this).addClass('hit').siblings().removeClass('hit');
        $('.panes>div:eq('+$(this).index()+')').show().siblings().hide();   
    })
})
$(function(){

    $("input[type=file]").change(function(){
        $(this).parents(".uploader").find(".filename").val($(this).val());
    });
    
    $("input[type=file]").each(function(){
        if($(this).val()==""){
            $(this).parents(".uploader").find(".filename").val("请选择文件...");
        }
    });
    
});
$(function(){
    $('#yan').Validform();
})
</script>
</body>
</html>