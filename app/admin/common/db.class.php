<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 16:39
 */
class db{
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "db_mbkj";
    private $conn;

//    单例
    private static $instance;

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance=new db();
        }
        return self::$instance;
    }
    public function __construct()
    {
        $this->conn();
    }

    //连接
    public function conn(){
        $params = array (
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'' ,   //设置字符集 保证中文不乱码
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,           //设置当前pdo的错误处理方式
        );
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

    }
//    查
    public function select($sql,$sel=array()){
        $pre=$this->conn->prepare($sql);
        $pre->execute($sel);
        $reslut=$pre->fetchAll(PDO::FETCH_ASSOC);
        return $reslut;
//        print_r($reslut);
    }
////    增
    public function insert($sql1,$post){
        $pre=$this->conn->prepare($sql1);
        $bool=$pre->execute($post);
        return $bool;

    }
//    改
    public function change($sql1,$post){
        $pre=$this->conn->prepare($sql1);
        $bool=$pre->execute($post);
        return $bool;
//        var_dump($bool);
//        echo "eep";
    }
//    删
    public function delete($sql1,$post){
        $pre=$this->conn->prepare($sql1);
        $bool=$pre->execute($post);
        return $bool;
    }

}