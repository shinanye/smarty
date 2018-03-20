<?php

class IndexController extends Controller{
   
    public function index()
    {
        if(!$this->instanceSa->isCached("app/index/view/index.html",$_SERVER["REQUEST_URI"])){
            //无缓存文件执行代码
        }

        $this->instanceSa->display("app/index/view/index.html",$_SERVER["REQUEST_URI"]);
    }


}