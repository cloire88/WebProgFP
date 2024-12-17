<?php

session_start();

require_once "../config.php";
$title = "Tambah Guru - SMA Garuda Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$id = $_GET['id'];

$queryGuru = mysqli_query($db, "SELECT * FROM tabel_guru WHERE id = $id");
$data = mysqli_fetch_array($queryGuru);
?>  

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="main-guru.php">Guru</a></li>
                <li class="breadcrumb-item active">Update Guru</li>
            </ol>
            <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <span class="h5 my-2"><i class="fa-solid fa-pen-to-square"></i> Update Guru</span>
                        <button type="submit" name="update" class="btn btn-primary float-end">
                            <i class="fa-solid fa-floppy-disk"></i> Update
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="col-4 text-center float-end me-3">
                            <input type="hidden" name="fotoLama" value="<?=$data['foto'] ?>">
                            <img src="../asset/image/default.png" class="mb-3 rounded-circle" width="30%" alt="Foto Guru">
                            <input type="file" name="image" class="form-control form-control-sm mb-2">
                            <small class="text-secondary">Pilih foto PNG, JPG, atau JPEG dengan ukuran maksimal 1 MB</small>
                            <div><small class="text-secondary">width = height</small></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <input type="hidden" name="id" value="<?=$data['id'] ?>">
                                <div class="mb-3 row">
                                    <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                                    <label for="nip" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" name="nip" pattern="[0-9]{18,}" title="Minimal 18 angka"
                                            class="form-control ps-2 border-0 border-bottom" value="<?=$data['nip'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <label for="nama" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" name="nama" class="form-control ps-2 border-0 border-bottom"
                                            value="<?=$data['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required><?=$data['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <label for="email" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" name="email" id="email" class="form-control ps-2 border-0 border-bottom" 
                                            value="<?=$data['email'] ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                    <label for="jabatan" class="col-sm-1 col-form-label">:</label>
                                    <div class="col-sm-9" style="margin-left: -50px;">
                                        <input type="text" name="jabatan" id="jabatan" class="form-control ps-2 border-0 border-bottom" 
                                            value="<?=$data['jabatan'] ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
            </form>
        </div>
    </main>
<?php


require_once "../template/footer.php";

?>