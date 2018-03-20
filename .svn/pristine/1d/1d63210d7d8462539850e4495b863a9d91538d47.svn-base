<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/13
 * Time: 17:03
 */
class advisoryModel{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new advisoryModel();
        }
        return self::$instance;
    }

    public function insert($title,$smallcontent,$coverimg,$content){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $issue=date("Y-m-d",time());
        $timeArr=explode("-",$issue);
        $issue=$timeArr[0]."年".$timeArr[1]."月".$timeArr[2]."日";
//        exit;
        $sql="INSERT INTO advisory(title,coverimg,smalltitle,time,content,issue) VALUES(?,?,?,?,?,?)";
        $result=$db->insert($sql,[$title,$coverimg,$smallcontent,$time,$content,$issue]);
        if($result){
            echo "<script>alert('上传成功！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=advisory&page=1'</script>";
        }else{
            echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=add'</script>";
        }
    }
    public function select($Id='',$page=""){
        $db=db::getInstance();
//        $sql=boolval($Id)==true?"SELECT * FROM advisory WHERE Id=?":"SELECT * FROM advisory ";
//        $reslut=$db->select($sql1,[$Id]);
//        return $reslut;
        if(boolval($Id)){
            $sql="SELECT * FROM advisory WHERE Id=?";
            $result=$db->select($sql,[$Id]);
            return $result;
            }else{
                $sql="SELECT * FROM advisory";
                $result=$db->select($sql,[$Id]);
                $row=count($result);
                $row=$row/5;
                $lim=($page-1)*5;
                $sql="SELECT * FROM advisory ORDER BY Id DESC limit $lim,5";
                $result=$db->select($sql,[$Id]);
                return [$result,$row];
            }
    }
//if(boolval($Id)){
//$sql="SELECT * FROM case_information WHERE Id=?";
//$result=$db->select($sql,[$Id]);
//return $result;
//}else{
//    $sql="SELECT * FROM case_information";
//    $result=$db->select($sql,[$Id]);
//    $row=count($result);
//    $row=$row/5;
//    $lim=($page-1)*5;
//    $sql="SELECT * FROM case_information ORDER BY Id DESC limit $lim,5";
//    $result=$db->select($sql,[$Id]);
//    return [$result,$row];
//}

    public function change($title,$smallcontent,$coverimg,$content,$Id){
        $db=db::getInstance();
        $time=date("Y-m-d H:i:s",time());
        $sql="UPDATE advisory SET title='$title',smalltitle ='$smallcontent',coverimg='$coverimg',content='$content',time='$time' WHERE Id=?";
        $result=$db->change($sql,[$Id]);
        if($result){
            echo "<script>alert('修改成功！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=advisory&page=1'</script>";
        }else{
            echo "<script>alert('修改失败！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=advisory&page=1'</script>";
        }
    }

    public function delete($Id){
        $db=db::getInstance();
        $sql="DELETE FROM advisory WHERE id=?";
        $result=$db->delete($sql,[$Id]);
        if($result){
            echo "<script>alert('删除成功！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=advisory&page=1'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='http://localhost/mbkj/admin.php?c=advisory&a=advisory&page=1'</script>";
        }
    }
}