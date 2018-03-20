<?php
class DetailsController{

    private $instanceSa;
    private $model;
    public function __construct($instanceSa,$model)
    {
        # code...
        $this->instanceSa = $instanceSa;//smarty单例
        $this->model = $model;  //获得每一个model层的实例类
    }
    
    public function details($tablename,$id)
    {
        $deModel = new DetailsModel();
        $data = $deModel->details($tablename,$id);//得到详细信息的数据

        foreach($data as $item){
            $this->instanceSa->assign("title",$item["title"]);
            $this->instanceSa->assign("content",$item["content"]);
        }
        $this->instanceSa->display("app/index/view/casePanel/details.html",$_SERVER["REQUEST_URI"]);
    }
}