<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 11:39
 */
function __autoload($className){
    $path=strpos($className,"Controller")!==false?"app/admin/controller/":"app/admin/model/";
    $filename=$className.".php";
//    echo $path.$filename;
    if(!is_file($path.$filename)){
        return false;
    }
    require $path.$filename;
}

function getController(){
    $c=$_GET["c"];
    $a=$_GET["a"];
    $c=$c."Controller";
    $con=new $c();
    $con->$a();
}
function handlePost(){
//    print_r($_FILES);


}