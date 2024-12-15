<?php
require_once "../config.php";


$title = "Dashboard - SMA Indonesia Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>
<html>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3>Daftar Siswa</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Siswa</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list me-2"></i>Siswa</span>
                    <a href="<?= $main_url ?>siswa/form-pendaftaran-siswa.php" 
                    class="btn btn-sm btn-primary float-end">
                    <i class="fa-solid fa-plus me-1"></i>Tambah Siswa</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col"><center>Foto</center></th>
                                <th scope="col"><center>NIS</center></th>
                                <th scope="col"><center>Nama</center></th>
                                <th scope="col"><center>Jurusan</center></th>
                                <th scope="col"><center>Alamat</center></th>
                                <th scope="col"><center>Tindakan</center></th>
                            </tr>
                        </thead>
                        <tbody>
        <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while ($siswa = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td align="center">
                    <?php if (!empty($siswa['foto'])) { ?>
                        <img src="uploads/<?php echo htmlspecialchars($siswa['foto'], ENT_QUOTES, 'UTF-8'); ?>" alt="Foto" class="rounded-circle" width= "80px" height="80px">
                    <?php } else { ?>
                        <img src="../asset/image/default.jpg" 
                            alt="Default Foto" 
                            class="rounded-circle" 
                            style="width: 80px; height: 80px; object-fit: cover;">
                    <?php } ?>
                </td>
                <td align="center"><?php echo htmlspecialchars($siswa['nis'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td align="center"><?php echo htmlspecialchars($siswa['nama'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td align="center"><?php echo htmlspecialchars($siswa['jurusan'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td align="center"><?php echo htmlspecialchars($siswa['alamat'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td align="center">
                    <a href="form-edit-siswa.php?id=<?php echo htmlspecialchars($siswa['id'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <a href="hapus-siswa.php?id=<?php echo htmlspecialchars($siswa['id'], ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
                    </table>
                </div>
            </div>
            <br>
            <?php $total_siswa =mysqli_num_rows($query);?>
            <p>Total: <?php echo $total_siswa; ?></p>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        </div>
    </main>
</html>
<?php

require_once "../template/footer.php";

?>
