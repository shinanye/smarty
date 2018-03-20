<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/12
 * Time: 16:11
 */

class caseController{
//    案例栏目W
    public function case1(){
        $page=$_GET["page"];
        $model=caseModel::getInstance();
        $result=$model->select($Id="",$page1=$page);
        $pageArr=array();
        for($i=0;$i<$result[1];$i++){
            array_push($pageArr,$i);
        }
        $tpl=Mysmarty::getInstance();
        $tpl->assign("caseArr",$result[0]);
        $tpl->assign("pageArr",$pageArr);
        $tpl->assign("page",$page);
        $tpl->display("case/case.html");
    }
    public function add(){
        $tpl=Mysmarty::getInstance();
        $tpl->display("case/addcase.html");
    }
    public function insert(){
        if(!boolval($_POST["title"])||!boolval($_POST["content"])){
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=add'</script>";
            exit;
        }
        $title=$_POST["title"];
        $content=$_POST["content"];
        $status=$_POST["status"];
        $model=caseModel::getInstance();
        $model->insert($title,$content,$status);

    }
//    修改
    public function change(){
        $Id=$_GET["Id"];
        $model=caseModel::getInstance();
        $result=$model->select($Id);

        $tpl=Mysmarty::getInstance();
        $tpl->assign("title",$result[0]["colunm"]);
        $tpl->assign("content",$result[0]["content"]);
        $tpl->assign("status",$result[0]["status"]);
        $tpl->assign("Id",$result[0]["Id"]);
        $tpl->display("case/changecase.html");
    }
    public function cinsert(){
        if(!boolval($_POST["title"])||!boolval($_POST["content"])){
            echo "<script>alert('修改失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1'</script>";
            exit;
        }
        $title=$_POST["title"];
        $content=$_POST["content"];
        $status=$_POST["status"];
        $Id=$_POST["Id"];
        $model=caseModel::getInstance();
        $model->change($title,$content,$status,$Id);
    }
    public function delete(){
        $Id=$_GET["Id"];
        $model=caseModel::getInstance();
        $model->delete($Id);
    }
//    案例管理
    public function in(){
        if(isset($_POST["catid"])){
            $this->catid();
        }else{
            $this->ins();
        }
    }

    public function ins(){
        $page=$_GET["page"];
        $model=caseModel::getInstance();
        $result=$model->in_select($Id="",$page1=$page);
        $result2=$model->select($Id="",$page1="");
        $pageArr=array();
        for($i=0;$i<$result[1];$i++){
            array_push($pageArr,$i);
        }
        $tpl=Mysmarty::getInstance();
        $tpl->assign("in_arr",$result[0]);
        $tpl->assign("caseArr",$result2);
        $tpl->assign("pageArr",$pageArr);
        $tpl->assign("page",$page);
        $tpl->display("case/case_in.html");
    }
    public function catid(){
        $catid=new catid();
        $bool=$catid->getpost();
        if($bool){
            $this->ins();
        }else{
//            echo $_POST["catid"]."<br>";
            $page=1;
            $model=caseModel::getInstance();
            $result=$model->cat_select($Id=$_POST["catid"],$page1=$page);
            $result2=$model->select($Id="",$page1="");
            $pageArr=array();
            for($i=0;$i<$result[1];$i++){
                array_push($pageArr,$i);
            }
            $tpl=Mysmarty::getInstance();
            $tpl->assign("catid",$_POST["catid"]);
            $tpl->assign("in_arr",$result[0]);
            $tpl->assign("caseArr",$result2);
            $tpl->assign("pageArr",$pageArr);
            $tpl->assign("page",$page);
            $tpl->display("case/case_in.html");
        }
    }


    public function in_add(){
        $model=caseModel::getInstance();
        $result=$model->select();

        $tpl=Mysmarty::getInstance();
        $tpl->assign("case_name",$result);
        $tpl->display("case/case_in_add.html");

    }
    public function in_insert(){
        if(!isset($_POST["select"])||!boolval($_POST["content"])){
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
            exit;
        }
        $name=$_FILES["coverimg"]["name"];
        if($name){
            $error=$_FILES["coverimg"]["error"];
            if($error==1||$error==2){
                echo"<script>alert('文件过大');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
            }
            if (is_uploaded_file($_FILES["coverimg"]["tmp_name"])) {
                $_url="static/dbimg/"."pic".time().".png";
                if(!move_uploaded_file($_FILES["coverimg"]["tmp_name"],$_url)){
                    echo "<script>alert('移动失败');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
                }
            }
        }else{
            echo "<script>alert('文件上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
            exit;
        }
//        print_r($_POST);
        $title=$_POST["title"];
        $content=$_POST["content"];
        $colunm_id=$_POST["select"];
        $model=caseModel::getInstance();
        $model->in_insert($title,$content,$_url,$colunm_id);
    }
//    改
    public function in_change(){
        $Id=$_GET["Id"];
        $model=caseModel::getInstance();
        $result=$model->select();
        $result2=$model->in_select($Id);

        $tpl=Mysmarty::getInstance();
        $tpl->assign("title",$result2[0]["title"]);
        $tpl->assign("content",$result2[0]["content"]);
        $tpl->assign("img",$result2[0]["img"]);
        $tpl->assign("eId",$Id);
        $tpl->assign("Id",$result2[0]["colunm_id"]);
        $tpl->assign("case_name",$result);
//        print_r($result2);
//        print_r($result);
//        exit;
        $tpl->display("case/case_in_change.html");
    }
    public function in_cinsert(){
//
        if(!isset($_POST["select"])||!boolval($_POST["content"])){
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
            exit;
        }
        $name=$_FILES["coverimg"]["name"];
        if($name){
            $error=$_FILES["coverimg"]["error"];
            if($error==1||$error==2){
                echo"<script>alert('文件过大');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
            }
            if (is_uploaded_file($_FILES["coverimg"]["tmp_name"])) {
                $_url="static/dbimg/"."pic".time().".png";
                if(!move_uploaded_file($_FILES["coverimg"]["tmp_name"],$_url)){
                    echo "<script>alert('移动失败');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
                }else{
                    $re=unlink($_POST["old_url"]);
                }
            }
        }else{
            $_url=$_POST["old_url"];
        }
        $title=$_POST["title"];
        $content=$_POST["content"];
        $colunm_id=$_POST["select"];
        $Id=$_POST["Id"];
        $model=caseModel::getInstance();
        $model->in_change($title,$content,$_url,$colunm_id,$Id);
    }

    public function in_delete(){
        $Id=$_GET["Id"];
        $model=caseModel::getInstance();
        $model->in_delete($Id);
    }


}