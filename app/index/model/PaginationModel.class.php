<?php
    class PaginationModel extends Model{

    public function pagination()
        {
            # code...
            $sql = "SELECT * FROM advisory ORDER BY readnum DESC";
            $data = $this->db_instance->inquire($sql);
            return $data;
        }

        public function allCount()
        {
            # code...
            $sql = "SELECT Id FROM advisory";
            $allCount = $this->db_instance->inquire($sql,array(),"count");
            return $allCount;
        }

        public function paginFormation($page,$offset=0)
        {
            # code...
            $sql = "SELECT * FROM advisory ORDER BY readnum DESC LIMIT $offset,$page";
            $pagin = $this->db_instance->pagination($sql,array());
            return $pagin;
        }
    }