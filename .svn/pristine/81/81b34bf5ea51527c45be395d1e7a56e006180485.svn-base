<?php
/**
 * Created by PhpStorm.
 * User: XHY
 * Date: 2018/3/11
 * Time: 11:39
 */
class Mysmarty extends Smarty{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new Mysmarty();
        }
        return self::$instance;

    }
    public function __construct()
    {
        parent::__construct();
        $this->template_dir=ROOT_PATH."/app/admin/view/";
        $this->compile_dir=ROOT_PATH."/app/runtime/templates_c/";
        $this->cache_dir = ROOT_PATH.'/app/runtime/cache/';
        $this->left_delimiter="{";
        $this->right_delimiter="}";
    }

}