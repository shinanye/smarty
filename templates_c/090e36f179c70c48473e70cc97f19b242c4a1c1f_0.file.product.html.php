<?php
/* Smarty version 3.1.30, created on 2018-03-15 05:27:45
  from "D:\wamp64\www\mbkj\app\index\view\casePanel\product.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aaa04510399b0_42718220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '090e36f179c70c48473e70cc97f19b242c4a1c1f' => 
    array (
      0 => 'D:\\wamp64\\www\\mbkj\\app\\index\\view\\casePanel\\product.html',
      1 => 1521031518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:app/index/view/header.html' => 1,
    'file:app/index/view/footer.html' => 1,
  ),
),false)) {
function content_5aaa04510399b0_42718220 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style >
        .h3-con{
            margin: 2% 0;
        }
        .block{
            height: 500px;
            width: 100%;
            background-color: #000;
        }
    </style>
</head>
<body>
    <nav>
        <?php $_smarty_tpl->_subTemplateRender("file:app/index/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>
    <main>
        <div class="joinUs-banner" style="background: url( static/img/data/20161028/20160729155221_23169.png) no-repeat center; position:relative; height:300px;">
            <div class="u-banner-p">
                <p>摩博科技在前瞻技术研究和项目实践中，逐渐形成一整套移动信息化及移动互联网产品。已拥有多项自主知识产权：魔学院（移动学习平台）、O2O平台、移动内容发布系统、移动电子商务平台、移动数据采集系统、移动现场服务系统、移动问卷调查系统、移动互动营销系统、移动会展交互系统等。</p>
            </div>
        </div>
        <div class="service-con">
            <div class="main">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="h3-con">
                            <div class="clearfix u-product-content">
                                <a href="index.php?c=index&a=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['Id'];?>
">
                                    <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value["coverimg"];?>
'>
                                    <div>
                                        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</h1>
                                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value["smallcontent"];?>
</p>
                                    </div>
                                </a>
                            </div>
                        </div>
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
</html><?php }
}
