<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 13:03
 */
class homeController{
    public function home(){
        $tpl=Mysmarty::getInstance();
//        $tpl->assign("name","ppppppp");
        $tpl->display("home/home.html");
//        require "app/admin/view/home/home.html";
    }
}