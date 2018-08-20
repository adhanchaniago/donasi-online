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

	public function execute($type=""){
		$post = $this->input->post();
		if($type == 'kegiatan'){
			$target_dir = "assets/upload/";
            $target_file = $target_dir . time().basename($_FILES["file_input"]["name"]);
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $imgName = time().basename($_FILES["file_input"]["name"]);
            move_uploaded_file($_FILES["file_input"]["tmp_name"], $target_file);

			$data = array(
				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
				'deskripsi' => $this->input->post('deskripsi'),
				'image' => $imgName,//$this->input->post('image'),
				'target_dana' => $this->input->post('target_dana'),
				'unix_id' => $this->generateUnixId(),
				'start_date' => $this->input->post('start_date'),
				'end_date' => $this->input->post('end_date'),
			);
			$this->manage->execute('app_kegiatan',$data);

			redirect('manage/kegiatan');
		}
	}

	public function generateUnixId($digits = 9){
	    $i = 0; //counter
	    $code = ""; //our default code is blank.
	    while($i < $digits){
	        //generate a random number between 0 and 9.
	        $code .= mt_rand(0, 9);
	        $i++;
	    }
	    echo substr($code,1,3);
	}
}

