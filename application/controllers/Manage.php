<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
	public function index()
	{
		$data['content'] = 'manage/layout/content';
		$this->load->view('manage/main_layout',$data);
	}

	public function login()
	{
		$data['content'] = 'manage/content/login';
		$this->load->view('manage/content', $data);
	}
}
