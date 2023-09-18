<?php 
//koneksi database
include 'koneksi/koneksi.php';
session_start();
    $username = $_SESSION['username'];

//menangkap data yang dikirim dari form
$payroll = $_POST['payroll'];
$nama_karyawan = $_POST['nama_karyawan'];
$tgl_lahir = $_POST['tgl_lahir'];
$umur = $_POST['umur'];
$department = $_POST['department'];
$nama_dokter = $_POST['nama_dokter'];
$diagnosa = $_POST['diagnosa'];
$terapi = $_POST['terapi'];
$jumlah_obat = $_POST['jumlah_obat'];
$tanggal = $_POST['tanggal'];
$waktu  = $_POST['waktu'];
$surat = $_POST['surat'];
if($surat==="Tidak"){
    $jumlah_hari=0;
    mysqli_query($koneksi,"INSERT INTO tb_periksa values('','$payroll','$nama_karyawan','$tgl_lahir','$umur','$department',
                                                    '$nama_dokter','$diagnosa','$terapi','$jumlah_obat','$tanggal',
                                                    '$waktu','$surat','$jumlah_hari')");
    $_SESSION["sukses"] = 'berhasil';
    header("location:dashboard.php");
}else{
    $jumlah_hari=$_POST['jumlah_sakit'];

    mysqli_query($koneksi,"INSERT INTO tb_periksa values('','$payroll','$nama_karyawan','$tgl_lahir','$umur','$department',
                                                    '$nama_dokter','$diagnosa','$terapi','$jumlah_obat','$tanggal',
                                                    '$waktu','$surat','$jumlah_hari')");

    $_SESSION["sukses"] = 'berhasil';
    $last_id = mysqli_insert_id($koneksi);
    $data = mysqli_query($koneksi,"SELECT * from tb_user where username = '$username'");
    $q = mysqli_fetch_array($data);
    $dokter = $q['nama'];
    mysqli_query($koneksi,"INSERT INTO tb_surat values('$last_id','$payroll','$nama_karyawan','$department','$jumlah_hari','$tanggal','$diagnosa','$dokter')");

    //mengalihkan halaman kembali ke index.php
    header("location:surat.php?id=$last_id");
}

?>