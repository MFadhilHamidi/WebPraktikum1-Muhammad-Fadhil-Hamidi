<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    public function kustomerlap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA KUSTOMER', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NAMA CUSTOMER', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TELP', 1, 0, 'C');
        $pdf->Cell(37, 6, 'EMAIL', 1, 0, 'C');
        $pdf->Cell(45, 6, 'ALAMAT', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('kustomer')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(37, 6, $d['nik'], 1, 0);
            $pdf->Cell(37, 6, $d['name'], 1, 0);
            $pdf->Cell(30, 6, $d['telp'], 1, 0);
            $pdf->Cell(37, 6, $d['email'], 1, 0);
            $pdf->Cell(45, 6, $d['alamat'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_customer.pdf', 'I');
    }
    public function headerlap()
    {
        $this->load->view('kustomer/report_header_only');
    }
    public function kustomerfull()
    {
        $this->load->view('kustomer/report_kustomerfull_only');
    }
    public function kustomerkustom()
    {
        $this->load->view('kustomer/report_kustomerkustom_only');
    }


    public function kategorilap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA KATEGORI', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(15, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(180, 6, 'NAMA', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('kategori')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(15, 6, $i++, 1, 0);
            $pdf->Cell(180, 6, $d['name'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_kategori.pdf', 'I');
    }
    public function headerkat()
    {
        $this->load->view('kategori/report_header_only');
    }
    public function kategorifull()
    {
        $this->load->view('kategori/report_kategorifull_only');
    }
    public function kategorikustom()
    {
        $this->load->view('kategori/report_kategorikustom_only');
    }


    public function baranglap()
    {
        $pdf = new FPDF('P', 'mm', 'A3');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA BARANG', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(25, 6, 'BARKODE', 1, 0, 'C');
        $pdf->Cell(28, 6, 'NAMA BARANG', 1, 0, 'C');
        $pdf->Cell(28, 6, 'HARGA JUAL', 1, 0, 'C');
        $pdf->Cell(28, 6, 'HARGA BELI', 1, 0, 'C');
        $pdf->Cell(20, 6, 'STOK', 1, 0, 'C');
        $pdf->Cell(30, 6, 'KATEGORI ID', 1, 0, 'C');
        $pdf->Cell(30, 6, 'SATUAN ID', 1, 0, 'C');
        $pdf->Cell(30, 6, 'SUPPLIER ID', 1, 0, 'C');
        $pdf->Cell(30, 6, 'USER ID', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('barang')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(25, 6, $d['barkode'], 1, 0);
            $pdf->Cell(28, 6, $d['name'], 1, 0);
            $pdf->Cell(28, 6, $d['harga_jual'], 1, 0);
            $pdf->Cell(28, 6, $d['harga_beli'], 1, 0);
            $pdf->Cell(20, 6, $d['stok'], 1, 0);
            $pdf->Cell(30, 6, $d['kategori_id'], 1, 0);
            $pdf->Cell(30, 6, $d['satuan_id'], 1, 0);
            $pdf->Cell(30, 6, $d['supplier_id'], 1, 0);
            $pdf->Cell(30, 6, $d['user_id'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_barang.pdf', 'I');;
    }
    public function headerbar()
    {
        $this->load->view('barang/report_header_only');
    }
    public function barangfull()
    {
        $this->load->view('barang/report_barangfull_only');
    }
    public function barangkustom()
    {
        $this->load->view('barang/report_barangkustom_only');
    }


    public function satuanlap()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA SATUAN', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(15, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(100, 6, 'NAMA SATUAN', 1, 0, 'C');
        $pdf->Cell(70, 6, 'DESKRIPSI', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('satuan')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(15, 6, $i++, 1, 0);
            $pdf->Cell(100, 6, $d['name'], 1, 0);
            $pdf->Cell(70, 6, $d['deskripsi'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_satuan.pdf', 'I');
    }
    public function headersat()
    {
        $this->load->view('satuan/report_header_only');
    }
    public function satuanfull()
    {
        $this->load->view('satuan/report_satuanfull_only');
    }
    public function satuankustom()
    {
        $this->load->view('satuan/report_satuankustom_only');
    }


    public function userlap()
    {
        $pdf = new FPDF('P', 'mm', 'A3');
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 18);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(0, 5, 'LAPORAN DATA USER', 0, 1, 'C');
        $pdf->Cell(30, 8, '', 0, 1);
        $pdf->SetFont('Times', 'B', 9);
        $pdf->Cell(7, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(25, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(28, 6, 'USERNAME', 1, 0, 'C');
        $pdf->Cell(37, 6, 'NAMA', 1, 0, 'C');
        $pdf->Cell(28, 6, 'ROLE', 1, 0, 'C');
        $pdf->Cell(23, 6, 'NO HAPE', 1, 0, 'C');
        $pdf->Cell(36, 6, 'EMAIL', 1, 0, 'C');
        $pdf->Cell(30, 6, 'ALAMAT', 1, 0, 'C');
        $pdf->Cell(30, 6, 'IS ACTIVE', 1, 1, 'C');
        $i = 1;
        $data = $this->db->get('user')->result_array();
        foreach ($data as $d) {
            $pdf->SetFont('Times', '', 9);
            $pdf->Cell(7, 6, $i++, 1, 0);
            $pdf->Cell(25, 6, $d['nik'], 1, 0);
            $pdf->Cell(28, 6, $d['username'], 1, 0);
            $pdf->Cell(37, 6, $d['full_name'], 1, 0);
            $pdf->Cell(28, 6, $d['role'], 1, 0);
            $pdf->Cell(23, 6, $d['phone'], 1, 0);
            $pdf->Cell(36, 6, $d['email'], 1, 0);
            $pdf->Cell(30, 6, $d['address'], 1, 0);
            $pdf->Cell(30, 6, $d['is_active'], 1, 1);
        }
        $pdf->SetFont('Times', '', 10);
        $pdf->Output('laporan_barang.pdf', 'I');;
    }
    public function headeruse()
    {
        $this->load->view('user/report_header_only');
    }
    public function userfull()
    {
        $this->load->view('user/report_userfull_only');
    }
    public function userkustom()
    {
        $this->load->view('user/report_userkustom_only');
    }
}
