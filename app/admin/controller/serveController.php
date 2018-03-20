<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/14
 * Time: 12:24
 */
class serveController{
    public function serve(){
        $model=serveModel::getInstance();
        $result=$model->select();
        $tpl=Mysmarty::getInstance();
        $tpl->assign("serve",$result[0]);
        $tpl->display("serve/serve.html");

    }
    public function update(){
        $content=$_POST["content"];
        $model=serveModel::getInstance();
        $result=$model->update($content);

    }
}