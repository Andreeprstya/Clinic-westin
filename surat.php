<?php
require('fpdf.php');

class PDF extends FPDF
{
    function Logo($logo2)
    {
        $this->Image($logo2,19,10,55);
    }

    // function Bonvoy($logo1)
    // {
    //     $this->Image($logo1,59,10,55);
    // }
    // Fungsi untuk membuat KopSurat surat
    function KopSurat($id)
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'SURAT KETERANGAN SAKIT', 0, 1, 'C');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Nomor: DC/'.date('d').'/'.date('m').'/'.date('Y').'/'.$id, 0, 1, 'C');
        $this->Ln(10);
    }

    // Fungsi untuk membuat konten surat
    function Content($nama, $department, $tanggal, $keterangan, $dokter)
    {
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Yang bertanda tangan di bawah ini,', 0, 1, 'L');
        $this->Cell(30, 10, 'Nama', 0, 0, 'L');
        $this->Cell(5, 10, ':', 0, 0, 'L');
        $this->Cell(0, 10, $nama, 0, 1, 'L');
        $this->Cell(30, 10, 'Department', 0, 0, 'L');
        $this->Cell(5, 10, ':', 0, 0, 'L');
        $this->Cell(0, 10, $department, 0, 1, 'L');
        $this->Ln(10);

        $this->Cell(0, 10, 'Dengan ini menerangkan bahwa pada tanggal ' . date('d F Y') . ', saudara/i tersebut di atas sedang dalam keadaan sakit dengan diagnosa', 0, 1, 'L');
        $this->MultiCell(0, 10, $keterangan, 0, 'L'); // Menggunakan MultiCell untuk line spacing yang lebih baik
        

        $this->Cell(0, 10, 'Demikian surat keterangan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.', 0, 1, 'L');
        

        $this->Cell(0, 10, 'Badung, ' . date('d F Y'), 0, 1, 'R');
        $this->Cell(0, 10, 'Yang Menerangkan,', 0, 1, 'R');
        $this->Ln(10);

        $this->Cell(0, 10, $dokter, 0, 1, 'R');
        $this->Cell(0, 10, 'Dokter Westin', 0, 1, 'R');
    }
}

// Buat objek PDF dengan ukuran A4 dan orientasi lanskap
$pdf = new PDF();
$pdf->AddPage('L', 'A4');

$date = date('d F Y');

// Data untuk surat
include 'koneksi/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * from tb_surat WHERE id_surat = $id");
while($d = mysqli_fetch_array($data)){
    $payroll=$d['payroll'];
    $nama = $d['nama_karyawan'];
    $department = $d['department'];
    $tanggal = $d['tanggal'];
    $keterangan = $d['diagnosa'].", memerlukan istirahat total selama ".$d['jumlah_hari']." hari.";
    $dokter = $d['dokter'];
    $id = $d['id_surat'];
}
// Panggil fungsi Content untuk membuat surat
$pdf->KopSurat($id);
$pdf->Content($nama, $department, $tanggal, $keterangan, $dokter);
$pdf->Logo('westin.jpg');
// $pdf->Bonvoy('bonvoy.jpg');

// Output PDF
 $filename = "surat_sakit/Surat Sehat $payroll-$date-$id.pdf";
 $pdf->Output($filename, 'F');
 header("location:dashboard.php");
?>
