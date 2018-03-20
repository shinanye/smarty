<?php
/* Smarty version 3.1.30, created on 2018-03-14 17:12:46
  from "D:\WWW\mbkj\app\admin\view\product\product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8e78eb55da2_30680006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d8863e68c145cd367f3f4210f988aa95d647cd' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\product\\product.html',
      1 => 1521018762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa8e78eb55da2_30680006 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">产品管理</a></li>
        <li class="active">产品列表</li>
    </ol>
    <div class="col-lg-2">
        <a href="http://localhost/mbkj/admin.php?c=product&a=add"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>添加产品</button></a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>排序</th>
            <th>产品标题</th>
            <th>上传时间</th>
            <th>封面图</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sqlArr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value["time"];?>
</td>
                <td><img src='<?php echo $_smarty_tpl->tpl_vars['item']->value["coverimg"];?>
' alt=""></td>
                <td><a href='http://localhost/mbkj/admin.php?c=product&a=change&Id=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
' class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a><a href='http://localhost/mbkj/admin.php?c=product&a=delete&Id=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
' class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
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
    var doc=document.getElementsByClassName("product")[0];
    doc.setAttribute("style","background-color:black");
    $().ready(function(){
        var hei=$(window).height();
        $(".sidebar").css("height",hei-60+"px");
    });
//    $(".ding").click(function(){
//        location.href='http://localhost/mbkj/admin.php?c=product&a=delete&Id=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
';
//    })
<?php echo '</script'; ?>
>
</html>
<?php }
}
