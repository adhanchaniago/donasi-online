<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

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
		$data['content'] = 'manage/content/_kegiatan';
		$this->load->view('manage/main_layout',$data);
	}

	public function konfirmasi()
	{
		$data['content'] = 'manage/content/_konfirmasi';
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
			$data['content'] = 'manage/content/_donasi';
		}elseif($act == 'bank'){
			$data['content'] = 'manage/content/_bank';
		}else{
			$data['content'] = 'manage/content/_user';
		}
		$this->load->view('manage/main_layout',$data);
	}
}
