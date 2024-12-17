<?php
session_start();
require_once "../config.php";

$title = "Mata Pelajaran - SMA Indonesia Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

// Proses Simpan Data
if (isset($_POST['simpan'])) {
    $pelajaran = $_POST['pelajaran'];
    $jurusan = $_POST['jurusan'];
    $guru = $_POST['guru'];

    $insert = mysqli_query($db, "INSERT INTO tabel_pelajaran (pelajaran, jurusan, guru) 
                                 VALUES ('$pelajaran', '$jurusan', '$guru')");

    if ($insert) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data.');</script>";
    }
}

// Proses Update Data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $queryEdit = mysqli_query($db, "SELECT * FROM tabel_pelajaran WHERE id='$id'");
    $dataEdit = mysqli_fetch_assoc($queryEdit);
    $pelajaranEdit = $dataEdit['pelajaran'];
    $jurusanEdit = $dataEdit['jurusan'];
    $guruEdit = $dataEdit['guru'];
}

if (isset($_POST['update'])) {
    $id = $_POST['id']; // Mengambil id yang disembunyikan
    $pelajaran = $_POST['pelajaran'];
    $jurusan = $_POST['jurusan'];
    $guru = $_POST['guru'];

    $update = mysqli_query($db, "UPDATE tabel_pelajaran SET pelajaran='$pelajaran', jurusan='$jurusan', guru='$guru' WHERE id='$id'");

    if ($update) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href = 'mata_pelajaran.php';
              </script>";
    } else {
        echo "<script>alert('Gagal memperbarui data.');</script>";
    }
}

// Proses Delete Data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($db, "DELETE FROM tabel_pelajaran WHERE id='$id'");
    echo "<script>
            alert('Data berhasil dihapus!');
            window.location.href = 'mata_pelajaran.php';
          </script>";
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Mata Pelajaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Mata Pelajaran</li>
            </ol>   

            <!-- Form Tambah / Update Pelajaran -->
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-plus"></i> <?= isset($dataEdit) ? 'Update Pelajaran' : 'Tambah Pelajaran'; ?>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <?php if (isset($dataEdit)) { ?>
                                    <input type="hidden" name="id" value="<?= $dataEdit['id']; ?>">
                                <?php } ?>
                                <div class="mb-3">
                                    <label for="pelajaran" class="form-label">Mata Pelajaran</label>
                                    <input type="text" class="form-control" id="pelajaran" name="pelajaran" value="<?= isset($pelajaranEdit) ? $pelajaranEdit : ''; ?>" placeholder="Nama Pelajaran" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-select" required>
                                    <option value="IPA">IPA</option>
                                        <option value="IPS">IPS</option>
                                        <option value="Bahasa">Bahasa</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="guru" class="form-label">Guru</label>
                                    <select name="guru" id="guru" class="form-select" required>
                                        <option value="" selected>-- Pilih Guru --</option>
                                        <?php
                                        $queryGuru = mysqli_query($db, "SELECT * FROM tabel_guru");
                                        while ($dataGuru = mysqli_fetch_array($queryGuru)) {
                                            echo "<option value='{$dataGuru['nama']}' " . (($guruEdit == $dataGuru['nama']) ? 'selected' : '') . ">{$dataGuru['nama']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <button type="submit" name="<?= isset($dataEdit) ? 'update' : 'simpan'; ?>" class="btn btn-primary"><?= isset($dataEdit) ? 'Update' : 'Simpan'; ?></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Tabel Data Pelajaran -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-list"></i> Data Pelajaran
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Jurusan</th>
                                        <th>Guru</th>
                                        <th>Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM tabel_pelajaran"); // Query ambil data
                                    $no = 1; // Inisialisasi nomor urut

                                    while ($data = mysqli_fetch_assoc($query)) {
                                        echo "<tr>
                                                <th scope='row'>{$no}</th>
                                                <td>{$data['pelajaran']}</td>
                                                <td>{$data['jurusan']}</td>
                                                <td>{$data['guru']}</td>
                                                <td align='center'>
                                                    <a href='?edit={$data['id']}' class='btn btn-sm btn-warning' title='Update Pelajaran'>
                                                        <i class='fa-solid fa-pen'></i>
                                                    </a>
                                                    <a href='?hapus={$data['id']}' class='btn btn-sm btn-danger' title='Hapus Pelajaran' onclick='return confirm(\"Yakin ingin menghapus?\");'>
                                                        <i class='fa-solid fa-trash'></i>
                                                    </a>
                                                </td>
                                              </tr>";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once "../template/footer.php"; ?>
</div>
