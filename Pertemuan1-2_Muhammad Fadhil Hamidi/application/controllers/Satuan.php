<?php
defined('BASEPATH') or exit('No direct script access allowed');
class satuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Satuan_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'userlog' => infoLogin(),
            'satuan' => $this->Satuan_model->getAll(),
            'content' => 'satuan/index'
        );
        $this->load->view('template/main', $data);
    }
    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Satuan',
            'content' => 'satuan/add_form'
        );
        $this->load->view('template/main', $data);
    }
    public function save()
    {
        $this->Satuan_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Satuan Berhasil Disimpan");
        }
        redirect('satuan');
    }
    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Satuan',
            'satuan' => $this->Satuan_model->getById($id),
            'content' => 'satuan/edit_form'
        );
        $this->load->view('template/main', $data);
    }
    public function edit()
    {
        $this->Satuan_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Satuan Berhasil DiUpdate");
        }
        redirect('satuan');
    }
    function delete($id)
    {
        $this->Satuan_model->delete($id);
        redirect('satuan');
    }
}