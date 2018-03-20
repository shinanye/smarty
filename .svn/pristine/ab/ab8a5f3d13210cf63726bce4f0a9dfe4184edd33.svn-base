<?php
class PaginationController extends Controller{
    private $url = null;

    private $allCount;
    private $count=3;
    private $allPages;

    public function pagination()//调用display方法显示哪一个页面
    {
        # code...
        $this->url = "app/index/view/casePanel/seek.html";
        // $seek =  $this->model->seek();
        $data = $this->model->paginFormation($this->count);
        $this->instanceSa->assign("data",$data);
        $this->createPages();
        if(!$this->instanceSa->isCached($this->url,$_SERVER["REQUEST_URI"])){//无缓存文件执行代码

            if(!isset($_GET["id"])){
                $this->seekPagination();
            }else{
                $id = $_GET["id"];
                foreach($data as $item){
                    if($item["Id"]==$id){
                        $details = new DetailsController( $this->instanceSa, $this->model);
                        $details->details("advisory",$id);
                    }
                }
            }
        }else{
            $this->instanceSa->display($this->url,$_SERVER["REQUEST_URI"]);
        }
    }

    public function seekPagination(Type $var = null)//获取每一页显示的信息
    {
        if($_GET["page"]<=$this->allPages){
            $offset = $this->count *($_GET["page"]-1);
            $data = $this->model->paginFormation($this->count,$offset);//offset是偏移量可有可无，count是每次请求的数量
            $this->instanceSa->assign("data",$data);
            $this->instanceSa->display($this->url,$_SERVER["REQUEST_URI"]);
        }
       
    }

    public function createPages(Type $var = null)//创建分页的a标签
    {
        # code...
        $this->allCount = $this->model->allCount();
        
        $this->allPages = ceil($this->allCount/$this->count);
        $pagesList = array();
        for($i=1;$i<=$this->allPages;$i++){
            array_push($pagesList,$i);
        }
        $this->instanceSa->assign("pagesList",$pagesList);
    }
}