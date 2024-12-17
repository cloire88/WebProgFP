    <?php

    session_start();

    require_once "../config.php";
    $title = "Tambah Guru - SMA Garuda Satu";
    require_once "../template/header.php";
    require_once "../template/navbar.php";
    require_once "../template/sidebar.php";

    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
    } else {
        $msg = '';
    }

    $alert = '';
    if ($msg == 'cancel') {
        $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Tambah guru gagal, NIP sudah tersedia!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-labels="Close"></button>
        </div>';
    }
    if ($msg == 'notimage') {
        $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Tambah guru gagal, file yang anda upload bukanlah gambar.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-labels="Close"></button>
        </div>';
    }
    if ($msg == 'oversize') {
        $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Tambah guru gagal, maksimal ukuran gambar sebesar 1 mb.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-labels="Close"></button>
        </div>';
    }
    if ($msg == 'added') {
        $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Tambah guru berhasil, segera lakukan pergantian password!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-labels="Close"></button>
        </div>';
    }

    ?>  

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="main-guru.php">Guru</a></li>
                    <li class="breadcrumb-item active">Tambah Guru</li>
                </ol>
                <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                    <?php if ($msg != '') {
                        echo $alert;
                    } ?>
                <div class="card">
            <div class="card-header">
                <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Guru</span>
                <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
            </div>
            <div class="card-body">
                <div class="col-4 text-center float-end me-3">
                    <img src="../asset/image/default.png" class="mb-3" width="30%" alt="Foto Guru">
                    <input type="file" name="image" class="form-control form-control-sm mb-2">
                    <small class="text-secondary">Pilih foto PNG, JPG, atau JPEG dengan ukuran maksimal 1 MB</small>
                    <div><small class="text-secondary">width = height</small></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3 row">
                            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                            <label for="nip" class="col-sm-1 col-form-label">:</label>
                            <div class="col-sm-9" style="margin-left: -50px;">
                                <input type="text" name="nip" pattern="[0-9]{18,}"
                                title="Minimal 18 angka" class="form-control ps-2 border-0 border-bottom" required> 
                            </div>
                        </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <label for="nama" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9" style="margin-left: -50px;">
                                    <input type="text" name="nama" class="form-control ps-2 border-0 border-bottom" required> 
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                <label for="alamat" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9" style="margin-left: -50px;">
                                    <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <label for="email" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9" style="margin-left: -50px;">
                                    <input type="text" name="email" id="email" class="form-control ps-2 border-0 border-bottom" required> 
                            </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                <label for="jabatan" class="col-sm-1 col-form-label">:</label>
                                <div class="col-sm-9" style="margin-left: -50px;">
                                    <input type="text" name="jabatan" id="jabatan" class="form-control ps-2 border-0 border-bottom" required> 
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