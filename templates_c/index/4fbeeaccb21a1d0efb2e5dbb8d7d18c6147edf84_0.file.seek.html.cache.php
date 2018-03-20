<?php
/* Smarty version 3.1.30, created on 2018-03-17 06:24:53
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\seek.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacb4b55c9dc4_29051736',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4fbeeaccb21a1d0efb2e5dbb8d7d18c6147edf84' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\seek.html',
      1 => 1521267890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aacb4b55c9dc4_29051736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '137495aacb4b52ae7f8_38089341';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/config.conf', null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>
    <link rel="stylesheet" href="static/css/index/common.css">
    <link rel="stylesheet" href="static/css/index/other.css">
    <style>
        .read{
            float: right;
            margin: 2% 0;
            color: #aaa;
        }
        .read span{
            color: red;
            font-weight: bolder;
        }
        .pagination{
            width: 20%;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .pagination a{
            text-decoration: none;
            color: white;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 10px;
            margin: 1%;
            background-color:darkcyan;
        }
        .pagination a:hover{
            background-color: cadetblue;
            font-size: 20px;
        }
        .consult-list{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <div class='joinUs-banner' style='background: url(static/img/data/20160802/20160802135948_90702.png ) no-repeat center; position:relative; height:300px;'></div>
            
    <main>
       
        <div class="consult-content">
            <div class="consult-content-in">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'contents', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['contents']->value) {
?>
                    <a href="?c=index&a=seek&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['contents']->value['Id'];?>
">
                        <div class="consult-list clearfix">
                            <img src=<?php echo $_smarty_tpl->tpl_vars['contents']->value['coverimg'];?>
 style="width:270px;height:180px;">
                            <div class="list-right">
                                <h1><?php echo $_smarty_tpl->tpl_vars['contents']->value['title'];?>
</h1>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['contents']->value['smalltitle'];?>

                                </p>
                                <ul>
                                    <li>发布时间：<?php echo $_smarty_tpl->tpl_vars['contents']->value['issue'];?>
 </li>
                                    <li>阅读全文</li>
                                </ul>
                                <br>
                                
                               
                                
                            </div>
                        </div>
                    </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="pagination">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagesList']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                <a href="?c=index&a=seek&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </main>
    <footer>
            <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
<?php echo '<script'; ?>
 src="static/js/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
     
        <?php echo '/*%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'data\']->value, \'value\', false, \'k\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'k\']->value => $_smarty_tpl->tpl_vars[\'value\']->value) {
?>/*/%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/';?>

            var _div = $(".list-right").eq(<?php echo '/*%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/<?php echo $_smarty_tpl->tpl_vars[\'k\']->value;?>
/*/%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/';?>
);
            var _p = "<div class='read'>阅读量：<span class='readnum'><?php echo '/*%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/<?php echo $_smarty_tpl->tpl_vars[\'value\']->value[\'readnum\'];?>
/*/%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/';?>
</span></div>";
            _div.append(_p);
        <?php echo '/*%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:137495aacb4b52ae7f8_38089341%%*/';?>

     
<?php echo '</script'; ?>
>
</html><?php }
}
