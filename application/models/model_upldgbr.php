<?php
class Model_upldgbr extends  CI_Model{
    
public function simpan($file_name)
    {
            $data= array(
            'image' => $file_name);
            return $this->db->insert('news',$data);
    }

}