<?php
class ProductController extends Controller{
    private $url = null;
    public function product()
    {
       
        $this->url = "app/index/view/casePanel/product.html";
        $allCount = $this->model->allCount();
        $allPages = ceil($allCount/2);
        if(!$this->instanceSa->isCached($this->url,$_SERVER["REQUEST_URI"])){
            //无缓存文件执行代码
            if(!isset($_GET["id"])){
                if(isset($_GET["page"])&&($_GET["page"]<=$allPages)){
                    //ajax
                    $offset=($_GET["page"]-1)*2;
                    $data = $this->model->paginFormation(2,$offset);
                    echo json_encode($data);
                    exit;
                }else{
                    $data = $this->model->paginFormation(2);
                    $this->instanceSa->assign("data",$data);
                    $this->instanceSa->display($this->url,$_SERVER["REQUEST_URI"]);
                      // $data = getModel()->product();
           
                }
            }else{
                $id = $_GET["id"];
                $data = $this->model->product();
                foreach($data as $item){
                    if($item["Id"]==$id){
                        $details = new DetailsController( $this->instanceSa, $this->model);
                        $details->details("product",$id);
                    }
                }
            }
        }else{
            $data = $this->model->paginFormation(2);
            $this->instanceSa->display($this->url,$_SERVER["REQUEST_URI"]);
        }
    }
}