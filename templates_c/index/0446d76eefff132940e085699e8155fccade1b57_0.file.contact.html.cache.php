<?php
/* Smarty version 3.1.30, created on 2018-03-16 07:45:31
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\contact.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aab761b3bee59_47190941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0446d76eefff132940e085699e8155fccade1b57' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\contact.html',
      1 => 1521186329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aab761b3bee59_47190941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '143575aab761b2386c3_07810480';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/config.conf', null, 0);
?>

<!DOCTYPE html>
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
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <main>
        <div class="joinUs-banner">
            <img style="width: 100%; height: 30%;" src='static/img/data/20160802/20160802135948_90702.png'>
        </div>
        <div class="consult-content">
                <div class="consult-content-in">
                    <div class="consult-details">
                    </div>
                </div>
            </div>
    </main>
    <footer>
            <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </footer>
</body>
</html><?php }
}
