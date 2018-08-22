<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_site','site');
        // if (!$this->session->userdata('logged_in')){
		// 	redirect('login');
		// }
	}
	
	public function index()
	{
		$data['row'] = $this->site->getData('kegiatan',6);
		$this->load->view('main_layout',$data);
	}
	
	public function allDonasi()
	{
		$data['row'] = $this->site->getData('kegiatan');
		$this->load->view('content/_all_donasi',$data);
	}

	public function action($type="",$act="",$id=""){
		if($type == 'detail'){
			if($act == 'donasi'){
				$data['row'] = $this->site->getData('detail_kegiatan',$id);
				$data['bank'] = $this->site->getData('bank',$id);
				$this->load->view('content/_detail',$data);
			}
		}elseif($type == 'execute'){
			if($act == 'donasi'){
				$this->db->insert('history_trx',array('id' => '','keterangan' => 'donasi '.date('Y')));
				$sequence = $this->site->getData('history_trx');
				$id_trx = 'TRX'.date('dmy').$sequence[0]['id'];
				$data = array(
					'fullname' => $this->input->post('nama_lengkap'),
					'email' => $this->input->post('email'),
					'password' => md5('donasi2018'),
					'no_telpon' => $this->input->post('no_telpon'),
					'id_user_role' => 2
				);
				$this->db->insert('app_users',$data);
				$id_user = $this->db->insert_id();
				$data_trx = array(
					'id' => $id_trx,
					'id_users' => $id_user,
					'id_kegiatan' => $this->input->post('id_kegiatan'),
					'jumlah_donasi' => $this->input->post('jumlah_donasi'),
					'unix_id' => $this->input->post('unix_id'),
					'id_bank_transfer' => $this->input->post('bank'),
					'created_at' => date('Y-m-d H:i:s')
				);
				$this->db->insert('app_trx_donatur',$data_trx);
				$data['row'] = $this->site->getData('trx_donasi',$id_trx);
				$this->load->view('content/_thankyou',$data);
			}
		}
	}

	public function sendEmail(){

	}
	
}
