<?php if (!defined('THINK_PATH')) exit();?><!--[if lte IE 8]>
<script src="/Public/js/chart/excanvas.compiled.js"></script>
<![endif]-->
<div class="line-big">
    <div class="xm12">
        <div class="alert alert-yellow"><strong>提示：</strong>尊敬的<?php echo $loginUserInfo["username"];?>(<?php echo $loginUserInfo["group_name"];?>)，欢迎您的使用，您的本次登录时间为 <?php echo date('Y-m-d H:i',$loginUserInfo["last_login_time"]);?>，登录IP为 <?php echo $loginUserInfo["last_login_ip"];?> </div>
    </div>
</div>
<div class="line-big">
    <div class="xm3">
        <div class="panel dux-box dux-dashboard">
            <div class="clearfix">
                <div class="media media-x ">
                    <div class="float-left">
                        <div class="txt dashboard-head radius-small bg-red  icon-dashboard"></div>
                    </div>
                    <div class="media-body text-center">
                        <h2><strong><?php echo D('DuxCms/Safe')->getCount(); ?>%</strong></h2>
                        安全检测
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="xm3">
        <div class="panel dux-box dux-dashboard">
            <div class="clearfix">
                <div class="media media-x ">
                    <div class="float-left">
                        <div class="txt dashboard-head radius-small bg-yellow icon-bar-chart-o"></div>
                    </div>
                    <div class="media-body text-center">
                        <h2><strong><?php echo D('DuxCms/TotalVisitor')->curNum(); ?></strong></h2>
                        今日网站访问
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="xm3">
        <div class="panel dux-box dux-dashboard">
            <div class="clearfix">
                <div class="media media-x ">
                    <div class="float-left">
                        <div class="txt dashboard-head radius-small bg-blue icon-paw"></div>
                    </div>
                    <div class="media-body text-center">
                        <h2><strong><?php echo D('DuxCms/TotalSpider')->curNum(); ?></strong></h2>
                        今日蜘蛛访问
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="xm3">
        <div class="panel dux-box dux-dashboard">
            <div class="clearfix">
                <div class="media media-x ">
                    <div class="float-left">
                        <div class="txt dashboard-head radius-small bg-green icon-puzzle-piece"></div>
                    </div>
                    <div class="media-body text-center">
                        <h2><strong><?php echo D('DuxCms/Fragment')->countList(); ?></strong></h2>
                        碎片使用数量
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="line-big">
    <div class="xm12">
        <div class="panel dux-box">
            <div class="panel-head">网站近期访问概况</div>
            <div class="panel-body">
                <div style="height:200px;">
                    <canvas id="chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script>
    Do.ready('base', function () {
        var data = <?php echo $chartArray;?>;
        $("#chart").duxChart({
            data: data
        });
        $('#checkAuthorize').click(function(){
            $.post('<?php echo U("DuxCms/AdminUpdate/Authorize");?>',{},function(data){
                if(data != ''){
                    $('#authorize').html(data);
                }else{
                    $('#authorize').html('授权服务器连接失败，请稍后再试！');
                }
            },'html');
        })
    });
</script>