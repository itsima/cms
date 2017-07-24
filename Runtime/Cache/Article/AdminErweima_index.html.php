<?php if (!defined('THINK_PATH')) exit();?><div class="panel dux-box">
    <div class="table-tools clearfix ">
        <div class="float-left">
            <form method="post" action="<?php echo U();?>">
                <div class="form-inline">
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" id="keyword" name="keyword" size="20" value="<?php echo $pageMaps["keyword"];?>" placeholder="关键词">
                        </div>
                    </div>
                    <div class="form-button">
                        <button class="button" type="submit">搜索</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="float-right">
            <form method="post" action="<?php echo U();?>">
                <div class="form-inline">
                    <div class="form-group">
                        <div class="field">
                            <select class="input" name="class_id" id="class_id">
                                <option value="0">选择栏目</option>
                                <?php foreach ($categoryList as $vo) {?>
                                <option value="<?php echo $vo["class_id"];?>"
                                <?php if ($pageMaps['class_id'] == $vo['class_id']){ ?>
                                selected="selected"
                                <?php } ?>
                                <?php if ($vo['type'] == 0 || $vo['app'] != MODULE_NAME){ ?>
                                style="background-color:#CCC" disabled="disabled"
                                <?php } ?>
                                ><?php echo $vo["cname"];?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <select class="input" name="status">
                                <option value="0">选择状态</option>
                                <option value="1"
                                <?php if ($pageMaps['status'] == 1){ ?>
                                selected="selected"
                                <?php } ?>
                                >发布</option>
                                <option value="2"
                                <?php if ($pageMaps['status'] == 2){ ?>
                                selected="selected"
                                <?php } ?>
                                >未发布</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-button">
                        <button class="button" type="submit">筛选</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
            <tr>
                <th width="60">选择</th>
                <th width="100">编号</th>
                <th width="*">标题</th>
                <th width="*">栏目</th>
                <th width="*">下载</th>
                <th width="160">更新时间</th>
                <!--<th width="100">操作</th>-->
            </tr>
            <?php foreach ($list as $vo) {?>
            <tr>
                <td>
                    <input type="checkbox" name="id[]" value="<?php echo $vo["content_id"];?>" />
                </td>
                <td><?php echo $vo["content_id"];?></td>
                <td><a href="<?php echo $vo["aurl"];?>" target="_blank"><?php echo $vo["title"];?></a></td>
                <td><a href="<?php echo $vo["curl"];?>" target="_blank"><?php echo $vo["class_name"];?></a></td>
                <td><a href="<?php echo $vo["img"];?>" target="_blank">二维码下载</a></td>
                <td><?php echo date('Y-m-d H:i:s',$vo['time']);?></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="panel-foot table-foot clearfix">
      
        <div class="float-right">
            <?php echo $page;?>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
    Do.ready('base',function() {
        //移动操作
        $('#selectAction').change(function() {
            var type = $(this).val();
            if(type == 3){
                $(this).after($('#class_id').clone());
            }else{
                $(this).nextAll('select').remove();
            }
        });
        //表格处理
        $('#table').duxTable({
            actionUrl : "<?php echo U('batchAction');?>",
            deleteUrl: "<?php echo U('del');?>",
            actionParameter : function(){
                return {'class_id' : $('#selectAction').next('#class_id').val()};
            }
        });
    });
</script>