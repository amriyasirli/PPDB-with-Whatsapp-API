<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AutoNumber_model extends CI_Model {

    public function id_terakhir()
    {
        $this->db->select('nomor_pendaftaran');
        $this->db->from('pendaftaran');
        $this->db->order_by('nomor_pendaftaran', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }
}
