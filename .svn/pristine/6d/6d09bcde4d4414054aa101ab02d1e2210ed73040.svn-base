<?php
class ServerController extends Controller{

    public function server()
    {
        
        if(!$this->instanceSa->isCached("app/index/view/casePanel/service.html",$_SERVER["REQUEST_URI"])){
            $data =  $this->model->server();//getModel()  IndexMode类的实例化
            $this->instanceSa->assign("data",$data);
        }
            $this->instanceSa->display("app/index/view/casePanel/service.html",$_SERVER["REQUEST_URI"]);
        
    }
}