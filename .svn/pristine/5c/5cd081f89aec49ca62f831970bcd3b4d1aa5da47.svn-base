<?php
/* Smarty version 3.1.30, created on 2018-03-12 12:31:36
  from "D:\WWW\mbkj\app\admin\view\product\changeproduct.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa602a8385e19_45080977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4b763d6a3bc99dc939bcdc06441a340ad715ab' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\product\\changeproduct.html',
      1 => 1520829088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa602a8385e19_45080977 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>change</h1>
<?php $_smarty_tpl->_subTemplateRender("file:app/admin/view/public/public.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-xs-9 col-md-10">
    <ol class="breadcrumb">
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">产品管理</a></li>
        <li class="active">产品列表</li>
    </ol>
    <form  action="http://localhost/mbkj/admin.php?c=product&a=cinsert" class="form-horizontal" method="post"  enctype="multipart/form-data" >
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000000"/>
        <div class="form-group">
            <label class="col-md-2 control-label">产品标题</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">产品副标题</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="smallcontent" value="<?php echo $_smarty_tpl->tpl_vars['smallcontent']->value;?>
">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">产品封面图</label>
            <div class="col-md-8">
                <input type="file"  name="coverimg">
                <input type="hidden" name="old_url" value="<?php echo $_smarty_tpl->tpl_vars['coverimg']->value;?>
">
                <input type="hidden" name="Id" value="<?php echo $_smarty_tpl->tpl_vars['Id']->value;?>
">
                <img id="cover" src="<?php echo $_smarty_tpl->tpl_vars['coverimg']->value;?>
" style="height: 50px;width: 50px;" >
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">产品介绍</label>
            <div class="col-md-8">
                <!-- 加载编辑器的容器 -->
                <?php echo '<script'; ?>
 id="container" name="content" type="text/plain">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

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
<!--<?php echo '<script'; ?>
 src="libs/validate/jquery.validate-1.13.1.js" ><?php echo '</script'; ?>
>-->
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
