<?php
class JoinController extends Controller{
    public function join()
    {
        if(!$this->instanceSa->isCached("app/index/view/casePanel/join.html",$_SERVER["REQUEST_URI"])){
            //无缓存文件执行代码
        }

        $this->instanceSa->display("app/index/view/casePanel/join.html",$_SERVER["REQUEST_URI"]);
    }
}