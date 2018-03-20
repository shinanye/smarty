<?php
/* Smarty version 3.1.30, created on 2018-03-15 06:17:44
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\service.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aaa100838a454_53297630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aad14db6c2ef2258ae79827aca83f7f91baacf1' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\service.html',
      1 => 1521092405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aaa100838a454_53297630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208095aaa10081fa826_90846427';
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
        main{
            margin: auto 4%;
        }
    </style>
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <main>
        <div class="service-con">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value["content"];?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </main>
    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
}
