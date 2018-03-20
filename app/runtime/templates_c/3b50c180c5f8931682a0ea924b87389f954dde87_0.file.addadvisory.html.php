<?php
/* Smarty version 3.1.30, created on 2018-03-14 17:58:17
  from "D:\WWW\mbkj\app\admin\view\advisory\addadvisory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8f239d9fe21_61729629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b50c180c5f8931682a0ea924b87389f954dde87' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\advisory\\addadvisory.html',
      1 => 1521018860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa8f239d9fe21_61729629 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">资讯管理</a></li>
        <li class="active">资讯列表</li>
    </ol>
    <form  action="http://localhost/mbkj/admin.php?c=advisory&a=insert" class="form-horizontal" method="post"  enctype="multipart/form-data" >
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000000"/>
        <div class="form-group">
            <label class="col-md-2 control-label">资讯标题</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="title">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">资讯副标题</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="smallcontent">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">资讯封面图</label>
            <div class="col-md-8">
                <input type="file"  name="coverimg">
                <img id="cover" src="" style="height: 50px;width: 50px;">
                <div class="error"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">资讯介绍</label>
            <div class="col-md-8">
                <!-- 加载编辑器的容器 -->
                <?php echo '<script'; ?>
 id="container" name="content" type="text/plain">
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
    var doc=document.getElementsByClassName("advisory")[0];
    doc.setAttribute("style","background-color:black");
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
