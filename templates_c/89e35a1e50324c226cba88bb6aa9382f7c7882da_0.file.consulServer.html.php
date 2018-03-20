<?php
/* Smarty version 3.1.30, created on 2018-03-14 11:47:20
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\consulServer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa90bc8741e33_00167267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89e35a1e50324c226cba88bb6aa9382f7c7882da' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\consulServer.html',
      1 => 1521016870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aa90bc8741e33_00167267 (Smarty_Internal_Template $_smarty_tpl) {
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
    .joinUs-banner{
        height: 25%;
    }
    </style>
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <main>
        <div class="joinUs-banner">
                <img style="width: 100%; height: 100%;" src="static/img/data/20160802/20160802135948_90702.png">
            </div>
            <div class="consult-content">
                <div class="consult-content-in">
                    <div class="consult-details">
                        <span>【喜讯】<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
                        <span class="details-time">发布时间:<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                        </p>
                    </div>
                </div>
            </div>

    </main>
    <footer>
            <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
}
