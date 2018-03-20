<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/14
 * Time: 12:25
 */
class serveModel{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new serveModel();
        }
        return self::$instance;
    }
    public function select(){
        $db=db::getInstance();
        $sql1="SELECT * FROM serve";
        $reslut=$db->select($sql1,[]);
        return $reslut;
    }
    public function update($content){
        $db=db::getInstance();
        $sql="UPDATE serve SET content='$content'";
        $result=$db->change($sql,[$content]);
        if($result){
            echo "<script>alert('上传成功！');location.href='http://localhost/mbkj/admin.php?c=serve&a=serve'</script>";
        }else{
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=serve&a=serve'</script>";
        }
    }
}