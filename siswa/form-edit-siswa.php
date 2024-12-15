<?php
require_once "../config.php";

$title = "Form Edit Data Siswa - SMA Indonesia Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

// Kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
    exit;
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="list-siswa.php">Siswa</a></li>
                <li class="breadcrumb-item active">Edit Siswa</li>
            </ol>
            <form method="POST" action="proses-edit-siswa.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                <div class="card">
                    <div class="card-header">
                    <span class="h5"><i class="fa-solid fa-square-plus me-1"></i>Tambah Siswa</span>
                    <button type="submit" name="simpan" class="btn btn-primary float-end">
                    <i class="fa-solid fa-floppy-disk me-1"></i>Simpan
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
                                    <input type="text" class="form-control" name="nis" placeholder="Masukkan NIS" value="<?php echo $siswa['nis']; ?>" required>
                                </p>
                                </div>
                                <div class="mb-3 row">
                                <p>
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" value="<?php echo $siswa['nama']; ?>" required>
                                </p>
                                </div>
                                <div class="mb-3 row">
                                <p>
                                    <label for="jurusan">Jurusan:</label>
                                    <select class="form-select" name="jurusan" required>
                                        <option value="IPA" <?php if ($siswa['jurusan'] == 'IPA') echo 'selected'; ?>>IPA</option>
                                        <option value="IPS" <?php if ($siswa['jurusan'] == 'IPS') echo 'selected'; ?>>IPS</option>
                                        <option value="Bahasa" <?php if ($siswa['jurusan'] == 'Bahasa') echo 'selected'; ?>>Bahasa</option>
                                    </select>
                                </p>
                                </div>
                                <div class="mb-3 row">
                                <p>
                                    <label for="alamat">Alamat:</label>
                                    <textarea class="form-control" name="alamat" placeholder="Masukkan alamat" required><?php echo $siswa['alamat']; ?></textarea>
                                </p>
                                </div>
                            </div>
                            <div class="col-4 text-center px-5">
                                <?php if (!empty($siswa['foto'])): ?>
                                    <img src="uploads/<?php echo $siswa['foto']; ?>" alt="Foto Siswa" class="rounded-image mb-3" width="120" height="120">
                                <?php else: ?>
                                    <img src="../asset/image/default.jpg" alt="Default Foto" class="img-thumbnail mb-3" width="150" height="150">
                                <?php endif; ?>
                                <input class="form-control form-control-sm" type="file" name="photo" accept="image/*">
                                <small class="text-secondary">Pilih foto PNG, JPG atau JPEG dengan ukuran maksimal 1MB</small>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </main>


<?php
require_once "../template/footer.php";
?>
