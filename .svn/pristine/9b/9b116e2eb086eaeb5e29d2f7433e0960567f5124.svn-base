<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 14:17
 */
class productController{


    public function product(){
        $model=productModel::getInstance();
        $result=$model->select();
//        print_r($result);
        $tpl=Mysmarty::getInstance();
        $tpl->assign("sqlArr",$result);
        $tpl->display("product/product.html");


    }
    public function add(){

        $tpl=Mysmarty::getInstance();

        $tpl->display("product/addproduct.html");
    }

    public function insert(){
        if(!isset($_POST["content"])||!boolval($_POST["title"])||!boolval($_POST["smallcontent"])){
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=add'</script>";
            exit;
        }
        $name=$_FILES["coverimg"]["name"];
        if($name){
            $error=$_FILES["coverimg"]["error"];
            if($error==1||$error==2){
                echo"<script>alert('文件过大');location.href='http://localhost/mbkj/admin.php?c=product&a=add'</script>";
            }
            if (is_uploaded_file($_FILES["coverimg"]["tmp_name"])) {
                $_url="static/dbimg/"."pic".time().".png";
                if(!move_uploaded_file($_FILES["coverimg"]["tmp_name"],$_url)){
                    echo "<script>alert('移动失败');location.href='http://localhost/mbkj/admin.php?c=product&a=add'</script>";
                }
            }
        }else{
            echo "<script>alert('文件上传失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=add'</script>";
            exit;
        }
        $title=$_POST["title"];
        $smalltitle=$_POST["smallcontent"];
        $content=$_POST["content"];


        $model=productModel::getInstance();
        $model->insert($title,$smalltitle,$_url,$content);


    }
//    改
    public function cinsert(){
        if(!isset($_POST["content"])||!boolval($_POST["title"])||!boolval($_POST["smallcontent"])){
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            exit;
        }
        $name=$_FILES["coverimg"]["name"];
        if($name){
            $error=$_FILES["coverimg"]["error"];
            if($error==1||$error==2){
                echo"<script>alert('文件过大');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }
            if (is_uploaded_file($_FILES["coverimg"]["tmp_name"])) {
                $_url="static/dbimg/"."pic".time().".png";
                if(!move_uploaded_file($_FILES["coverimg"]["tmp_name"],$_url)){
                    echo "<script>alert('移动失败');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
                }else{
                    $re=unlink($_POST["old_url"]);
//                    var_dump($re);
//                    exit;
                }
            }
        }else{
            $_url=$_POST["old_url"];
        }
//        echo "ppp";
        $title=$_POST["title"];
        $smalltitle=$_POST["smallcontent"];
        $content=$_POST["content"];
        $Id=$_POST["Id"];
//        exit;
        $model=new productModel();
        $model->change($title,$smalltitle,$_url,$content,$Id);

    }


    public function change(){

        $Id=$_GET["Id"];
        $model=productModel::getInstance();
        $result=$model->select($Id);
//        print_r($result);

        $tpl=Mysmarty::getInstance();
        $tpl->assign("title",$result[0]["title"]);
        $tpl->assign("smallcontent",$result[0]["smallcontent"]);
        $tpl->assign("coverimg",$result[0]["coverimg"]);
        $tpl->assign("content",$result[0]["content"]);
        $tpl->assign("Id",$Id);
        $tpl->display("product/changeproduct.html");
    }

//    删除
    public function delete(){
//        echo "<script>if(!confirm('是否删除')){location.href='http://localhost/mbkj/admin.php?c=product&a=product'}</script>";
        $Id=$_GET["Id"];
        $model=productModel::getInstance();
        $result=$model->select($Id);
        unlink($result[0]["coverimg"]);
//        print_r($result);
//        exit;
        $model->delete($Id);

    }
}