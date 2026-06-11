<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdiModel');
    }

    public function index()
    {
        $data['prodi'] = $this->ProdiModel->getAll();

        $header['title'] = 'Program Studi';

        $this->load->view('layout/header', $header);
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['prodi'] = null;
        $data['action'] = base_url('prodi/simpan');
        $data['button'] = 'Simpan';

        $header['title'] = 'Tambah Prodi';

        $this->load->view('layout/header', $header);
        $this->load->view('prodi/form', $data);
        $this->load->view('layout/footer');
    }

    public function simpan()
    {
        $data = [
            'prodi_name'   => $this->input->post('prodi_name'),
            'prodi_strata' => $this->input->post('prodi_strata')
        ];

        $this->db->insert('prodi', $data);

        redirect('prodi');
    }

    public function ubah($id)
    {
        $data['prodi'] = $this->ProdiModel->getById($id);
        $data['action'] = base_url('prodi/update/'.$id);
        $data['button'] = 'Update';

        $header['title'] = 'Ubah Prodi';

        $this->load->view('layout/header', $header);
        $this->load->view('prodi/form', $data);
        $this->load->view('layout/footer');
    }

    public function update($id)
    {
        $data = [
            'prodi_name'   => $this->input->post('prodi_name'),
            'prodi_strata' => $this->input->post('prodi_strata')
        ];

        $this->db->where('prodi_id', $id);
        $this->db->update('prodi', $data);

        redirect('prodi');
    }

    public function hapus($id)
    {
        $this->db->where('prodi_id', $id);
        $this->db->delete('prodi');

        redirect('prodi');
    }
}