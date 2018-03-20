<?php
/* Smarty version 3.1.30, created on 2018-03-11 14:14:42
  from "D:\WWW\mbkj\app\admin\view\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa4c9521f16c4_16271839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ef048e077828a60df868edb3a39a674c730024' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\home\\home.html',
      1 => 1520748880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa4c9521f16c4_16271839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>luzan</title>
    <link href="static/js/node_modules/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/public.css">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:app/admin/view/public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-sm-9 col-md-10">
    <div class="page-header">
        <h2>欢迎使用<small>路赞后台管理系统</small></h2>
    </div>
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-tag"></span><a href="admin.php?c=Index">平台整理指标</a></li>
    </ol>
    <div class="panel loginCount">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-cloud"></span>
            <b class="dataTitle">
                <h5>今日登录用户数</h5>
                <p>250</p>
            </b>
        </div>
        <div class="panel-body">
            <span><a href="#">查看</a></span><span class="glyphicon glyphicon-circle-arrow-right rightClick"></span>
        </div>
    </div>
    <div class="panel articleCount">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th-list"></span>
            <b class="dataTitle">
                <h5>文章数量</h5>
                <p>17</p>
            </b>
        </div>
        <div class="panel-body">
            <span><a href="admin.php?c=Content">查看</a></span><span class="glyphicon glyphicon-circle-arrow-right rightClick"></span>
        </div>
    </div>
    <div class="panel maxRead">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-stats"></span>
            <b class="dataTitle">
                <h5>文章最大阅读数</h5>
                <p>140</p>
            </b>
        </div>
        <div class="panel-body">
            <span><a href="admin.php?c=Content">查看</a></span><span class="glyphicon glyphicon-circle-arrow-right rightClick"></span>
        </div>
    </div>
    <div class="panel recommendCount">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-filter"></span>
            <b class="dataTitle">
                <h5>推荐位数</h5>
                <p>4</p>
            </b>
        </div>
        <div class="panel-body">
            <span><a href="admin.php?c=Position">查看</a></span><span class="glyphicon glyphicon-circle-arrow-right rightClick"></span>
        </div>
    </div>
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
