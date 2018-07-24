<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

	public function index()
	{
		$this->load->view('manage/content/login');
	}

	public function dashboard()
	{
		$data['content'] = 'manage/layout/content';
		$this->load->view('manage/main_layout',$data);
	}
}
