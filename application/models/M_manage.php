<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_manage extends CI_Model {
    public function getData($act="",$id=""){
        if($act == 'kegiatan'){
            $query = "SELECT * FROM app_kegiatan 
                      WHERE unix_id IS NOT NULL ORDER BY created_at DESC";
        }elseif($act == 'user'){
            $query = "SELECT a.*,b.categori
                    FROM app_users a
                    LEFT JOIN app_users_role b ON a.`id_user_role` = b.id
                    WHERE a.id_user_role = 1";
        }elseif($act == 'donatur'){
            $query = "SELECT a.*,b.*,c.`nama_kegiatan`,d.nama_bank
                        FROM app_trx_donatur a
                        LEFT JOIN app_users b ON a.`id_users` = b.id
                        LEFT JOIN app_kegiatan c ON c.id = a.`id_kegiatan`
                        LEFT JOIN app_bank d ON d.id = a.id_bank_transfer
                        WHERE c.unix_id IS NOT NULL";
        }elseif($act == 'bank'){
            $query = "SELECT * FROM app_bank";
        }elseif($act == 'kegiatanById'){
            $query = "SELECT * FROM app_kegiatan 
                      WHERE id=$id";
        }elseif($act == 'userById'){
            $query = "SELECT * FROM app_users 
                      WHERE id=$id";
        }elseif($act == 'bankById'){
            $query = "SELECT * FROM app_bank 
                      WHERE id=$id";
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
