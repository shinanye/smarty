<?php
    class DetailsModel extends Model{
        public function details($tablename,$id)
        {
            # code...
            $sql = "SELECT title,content FROM $tablename WHERE Id=?";
           $arr = array($id);

            if($tablename=="advisory"){//咨询页面
                $sql = "SELECT readnum,title,content FROM $tablename WHERE Id=?";

                $data = $this->db_instance->inquire($sql,$arr);
                $readnum = $data[0]["readnum"]+1;

                $update = "UPDATE $tablename SET readnum=? WHERE Id=?";
                $list = array($readnum,$id);
                $this->db_instance->modify($update,$list);
            }


            $data = $this->db_instance->inquire($sql,$arr);
            return $data;
        }
    }