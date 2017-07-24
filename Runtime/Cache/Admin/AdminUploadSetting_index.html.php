<?php if (!defined('THINK_PATH')) exit();?><form method="post">
    <div class="panel dux-box">
        <div class="table-responsive">
            <table id="table" class="table table-hover ">
                <tbody>
                    <tr>
                        <th width="100">编号</th>
                        <th width="*">名称</th>
                        <th width="100">操作</th>
                    </tr>
                    <?php foreach ($list as $vo) {?>
                    <tr>
                        <td><?php echo $vo["id"];?></td>
                        <td><?php echo $vo["name"];?></td>
                        <td>
                            <a class="button bg-blue button-small icon-pencil" href="<?php echo U('edit',array('id'=>$vo['id']));?>" title="修改"></a>
                            <a class="button bg-red button-small icon-trash-o js-del" href="javascript:;" data="<?php echo $vo["id"];?>" title="删除"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="panel-foot table-foot clearfix"><?php echo $page;?></div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#table').duxTable({
            deleteUrl: "<?php echo U('del');?>"
        });
    });
</script>