<?php
/* Smarty version 3.1.30, created on 2018-03-14 12:45:49
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\cases.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa9197dd86b50_07122488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e896b0282709082ff2bb68cba2972c91bc460cfa' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\cases.html',
      1 => 1521031432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aa9197dd86b50_07122488 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <main>
        <div class="casus-con">
            <div class="casus">
                <ol class="clearfix">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>
                        <li class="current"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['value']->value["colunm"];?>
</a></li>
                    <?php } else { ?>
                        <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['value']->value["colunm"];?>
</a></li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>
            <ul class="casus-ul-con">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>
                        <li class="currents">
                            <p class="casus-ul-li-tit">
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value["content"];?>

                            </p>
                            <ul class="casus-ul-con-ul clearfix">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colunms']->value, 'contents', false, 'col_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col_id']->value => $_smarty_tpl->tpl_vars['contents']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['col_id']->value == 0) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
                                            
                                            <li>
                                                <a href="javascript:;">
                                                    <img src=<?php echo $_smarty_tpl->tpl_vars['content']->value['img'];?>
 alt="">
                                                    <div class="casus-li-posi">
                                                        <?php if ($_smarty_tpl->tpl_vars['content']->value["title"] != '') {?> <?php echo $_smarty_tpl->tpl_vars['content']->value["title"];
}?>
                                                    <br>
                                                    <?php echo $_smarty_tpl->tpl_vars['content']->value["content"];?>

                                                    </div>
                                                </a>
                                            </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                
                            </ul>
                        </li>
                    <?php } else { ?>
                    <li>
                        <p class="casus-ul-li-tit">
                                <?php echo $_smarty_tpl->tpl_vars['value']->value["content"];?>

                        </p>
                        <ul class="casus-ul-con-ul clearfix">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colunms']->value, 'contents', false, 'col_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['col_id']->value => $_smarty_tpl->tpl_vars['contents']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['col_id']->value > 0) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['value']->value["Id"] == $_smarty_tpl->tpl_vars['content']->value["Id"]) {?>
                                            <li>
                                                <a href="javascript:;">
                                                    <img src=<?php echo $_smarty_tpl->tpl_vars['content']->value['img'];?>
 alt="">
                                                    <div class="casus-li-posi">
                                                        <?php if ($_smarty_tpl->tpl_vars['content']->value["title"] != '') {?> <?php echo $_smarty_tpl->tpl_vars['content']->value["title"];
}?>
                                                    <br>
                                                    <?php echo $_smarty_tpl->tpl_vars['content']->value["content"];?>

                                                    </div>
                                                </a>
                                            </li>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ul>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
    </main>
    <footer>
            <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
<?php echo '<script'; ?>
 src="static/js/node_modules/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="static/js/main/cover.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    // 案例导航点击效果
    $(".casus ol li ").hover(function(){
        $(this).addClass("current").siblings().removeClass("current");
        var n_li = $(this).index();
        console.log(n_li)
        $(".casus-ul-con > li:eq("+ n_li +")").addClass("currents").siblings().removeClass("currents");
    });
<?php echo '</script'; ?>
>
</html><?php }
}
