<?php

require "libs/smarty/Smarty.class.php";
define('ROOT_PATH',dirname(__FILE__));
require "config/dbo.php";//引入配置文件
require "app/index/common/Dbo.class.php";
require "app/index/common/mySmarty.php";
require "app/index/controller/controller.php";
require "app/index/model/model.php";
require "app/index/controller/DetailsController.php";
require "app/index/model/DetailsModel.php";
require "app/index/common/common.php";


// $instanceSm = MySmarty::getInstanceSa();
// $instanceSm->display("app/index/view/casePanel/cases.html");
$instanceSm = MySmarty::getInstanceSa();
if(!$_GET){
    $instanceSm->display("app/index/view/index.html");
}else{
    getConntroller();
}

