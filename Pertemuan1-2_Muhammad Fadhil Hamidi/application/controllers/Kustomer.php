<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kustomer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kustomer_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' => 'View Data Kustomer',
            'userlog' => infoLogin(),
            'kustomer' => $this->Kustomer_model->getAll(),
            'content' => 'kustomer/index'
        );
        $this->load->view('template/main', $data);
    }
    public function laporan()
    {
        $data = array(
            'title' => 'Tambah Laporan Data kustomer',
            'content' => 'kustomer/laporan'
        );
        $this->load->view('template/main', $data);
    }
    public function save()
    {
        $this->Kustomer_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data kustomer Berhasil DiSimpan");
        }
        redirect('kustomer');
    }
    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Pelanggan',
            'content' => 'kustomer/add_form'
        );
        $this->load->view('template/main', $data);
    }
    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Kategori',
            'kustomer' => $this->Kustomer_model->getById($id),
            'content' => 'kustomer/edit_form'
        );
        $this->load->view('template/main', $data);
    }
    public function edit()
    {
        $this->Kustomer_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data kustomer Berhasil Diupdate");
        }
        redirect('kustomer');
    }
    function delete($id)
    {
        $this->Kustomer_model->delete($id);
        redirect('kustomer');
    }
}
