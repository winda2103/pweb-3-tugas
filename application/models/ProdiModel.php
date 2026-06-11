<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdiModel extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('prodi')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('prodi', [
            'prodi_id' => $id
        ])->row_array();
    }
}