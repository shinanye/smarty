<?php
class CasesModel extends Model{
    
    public function cases()
    {
        # code...
        $info = array();
        $sqlcase = "SELECT * FROM case1 WHERE status=?";
        $arr1=array(1);
        $data = $this->db_instance->inquire($sqlcase,$arr1);

        $sql = "SELECT Id FROM case1 WHERE status=?";
        $idList = $this->db_instance->inquire($sql,$arr1);

        $sql = "SELECT colunm_id FROM case_information";
        $List = $this->db_instance->inquire($sql);
        $colunms = array();

        $sqlcase = "SELECT i.colunm_id,c.Id,i.title,i.content,i.img  FROM case1 c,case_information i WHERE c.Id=i.colunm_id";
        $colunms = $this->db_instance->inquire($sqlcase);
        $colunm = array();
        $lists = array();
        foreach($idList as $num){
            foreach($colunms as $cols){
                if($num["Id"]==$cols["Id"]){
                    array_push($colunm,$cols);
                }
            }
            array_push($lists,$colunm);
            $colunm = array();
        }

        $info["data"]=$data;
        $info["colunms"]=$lists;
        return $info;
    }
}