<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('AutoNumber_model'));
		$this->load->library(array('session', 'upload'));
	}
	
	public function index()
	{
		$data['data_siswa'] = $this->db->get('siswa')->result();
		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('admin', $data);
        $this->load->view('templates/footer');
	}
}
