<?php
$pdf = new FPDF('P', 'mm', 'A3');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/cart.jpg', 30, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Website :' . 'WWW.HARUMBERSATU.COM' . ' E-MAIL:' . 'admin@harumbersatu.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Banjarmasin Utara' . ' Telp. / Fax : ' . '081349685149' . ' / ' . 'KOPERASI HARUM MANIS BERSATU', 0, 1, 'C');

$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);

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
