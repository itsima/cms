<?php if (!defined('THINK_PATH')) exit();?><form method="post">
    <div class="panel dux-box">
        <div class="table-responsive">
            <table id="table" class="table table-hover ">
                <tbody>
                    <tr>
                        <th width="100">编号</th>
                        <th width="*">名称</th>
                        <th width="*">类型</th>
                        <th width="*">排序</th>
                        <th width="100">操作</th>
                    </tr>
                    <?php foreach ($list as $vo) {?>
                    <tr>
                        <td><?php echo $vo["class_id"];?></td>
                        <td><a href="<?php echo $vo["curl"];?>" target="_blank"><?php echo $vo["cname"];?></a></td>
                        <td><?php echo $vo["model_name"];?></td>
                        <td><?php echo $vo["sequence"];?></td>
                        <td>
                            <a class="button bg-blue button-small icon-pencil" href="<?php echo U($vo['app'].'/AdminCategory/edit',array('class_id'=>$vo['class_id']));?>" title="修改"></a>
                            <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" url="<?php echo U($vo['app'].'/AdminCategory/del');?>" data="<?php echo $vo["class_id"];?>" title="删除"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
       $('#table').duxTable({});
    });
</script>