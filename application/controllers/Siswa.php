<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('AutoNumber_model'));
		$this->load->library(array('session', 'upload'));
	}
	
	public function detail($id)
	{
	/*---------------------------------------
	AMBIL DATA KE DATABASE BERDASARKAN ID SISWA
	---------------------------------------*/
		$data['pendaftaran'] = $this->db->where('pendaftaran_id_siswa', $id)->get('pendaftaran')->row();
		$data['siswa'] = $this->db->where('id_siswa', $id)->get('siswa')->row();
		$data['OrangTua'] = $this->db->where('id_orangtua_siswa', $id)->get('orang_tua')->row();
		$data['sekolah'] = $this->db->where('id_sekolah_asal', $id)->get('sekolah_asal')->row();
		$data['akun'] = $this->db->where('id_akun', $id)->get('akun')->row();
		$data['file'] = $this->db->where('id_file_upload', $id)->get('file_upload')->row();

		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
	}

	public function update($id)
	{
	/*---------------------------------------
	AMBIL DATA KE DATABASE BERDASARKAN ID SISWA
	---------------------------------------*/
		$data['pendaftaran'] = $this->db->where('pendaftaran_id_siswa', $id)->get('pendaftaran')->row();
		$data['siswa'] = $this->db->where('id_siswa', $id)->get('siswa')->row();
		$data['OrangTua'] = $this->db->where('id_orangtua_siswa', $id)->get('orang_tua')->row();
		$data['sekolah'] = $this->db->where('id_sekolah_asal', $id)->get('sekolah_asal')->row();
		$data['akun'] = $this->db->where('id_akun', $id)->get('akun')->row();
		$data['file'] = $this->db->where('id_file_upload', $id)->get('file_upload')->row();

		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('siswa/update', $data);
        $this->load->view('templates/footer');
	}

	public function update_aksi($id)
	{
		
	/*---------------------------------------
	UPDATE DATA KE DATABASE
	---------------------------------------*/
		$data_siswa = [
			'nama_siswa' =>$this->input->post('nama_siswa'),
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
			'tanggal_lahir' =>$this->input->post('tanggal_lahir'),
			'tempat_lahir' =>$this->input->post('tempat_lahir'),
			'agama' =>$this->input->post('agama'),
			'alamat' =>$this->input->post('alamat_siswa'),
			'nik' =>$this->input->post('nik'),
			'nomor_whatsapp' =>$this->input->post('nomor_whatsapp'),
			'email' =>$this->input->post('email'),
		];
		$this->db->where('id_siswa',$id);
		$this->db->update('siswa',$data_siswa);

		$data_sekolah = [
			'nama_sekolah' =>$this->input->post('nama_sekolah'),
			'tahun_lulus' =>$this->input->post('tahun_lulus'),
			'alamat_sekolah' =>$this->input->post('alamat_sekolah'),
			'kode_pos' =>$this->input->post('kode_pos'),
			'rata_nilai' =>$this->input->post('rata_nilai'),
		];
		$this->db->where('id_sekolah_asal',$id);
		$this->db->update('sekolah_asal',$data_sekolah);

		$data_orangTua = [
			'nama_ayah' =>$this->input->post('nama_ayah'),
			'pendidikan_ayah' =>$this->input->post('pendidikan_ayah'),
			'pekerjaan_ayah' =>$this->input->post('pekerjaan_ayah'),
			'nama_ibu' =>$this->input->post('nama_ibu'),
			'pendidikan_ibu' =>$this->input->post('pendidikan_ibu'),
			'pekerjaan_ibu' =>$this->input->post('pekerjaan_ibu'),
			'whatsapp_orangtua' =>$this->input->post('whatsapp_orangtua'),
		];
		$this->db->where('id_orangtua_siswa',$id);
		$this->db->update('orang_tua',$data_orangTua);
		

		// Konfigurasi file UPLOAD
		$file = $this->db->where('id_file_upload', $id)->get('file_upload')->row();
		// $ijazah_terakhir = $file->ijazah_terakhir;
		// $rapor = $file->rapor;
		// $kartu_keluarga = $file->kartu_keluarga;
		// $foto = $file->foto;
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
			@unlink('./assets/file/'.$file->ijazah_terakhir);
			$ijazah_terakhir = $this->upload->data('file_name');
			$data_ijazah = [
				'ijazah_terakhir' =>$ijazah_terakhir,
			];
			$this->db->where('id_file_upload',$id);
			$this->db->update('file_upload',$data_ijazah);
		}else if ($this->upload->do_upload('rapor')) {
			@unlink('./assets/file/'.$file->rapor);
			$rapor = $this->upload->data('file_name');
			$ijazah_terakhir = $this->upload->data('file_name');
			$data_rapor = [
				'rapor' =>$rapor,
			];
			$this->db->where('id_file_upload',$id);
			$this->db->update('file_upload',$data_rapor);
		}else if ($this->upload->do_upload('kartu_keluarga')) {
			@unlink('./assets/file/'.$file->kartu_keluarga);
			$kartu_keluarga = $this->upload->data('file_name');
			$ijazah_terakhir = $this->upload->data('file_name');
			$data_kk = [
				'kartu_keluarga' =>$kartu_keluarga,
			];
			$this->db->where('id_file_upload',$id);
			$this->db->update('file_upload',$data_kk); 
		}else if ($this->upload->do_upload('foto')) {
			@unlink('./assets/file/'.$file->foto);
			$foto = $this->upload->data('file_name'); 
			$ijazah_terakhir = $this->upload->data('file_name');
			$data_foto = [
				'foto' =>$foto,
			];
			$this->db->where('id_file_upload',$id);
			$this->db->update('file_upload',$data_foto);
		}else{
			echo $this->upload->display_errors();
		}
		$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><strong class="text-success"> Data '.$this->input->post('nama_siswa').' Berhasil Di Ubah !</strong></div>');
		redirect('Admin');
	}

	public function delete($id)
	{
	/*---------------------------------------
	DELETE DATA DI DATABASE
	---------------------------------------*/
		$siswa = $this->db->where('id_siswa', $id)->get('siswa')->row();
		$file = $this->db->where('id_file_upload', $id)->get('file_upload')->row();
		$this->db->where('pendaftaran_id_siswa',$id);
		$this->db->delete('pendaftaran');
		$this->db->where('id_siswa',$id);
		$this->db->delete('siswa');
		$this->db->where('id_sekolah_asal',$id);
		$this->db->delete('sekolah_asal');
		$this->db->where('id_orangtua_siswa',$id);
		$this->db->delete('orang_tua');
		$this->db->where('id_file_upload',$id);
		$this->db->delete('file_upload');
		$this->db->where('id_akun',$id);
		$this->db->delete('akun');

	/*---------------------------------------
	DELETE FILE DI DALAM FOLDER
	---------------------------------------*/
		@unlink('./assets/file/'.$file->ijazah_terakhir);
		@unlink('./assets/file/'.$file->rapor);
		@unlink('./assets/file/'.$file->kartu_keluarga);
		@unlink('./assets/file/'.$file->foto);

		$this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert"><strong class="text-danger"> Data '.$siswa->nama_siswa.' Berhasil Di Hapus !</strong></div>');
		redirect('Admin');
	}
}
