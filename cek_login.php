<?php 
session_start();

include 'koneksi/koneksi.php';

$username = $_POST['username'];
$password = MD5($_POST['password']);

$data = mysqli_query($koneksi,"SELECT * from tb_user where username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['username'] = $username;
	header("location:dashboard.php");
}else {
	header("location:index.php?pesan=gagal");
}
?>