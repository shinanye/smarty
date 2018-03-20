<?php
class ContactController extends Controller{

    public function contact()
    {
        # code...
        if(!$this->instanceSa->isCached("app/index/view/casePanel/contact.html",$_SERVER["REQUEST_URI"])){
            //无缓存文件执行代码
        }

        $this->instanceSa->display("app/index/view/casePanel/contact.html",$_SERVER["REQUEST_URI"]);
    }
}