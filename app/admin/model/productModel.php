<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 16:50
 */
class productModel{
        private static $instance;
        public static function getInstance(){
            if(!self::$instance){
                self::$instance=new productModel();
            }
            return self::$instance;
        }
        
        public function insert($title,$smallcontent,$coverimg,$content){
            $db=db::getInstance();
            $time=date("Y-m-d H:i:s",time());
            $sql="INSERT INTO product(title,smallcontent,coverimg,content,time) VALUES(?,?,?,?,?)";
            $result=$db->insert($sql,[$title,$smallcontent,$coverimg,$content,$time]);
            if($result){
                echo "<script>alert('上传成功！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }else{
                echo "<script>alert('上传失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=add'</script>";
            }
        }
        public function select($Id=''){
            $db=db::getInstance();
            $sql1=boolval($Id)==true?"SELECT * FROM product WHERE Id=?":"SELECT * FROM product ";
//            $sql1="SELECT * FROM product ";
            $reslut=$db->select($sql1,[$Id]);
            return $reslut;
        }

        public function change($title,$smallcontent,$coverimg,$content,$Id){
            $db=db::getInstance();
            $time=date("Y-m-d H:i:s",time());
            $sql="UPDATE product SET title='$title',smallcontent ='$smallcontent',coverimg='$coverimg',content='$content',time='$time' WHERE Id=?";
            $result=$db->change($sql,[$Id]);
            if($result){
                echo "<script>alert('修改成功！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }
        }

        public function delete($Id){
            $db=db::getInstance();
            $sql="DELETE FROM product WHERE id=?";
            $result=$db->delete($sql,[$Id]);
            if($result){
                echo "<script>alert('删除成功！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='http://localhost/mbkj/admin.php?c=product&a=product'</script>";
            }
        }


}