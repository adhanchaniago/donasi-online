<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_manage extends CI_Model {
    public function getData($act=""){
        if($act == 'kegiatan'){
            $query = "SELECT * FROM app_kegiatan";
        }elseif($act == 'user'){
            $query = "SELECT a.*,b.categori
                    FROM app_users a
                    LEFT JOIN app_users_role b ON a.`id_user_role` = b.id";
        }elseif($act == 'donatur'){
            $query = "SELECT a.*,b.*,c.`nama_kegiatan`,d.nama_bank
                        FROM app_trx_donatur a
                        LEFT JOIN app_users b ON a.`id_users` = b.id
                        LEFT JOIN app_kegiatan c ON c.id = a.`id_kegiatan`
                        LEFT JOIN app_bank d ON d.id = a.id_bank_transfer";
        }elseif($act == 'bank'){
            $query = "SELECT * FROM app_bank";
        }
        $result = $this->db->query($query);
        return $result->result_array();
    }
}
