<?php
/* Smarty version 3.1.30, created on 2018-03-14 14:57:03
  from "D:\WWW\mbkj\app\admin\view\case\case_in_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8c7bfdbc7e0_19510876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b70a88ae00d643bd8a75456083daf186f06be4c' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\case\\case_in_add.html',
      1 => 1520925119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa8c7bfdbc7e0_19510876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mbkj</title>
    <link href="static/js/node_modules/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/public.css">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:app/admin/view/public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-xs-9 col-md-10">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">案例信息管理</a></li>
        <!--<li class="active">产品列表</li>-->
    </ol>
    <form  action="http://localhost/mbkj/admin.php?c=case&a=in_insert" class="form-horizontal" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000000"/>
        <div class="form-group">
            <label class="col-md-2 control-label">案例分类</label>
            <div class="col-md-6">
                <select class="form-control" name="select">
                    <option disabled="disabled" selected>请选择要添加的案例分类</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['case_name']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value["colunm"];?>
</option>
                    <?php
}
} else {
?>

                    <option>不存在案例分类</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">案例名称</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="title" placeholder="可以为空">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">案例内容</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="content">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">案例图片</label>
            <div class="col-md-6">
                <input type="file"  name="coverimg">
                <img id="cover" src="" style="height: 50px;width: 50px;">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>提交</button>
            </div>
        </div>
    </form>
</div>
<div class="clear"></div>
</body>
<?php echo '<script'; ?>
 src="static/js/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/node_modules/bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $().ready(function(){
        var hei=$(window).height();
        $(".sidebar").css("height",hei-60+"px");
    });
    $("input[type='file']").change(function(){
        var imgFile=this.files.item(0);
        var _url=window.URL.createObjectURL(imgFile);
        $("#cover").attr("src",_url);
//        console.log($(this).val());
    })
<?php echo '</script'; ?>
>
</html>

<?php }
}
