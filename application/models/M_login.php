<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function getData($act=""){
        if($act == 'kegiatan'){
            $query = "SELECT * FROM app_kegiatan 
                      WHERE unix_id IS NOT NULL
                      ORDER BY created_at DESC
                      LIMIT 6";
        }
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function execute($table = "", $data = ""){
        // $query = "INSERT INTO $table VALUES($data)";
        $this->db->insert($table, $data);
        // $result = $this->db->query($query);
        // return $result->result_array();
    }
}
