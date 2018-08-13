<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('m_manage','manage');
        // if (!$this->session->userdata('logged_in')){
		// 	redirect('login');
		// }
    }

	public function index()
	{
		$this->load->view('manage/content/login');
	}

	public function dashboard()
	{
		$data['content'] = 'manage/content/_dashboard';
		$this->load->view('manage/main_layout',$data);
	}

	public function kegiatan()
	{
		$data['result'] = $this->manage->getData('kegiatan');
		$data['content'] = 'manage/content/_list_kegiatan';
		$this->load->view('manage/main_layout',$data);
	}

	public function konfirmasi()
	{
		$data['content'] = 'manage/content/_list_konfirmasi';
		$this->load->view('manage/main_layout',$data);
	}

	public function laporan($act)
	{
		if($act == 'donasi'){
			$data['content'] = 'manage/content/_laporan_donasi';
		}else{
			$data['content'] = 'manage/content/_laporan_kegiatan';
		}
		$this->load->view('manage/main_layout',$data);
	}

	public function data($act)
	{
		if($act == 'donasi'){
			$data['result'] = $this->manage->getData('donatur');
			$data['content'] = 'manage/content/_donasi';
		}elseif($act == 'bank'){
			$data['result'] = $this->manage->getData('bank');
			$data['content'] = 'manage/content/_bank';
		}else{
			$data['result'] = $this->manage->getData('user');
			$data['content'] = 'manage/content/_user';
		}
		$this->load->view('manage/main_layout',$data);
	}

	public function action($type="",$act="",$id=""){
		if($type == 'add'){
			if($act == 'kegiatan'){
				$data['content'] = 'manage/content/_kegiatan';
				$this->load->view('manage/main_layout',$data);
			}
		}else if($type == 'update'){
			if($act == 'kegiatan'){
				$data['content'] = 'manage/content/_kegiatan';
				$this->load->view('manage/main_layout',$data);
			}
		}else if($type == 'delete'){

		}
	}
}
