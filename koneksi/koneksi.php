<?php
    $koneksi = mysqli_connect('localhost','root','','db_klinik_westin');
    
    if (mysqli_connect_errno()) {
        echo "Gagal terhubung ke database" . mysqli_connect_error();
    }

?>