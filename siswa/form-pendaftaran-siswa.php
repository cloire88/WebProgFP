<?php
require_once "../config.php";


$title = "Form Tambah Data Siswa - SMA Indonesia Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="list-siswa.php">Siswa</a></li>
                <li class="breadcrumb-item active">Tambah Siswa</li>
            </ol>
            <form method="POST" action="proses-pendaftaran-siswa.php" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <span class="h5"><i class="fa-solid fa-square-plus me-1"></i>Tambah Siswa</span>
                    <button type="submit" name="daftar" class="btn btn-primary float-end">
                        <i class="fa-solid fa-floppy-disk me-1"></i>Daftar
                    </button>
                    <button class="btn btn-danger float-end me-1"a href="list-siswa"><i class="fa-solid fa-xmark"></i>
                    Batal</button>
                </div>
             <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3 row">
                            <p>
                                <label for="nis">NIS:</label>
                                <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" required>
                            </p>
                        </div>
                        <div class="mb-3 row">
                            <p>
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required>
                            </p>
                        </div>
                        <div class="mb-3 row">
                            <p>
                                <label for="jurusan">Jurusan:</label>
                                <select class="form-select" name="jurusan" required>
                                    <option selected>--Pilih Jurusan--</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="Bahasa">Bahasa</option>
                                </select>
                            </p>
                        </div>
                        <div class="mb-3 row">
                            <p>
                                <label for="alamat">Alamat:</label>
                                <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required></textarea>
                            </p>
                        </div>  
                    </div>
                    <div class="col-4 text-center px-5">
                    <img src="../asset/image/default.jpg" alt="" class="mb-3" width="40%">
                    <input class="form-control form-control-sm" type="file" name="photo" accept="image/*">
                    <small class="text-secondary">Pilih foto PNG, JPG atau JPEG dengan ukuran maximal 1MB</small>
                    <div>
                        <small class="text-secondary"> width = height</small>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </main>



<?php

require_once "../template/footer.php";

?>
