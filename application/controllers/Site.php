<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->load->view('main_layout');
	}

	public function action($type="",$act=""){
		if($type == 'add'){
			if($act == 'donasi'){
				$this->load->view('content/_form_donasi');
			}
		}
	}
}
