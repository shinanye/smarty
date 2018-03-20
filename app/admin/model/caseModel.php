<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/13
 * Time: 11:25
 */
class caseModel{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new caseModel();
        }
        return self::$instance;
    }

    public function insert($title,$content,$status){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $sql="INSERT INTO case1(colunm,content,status,time) VALUES(?,?,?,?) ";
        $result=$db->insert($sql,[$title,$content,$status,$time]);
//        var_dump($result);
        if($result){
            echo "<script>alert('上传成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1&page=1'</script>";
        }else{
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=add'</script>";
        }
    }
    public function select($Id="",$page=""){
        $db=db::getInstance();
        if(boolval($Id)){
            $sql="SELECT * FROM case1 WHERE Id=?";
            $result=$db->select($sql,[$Id]);
            return $result;
        }else{
            if(boolval($page)){
                $sql="SELECT * FROM case1";
                $result=$db->select($sql,[$Id]);
                $row=count($result);
                $row=$row/5;
                $lim=($page-1)*5;
                $sql="SELECT * FROM case1 ORDER BY Id DESC limit $lim,5";
                $result=$db->select($sql,[$Id]);
                return [$result,$row];
            }else{
                $sql="SELECT * FROM case1";
                $result=$db->select($sql,[$Id]);
                return $result;
            }

        }
    }

    public function change($title,$content,$status,$Id){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $sql="UPDATE case1 SET colunm='$title',content ='$content',status='$status',content='$content',time='$time' WHERE Id=?";
        $result=$db->change($sql,[$Id]);
        if($result){
            echo "<script>alert('修改成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1&page=1'</script>";
        }else{
            echo "<script>alert('修改失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1&page=1'</script>";
        }
    }
    public function delete($Id){
        $db=db::getInstance();
        $sql="DELETE FROM case1 WHERE id=?";
        $result=$db->delete($sql,[$Id]);
        if($result){
            echo "<script>alert('删除成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1&page=1'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=case1&page=1'</script>";
        }
    }

//    信息
    public function in_insert($title,$content,$_url,$colunm_id){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $sql="INSERT INTO case_information(title,content,img,colunm_id,time) VALUES(?,?,?,?,?) ";
        $result=$db->insert($sql,[$title,$content,$_url,$colunm_id,$time]);
//        var_dump($result);
        if($result){
            echo "<script>alert('上传成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=in&page=1'</script>";
        }else{
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in_add'</script>";
        }
    }

    public function in_select($Id="",$page=""){
        $db=db::getInstance();
        if(boolval($Id)){
            $sql="SELECT * FROM case_information WHERE Id=?";
            $result=$db->select($sql,[$Id]);
            return $result;
        }else{
            $sql="SELECT * FROM case_information";
            $result=$db->select($sql,[$Id]);
            $row=count($result);
            $row=$row/5;
            $lim=($page-1)*5;
            $sql="SELECT * FROM case_information ORDER BY Id DESC limit $lim,5";
            $result=$db->select($sql,[$Id]);
            return [$result,$row];
        }
    }
    public function cat_select($Id="",$page=""){
            $db=db::getInstance();
            $sql="SELECT * FROM case_information WHERE colunm_id=?";
            $result=$db->select($sql,[$Id]);
            $row=count($result);
            $row=$row/5;
            $lim=($page-1)*5;
            $sql="SELECT * FROM case_information WHERE colunm_id=? ORDER BY Id DESC limit $lim,5";
            $result=$db->select($sql,[$Id]);
            return [$result,$row];

    }
    public function in_change($title,$content,$_url,$colunm_id,$Id){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $sql="UPDATE case_information SET title='$title',content ='$content',img='$_url',colunm_id='$colunm_id',time='$time' WHERE Id=?";
        $result=$db->change($sql,[$Id]);
        if($result){
            echo "<script>alert('修改成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=in&page=1'</script>";
        }else{
            echo "<script>alert('修改失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in&page=1'</script>";
        }
    }
    public function in_delete($Id){
        $db=db::getInstance();
        $sql="DELETE FROM case_information WHERE id=?";
        $result=$db->delete($sql,[$Id]);
        if($result){
            echo "<script>alert('删除成功！');location.href='http://localhost/mbkj/admin.php?c=case&a=in&page=1'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='http://localhost/mbkj/admin.php?c=case&a=in&page=1'</script>";
        }
    }
}