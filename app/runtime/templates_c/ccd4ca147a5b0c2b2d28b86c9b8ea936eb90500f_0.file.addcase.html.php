<?php
/* Smarty version 3.1.30, created on 2018-03-13 11:26:59
  from "D:\WWW\mbkj\app\admin\view\case\addcase.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa7450326c778_31483703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd4ca147a5b0c2b2d28b86c9b8ea936eb90500f' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\case\\addcase.html',
      1 => 1520911614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa7450326c778_31483703 (Smarty_Internal_Template $_smarty_tpl) {
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

<h1>add</h1>
<div class="col-xs-9 col-md-10">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">案例栏目管理</a></li>
        <!--<li class="active">产品列表</li>-->
    </ol>
    <form  action="http://localhost/mbkj/admin.php?c=case&a=insert" class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-md-2 control-label">案例名</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="title">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">案例介绍</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="content">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">状态</label>
            <div class="col-md-8">
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="Radios1" value="1" checked="">
                        开启
                    </label>
                    <label>
                        <input type="radio" name="status" id="Radios2" value="0">
                        关闭
                    </label>
                </div>
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

<?php echo '</script'; ?>
>
</html>

<?php }
}
