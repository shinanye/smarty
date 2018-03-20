<?php
    class ProductModel extends Model{

        public function product()
        {
            # code...
            $sql = "SELECT * FROM product";
            $data = $this->db_instance->inquire($sql);
            return $data;
        }

        public function allCount()
        {
            # code...
            $sql = "SELECT Id FROM product";
            $allCount = $this->db_instance->inquire($sql,array(),"count");
            return $allCount;
        }

        public function paginFormation($page,$offset=0)
        {
            # code...
            $sql = "SELECT Id,title,smallcontent,coverimg FROM product LIMIT $offset,$page";
            $pagin = $this->db_instance->pagination($sql,array());
            return $pagin;
        }
    }