<?php

function getConntroller(){
    // $c = $_GET["c"]; //类名 
    $a = $_GET["a"];    //方法名
    $a = ucfirst($a);
    $a= $a."Controller";
    require "app/index/controller/".$a.".class.php";
    $re = new $a();     //实例化请求类的实例
    $re->$_GET["a"]();      //调用实例化之后的方法
}

function getModel(){
    $a = $_GET["a"];    //方法名
    $a = ucfirst($a);
    $a= $a."Model";
    require "app/index/model/".$a.".class.php";
    return new $a();    //实例化相应的model类
}

