<?php
class CasesController extends Controller{
   
    public function cases()
    {
        # code...
        if(!$this->instanceSa->isCached("app/index/view/casePanel/cases.html",$_SERVER["REQUEST_URI"])){
        $info =  $this->model->cases();
        $this->instanceSa->assign("data",$info["data"]);
        $this->instanceSa->assign("colunms",$info["colunms"]);
        }
        $this->instanceSa->display("app/index/view/casePanel/cases.html",$_SERVER["REQUEST_URI"]);
    }
}