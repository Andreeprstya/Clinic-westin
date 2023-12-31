<!DOCTYPE html>
<html lang="en">
    <?php
    require_once("koneksi/koneksi.php");
    session_start();
    
    if($_SESSION['username']==""){
        header("location:index.php?pesan=gagal");
    }
    $username = $_SESSION['username'];
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Westin Resort Nusa Dua Bali | Clinics</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="assets/images/logo/icon.png" type="image/png">
    <link rel="stylesheet" href="assets/extensions/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/extensions/@icon/dripicons/dripicons.css">
    <link rel="stylesheet" href="assets/css/pages/dripicons.css">
    <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="assets/images/logo/bonvoy.png">
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li
                class="sidebar-item active">
                <a href="dashboard.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="logout.php" class='sidebar-link'>
                    <div class="icon dripicons dripicons-exit"></div>
                    <span>Log Out</span>
                </a>
            </li>
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-6">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Halaman Pemeriksaan</h3>
                <p class="text-subtitle text-muted"></p>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                        <h4 class="card-title">Cek Payroll Karyawan</h4>
                        
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <form action="dashboard.php" method="GET">
                                                <input class="dataTable-input" placeholder="Cari Payroll...." type="number" name="cari">
                                                <button type="submit" class="btn btn-primary btn-lg"><div class="icon dripicons dripicons-search"></div></button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                    if(isset($_GET['cari'])){
                                        if($_GET['cari']==NULL){
                                            ?>
                                            <i>Payroll Tidak DItemukan!!!</i>
                                            <?php
                                        }else{
                                            $cari = $_GET['cari'];
                                            $data = mysqli_query($koneksi,"SELECT * FROM tb_employees where payroll = ".$cari);
                                            $d = mysqli_fetch_array($data);

                                            $data2 = mysqli_query($koneksi,"SELECT * from tb_user where username = '$username'");
                                            $q = mysqli_fetch_array($data2);

                                            if($d==NULL){
                                                ?><i>Payroll Tidak DItemukan!!!</i>
                                                <?php
                                            }else{
                                                $tgl_lahir_y = date('Y', strtotime($d['tgl_lahir']));
                                                $today_y = date('Y', strtotime("today"));
                                                $tgl_lahir_b = date('m', strtotime($d['tgl_lahir']));
                                                $today_b = date('m', strtotime("today"));
                                                $tgl_lahir_h = date('d', strtotime($d['tgl_lahir']));
                                                $today_h = date('d', strtotime("today"));
                                                if($tgl_lahir_b > $today_b){
                                                    $umur = ($today_y-1)-$tgl_lahir_y;
                                                }else{
                                                    if($tgl_lahir_h > $today_h){
                                                        $umur = ($today_y-1)-$tgl_lahir_y;
                                                    }else{
                                                        $umur = $today_y-$tgl_lahir_y;
                                                    }
                                                }
                                                ?>
                                                <form action="proses_periksa.php" method="post" class="form" data-parsley-validate action="proses_periksa.php">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="first-name-column" class="form-label">Nama Karyawan</label>
                                                                <?php date_default_timezone_set('Asia/Singapore') ?>
                                                                <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d");?>">
                                                                <input type="hidden" name="waktu" value="<?php echo date("H:i:s");?>">
                                                                <input type="hidden" name="nama_dokter" value="<?php echo $q['nama']?>">
                                                                <input type="hidden" name="payroll" value="<?php echo $d['payroll']?>">
                                                                <input type="hidden" name="nama_karyawan" value="<?php echo $d['nama_karyawan']?>">
                                                                <input type="text" disabled class="form-control" placeholder="Nama Karyawan" data-parsley-required="true" value="<?php echo $d['nama_karyawan']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="last-name-column" class="form-label">Department</label>
                                                                <input type="hidden" name="department" value="<?php echo $d['department']?>">
                                                                <input type="text" id="last-name-column" disabled class="form-control" placeholder="Department" value="<?php echo $d['department']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="city-column" class="form-label">Tanggal Lahir</label>
                                                                <input type="hidden" name="tgl_lahir" value="<?php echo $d['tgl_lahir']?>">
                                                                <input type="text" disabled id="city-column" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $d['tgl_lahir']?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label for="country-floating" class="form-label">Umur</label>
                                                                <input type="hidden" name="umur" value="<?php echo $umur?>">
                                                                <input type="text" disabled id="country-floating" class="form-control" placeholder="Umur" value="<?php echo $umur." Tahun"?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="company-id-column" class="form-label">Diagnosa</label>
                                                                <input type="text" id="company-id-column" class="form-control" name="diagnosa" placeholder="Diagnosa" data-parsley-required="true">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="company-id-column" class="form-label">Jumlah Obat</label>
                                                                <input type="number" id="company-id-column" class="form-control" name="jumlah_obat" placeholder="Jumlah Obat" data-parsley-required="true">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="company-id-column" class="form-label">Terapi</label>
                                                                <textarea type="text" id="company-id-column" class="form-control" name="terapi" placeholder="Tuliskan obat apa saja yang diberikan...." data-parsley-required="true" cols="40" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-group mandatory">
                                                                <label for="company-id-column" class="form-label">Surat Sakit?</label>
                                                                <select class="form-select" name="surat" id="myselect">
                                                                    <option value="Tidak">Tidak</option>
                                                                    <option value="option4">Ya</option>
                                                                </select>
                                                                <br>
                                                                <input type="number" id="myinput" class="form-control" name="jumlah_sakit" placeholder="Jumlah Hari Sakit" style="display:none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button id="text" type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <h4 class="card-title">Histori</h4>
                                                    <table class="table table-striped" id="table1">
                                                        <thead>
                                                            <tr>
                                                                <th>Diagnosa</th>
                                                                <th>Terapi</th>
                                                                <th>Jumlah Obat</th>
                                                                <th>Nama Dokter</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                    $payroll = $d['payroll'];
                                                                    $data1 = mysqli_query($koneksi,"select * from tb_periksa where payroll ='$payroll' ORDER BY id_periksa DESC LIMIT 5");
                                                                    while ($p = mysqli_fetch_array($data1)) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $p['diagnosa']?></td>
                                                                    <td><?php echo $p['terapi']?></td>
                                                                    <td><?php echo $p['jumlah_obat']?></td>
                                                                    <td><?php echo $p['nama_dokter']?></td>
                                                                    <td><?php echo $p['tanggal']?></td>
                                                                    <td><?php echo $p['waktu']?></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?> 
                                                        </tbody>
                                                    </table>
                                                <?php
                                            }
                                        }
                                    }else{
                                            ?>
                                            <form class="form" data-parsley-validate>
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column" class="form-label">Nama Karyawan</label>
                                                            <input type="readonly" disabled id="first-name-column" class="form-control" placeholder="Nama Karyawan" name="nama" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="last-name-column" class="form-label">Department</label>
                                                            <input type="readonly" disabled id="last-name-column" class="form-control" placeholder="Department" name="department" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="city-column" class="form-label">Tanggal Lahir</label>
                                                            <input type="readonly" disabled id="city-column" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="country-floating" class="form-label">Umur</label>
                                                            <input type="readonly" disabled id="country-floating" class="form-control" name="umur" placeholder="Umur" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="company-id-column" class="form-label">Diagnosa</label>
                                                            <input type="text" id="company-id-column" class="form-control" name="Diagnosa" placeholder="Diagnosa" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="company-id-column" class="form-label">Jumlah Obat</label>
                                                            <input type="number" id="company-id-column" class="form-control" name="Jumlah Obat" placeholder="Jumlah Obat" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="company-id-column" class="form-label">Terapi</label>
                                                            <textarea type="text" id="company-id-column" class="form-control" name="Terapi" placeholder="Tuliskan obat apa saja yang diberikan...." data-parsley-required="true" cols="40" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group mandatory">
                                                            <label for="company-id-column" class="form-label">Surat Sakit?</label>
                                                            <select class="form-select" name="surat" id="myselect">
                                                                <option value="Tidak">Tidak</option>
                                                                <option value="option4">Ya</option>
                                                            </select>
                                                            <br>
                                                            <input type="number" id="myinput" class="form-control" name="jumlah_sakit" placeholder="Jumlah Hari Sakit" data-parsley-required="true" style="display:none">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button id="text" type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php
                                    }
                                    ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; The Westin Nusa Dua Bali</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a>Andre</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

<script>
    // Get references to the select and text input elements
    var select = document.getElementById("myselect");
    var textInput = document.getElementById("myinput");

    // Add an event listener for when the select value changes
    select.addEventListener("change", function() {
        // If the selected value is "option1", show the text input
        if (select.value === "option4") {
        textInput.style.display = "block";
        } else {
        textInput.style.display = "none";
        }
    });
</script>   
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="assets/extensions/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/parsley.js"></script>
<script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
<script src="assets/js/pages/sweetalert3.js"></script>>


<?php if(@$_SESSION['sukses']){ ?>
    <script>
        Swal.fire('Data Berhasil DiSimpan!')
    </script>
<?php unset($_SESSION['sukses']); } ?>

</body>

</html>
