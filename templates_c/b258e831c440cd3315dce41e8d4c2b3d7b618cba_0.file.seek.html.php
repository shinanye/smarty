<?php
/* Smarty version 3.1.30, created on 2018-03-14 08:16:40
  from "D:\wamp64\www\project\mbkj\app\index\view\casePanel\seek.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8da68311215_45010343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b258e831c440cd3315dce41e8d4c2b3d7b618cba' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mbkj\\app\\index\\view\\casePanel\\seek.html',
      1 => 1521015397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aa8da68311215_45010343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>摩博科技</title>
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
    </style>
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                    <?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>
                    <a href="index.php?c=index&a=seek&id=<?php echo $_smarty_tpl->tpl_vars['contents']->value['Id'];?>
">
                        <div class="consult-list clearfix">
                            <img src=<?php echo $_smarty_tpl->tpl_vars['contents']->value['coverimg'];?>
 style="width:270px;height:180px;">
                            <div class="list-right">
                                <h1>【喜讯】<?php echo $_smarty_tpl->tpl_vars['contents']->value['title'];?>
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
                                <div class="read">
                                    阅读量：<span><?php echo $_smarty_tpl->tpl_vars['contents']->value['readnum'];?>
</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } else { ?>
                    <a href="index.php?c=index&a=seek&id=<?php echo $_smarty_tpl->tpl_vars['contents']->value['Id'];?>
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
                                <div class="read">
                                    阅读量：<span> <?php echo $_smarty_tpl->tpl_vars['contents']->value['readnum'];?>
</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>      
        </div>
    </main>
    <footer>
            <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html>
<?php }
}
