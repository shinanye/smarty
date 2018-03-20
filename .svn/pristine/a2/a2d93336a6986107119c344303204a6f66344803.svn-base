<?php
/* Smarty version 3.1.30, created on 2018-03-14 13:55:07
  from "D:\WWW\mbkj\app\admin\view\serve\serve.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8b93bf21c43_26529999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e4f5decc2eaa8326fe8e35da339f30a255b130' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\serve\\serve.html',
      1 => 1521006905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa8b93bf21c43_26529999 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        table img{
            display: inline-block;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:app/admin/view/public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-xs-9 col-md-10">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">服务内容管理</a></li>
    </ol>
    <form  action="http://localhost/mbkj/admin.php?c=serve&a=update" class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-md-2 control-label">服务内容</label>
            <div class="col-md-8">
                <!-- 加载编辑器的容器 -->
                <?php echo '<script'; ?>
 id="container" name="content" type="text/plain">
                    <?php echo $_smarty_tpl->tpl_vars['serve']->value["content"];?>

                <?php echo '</script'; ?>
>
                <!-- 配置文件 -->
                <?php echo '<script'; ?>
 type="text/javascript" src="libs/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
                <!-- 编辑器源码文件 -->
                <?php echo '<script'; ?>
 type="text/javascript" src="libs/ueditor/ueditor.all.js"><?php echo '</script'; ?>
>
                <!-- 实例化编辑器 -->
                <?php echo '<script'; ?>
 type="text/javascript">
                    var ue = UE.getEditor('container');
                <?php echo '</script'; ?>
>
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
<?php echo '</script'; ?>
>
</html>
<?php }
}
