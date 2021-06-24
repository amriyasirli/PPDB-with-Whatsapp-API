<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
        {
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			$this->load->model(array('AutoNumber_model'));
			$this->load->library(array('session', 'upload'));
        }
	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('register');
        $this->load->view('templates/footer');
	}

	public function add()
	{
		// Auto Number Untuk Nomor Pendaftaran
		$row = $this->AutoNumber_model->id_terakhir();
        $config['id'] = $row->nomor_pendaftaran;
        $config['digit'] = 3;
        $this->auto_number->config($config);
        $nomor_pendaftaran = $this->auto_number->generate_id();
		
		// Auto Number Untuk Id Siswa
		$row = $this->AutoNumber_model->id_terakhir();
        $config['id'] = $row->nomor_pendaftaran;
        $config['awalan'] = 2021;
        $config['digit'] = 3;
        $this->auto_number->config($config);
        $id_siswa = $this->auto_number->generate_id();
		
		$pendaftaran = [
			'nomor_pendaftaran' =>$nomor_pendaftaran,
			'pendaftaran_id_siswa' =>$id_siswa,
			'tanggal_pendaftaran' =>date('Y-m-d'),
			'status_pendaftaran' =>0,
		];
		$this->db->insert('pendaftaran',$pendaftaran);

		$data_siswa = [
			'id_siswa' =>$id_siswa,
			'nama_siswa' =>$this->input->post('nama_siswa'),
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
			'tanggal_lahir' =>$this->input->post('tanggal_lahir'),
			'tempat_lahir' =>$this->input->post('tempat_lahir'),
			'agama' =>$this->input->post('agama'),
			'alamat' =>'alamat',
			'nik' =>$this->input->post('nik'),
			'nomor_whatsapp' =>$this->input->post('nomor_whatsapp'),
			'email' =>$this->input->post('email'),
		];
		$this->db->insert('siswa',$data_siswa);

		$data_sekolah = [
			'id_sekolah_asal' =>$id_siswa,
			'nama_sekolah' =>$this->input->post('nama_sekolah'),
			'tahun_lulus' =>$this->input->post('tahun_lulus'),
			'alamat_sekolah' =>$this->input->post('alamat_sekolah'),
			'kode_pos' =>$this->input->post('kode_pos'),
			'rata_nilai' =>$this->input->post('rata_nilai'),
		];
		$this->db->insert('sekolah_asal',$data_sekolah);

		$data_orangTua = [
			'id_orangtua_siswa' =>$id_siswa,
			'nama_ayah' =>$this->input->post('nama_ayah'),
			'pendidikan_ayah' =>$this->input->post('pendidikan_ayah'),
			'pekerjaan_ayah' =>$this->input->post('pekerjaan_ayah'),
			'nama_ibu' =>$this->input->post('nama_ibu'),
			'pendidikan_ibu' =>$this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' =>$this->input->post('pekerjaan_ibu'),
			'whatsapp_orangtua' =>$this->input->post('whatsapp_orangtua'),
		];
		$this->db->insert('orang_tua',$data_orangTua);
		
		$data_akun = [
			'id_akun' =>$id_siswa,
			'nama_akun' =>$this->input->post('nama_siswa'),
			'username' =>$id_siswa,
			'password' =>$id_siswa,
			'role' =>2,
			'status' =>0,
		];
		$this->db->insert('akun',$data_akun);

		// Konfigurasi file 
		$upload_image=$_FILES['ijazah_terakhir'];
		$upload_image=$_FILES['rapor'];
		$upload_image=$_FILES['kartu_keluarga'];
		$upload_image=$_FILES['foto'];
		$config['upload_path']          = './assets/file/';
		$config['allowed_types'] = 'pdf|png|jpg|jpeg|svg|';
		$config['max_size']     = '100048';
		$config['encrypt_name'] = TRUE;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('ijazah_terakhir')) {
			// @unlink('./assets/file/quiz/'.$fotolama);
			$ijazah_terakhir = $this->upload->data('file_name');

			if ($this->upload->do_upload('rapor')) {
				// @unlink('./assets/file/quiz/'.$fotolama);
				$rapor = $this->upload->data('file_name');
				
				if ($this->upload->do_upload('kartu_keluarga')) {
					// @unlink('./assets/file/quiz/'.$fotolama);
					$kartu_keluarga = $this->upload->data('file_name'); 

					if ($this->upload->do_upload('foto')) {
						// @unlink('./assets/file/quiz/'.$fotolama);
						$foto = $this->upload->data('file_name'); 
						
					}
					
				}
				
			}
			// var_dump($ijazah_terakhir);
			// var_dump($rapor);
			// var_dump($kartu_keluarga);
			// var_dump($foto);
			// die();
			
		}else{
			echo $this->upload->display_errors();
		}

		

		$data_file = [
			'id_file_upload' =>$id_siswa,
			'ijazah_terakhir' =>$ijazah_terakhir,
			'rapor' =>$rapor,
			'kartu_keluarga' =>$kartu_keluarga,
			'foto' =>$foto,
		];
		$this->db->insert('file_upload',$data_file);
		
		$this->session->set_flashdata('success', 'Pendaftaran Peserta Didik Baru atas nama <b>'.$this->input->post('nama_siswa').'</b> telah terdaftar di sistem kami. Bukti pendaftaran akan dikirim melalui nomor whatsapp <b>'.$this->input->post('nomor_whatsapp').'</b>');
		
		
		redirect('Register/register_success');
		
	}

	public function register_success()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('register_success');
        $this->load->view('templates/footer');
	}

	
}
