<?php
/* Smarty version 3.1.30, created on 2018-03-14 17:14:23
  from "D:\WWW\mbkj\app\admin\view\case\case.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8e7ef9c9886_10029558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd932de3b7cd74fa7fca94558b5178968ee2f1e8' => 
    array (
      0 => 'D:\\WWW\\mbkj\\app\\admin\\view\\case\\case.html',
      1 => 1521018792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/admin/view/public/public.html' => 1,
  ),
),false)) {
function content_5aa8e7ef9c9886_10029558 (Smarty_Internal_Template $_smarty_tpl) {
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
        <li><span class="glyphicon glyphicon-tag"></span><a href="#">案例栏目管理</a></li>
        <!--<li class="active">产品列表</li>-->
    </ol>
    <div class="col-lg-2">
        <a href="http://localhost/mbkj/admin.php?c=case&a=add"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>添加案例</button></a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>排序</th>
            <th>案例名</th>
            <th>上传时间</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caseArr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value["colunm"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value["time"];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value["status"] == "0") {?>
                    关闭
                <?php } else { ?>
                    开启
                <?php }?>
            </td>
            <td><a href='http://localhost/mbkj/admin.php?c=case&a=change&Id=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
' class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a><a href='http://localhost/mbkj/admin.php?c=case&a=delete&Id=<?php echo $_smarty_tpl->tpl_vars['item']->value["Id"];?>
' class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <nav aria-label="Page navigation" style="text-align: center">
        <ul class="pagination" >
            <li>
                <?php if ($_smarty_tpl->tpl_vars['page']->value == "1") {?>
                <a href="http://localhost/mbkj/admin.php?c=case&a=case1&page=1" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                <?php } else { ?>
                <a href="http://localhost/mbkj/admin.php?c=case&a=case1&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                <?php }?>
            </li>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageArr']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['page']->value-1) {?>
            <li><a style="background-color: #1b6d85" href="http://localhost/mbkj/admin.php?c=case&a=case1&page=<?php echo $_smarty_tpl->tpl_vars['item']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value+1;?>
</a></li>
            <?php } else { ?>
            <li><a href="http://localhost/mbkj/admin.php?c=case&a=case1&page=<?php echo $_smarty_tpl->tpl_vars['item']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value+1;?>
</a></li>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



            <li>
                <?php if ($_smarty_tpl->tpl_vars['page']->value == count($_smarty_tpl->tpl_vars['pageArr']->value)) {?>
                <a href="http://localhost/mbkj/admin.php?c=case&a=case1&page=<?php echo count($_smarty_tpl->tpl_vars['pageArr']->value);?>
" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                <?php } else { ?>
                <a href="http://localhost/mbkj/admin.php?c=case&a=case1&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                <?php }?>
            </li>
        </ul>
    </nav>
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
    var doc=document.getElementsByClassName("case")[0];
    doc.setAttribute("style","background-color:black");
    $().ready(function(){
        var hei=$(window).height();
        $(".sidebar").css("height",hei-60+"px");
    });

<?php echo '</script'; ?>
>
</html>

<?php }
}
