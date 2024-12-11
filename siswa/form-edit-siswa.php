<?php
include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>
    <fieldset>
    <form method="POST" action="proses-edit-siswa.php" enctype="multipart/form-data">

            
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="photo">Foto:</label>
            <input type="file" name="image" accept="image/*">
        </p>
        <p>
            <label for="nis">NIS:</label>
            <input type="text" name="nis" placeholder="Masukkan NIS" value="<?php echo $siswa['nis'] ?>" >
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="<?php echo $siswa['nama'] ?>" >
        </p>
        <p>
            <label for="jurusan">Jurusan:</label>
            <select name="jurusan" required>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Bahasa">Bahasa</option>
            </select>
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" placeholder="Masukkan alamat" value="<?php echo $siswa['alamat'] ?>">
        </p>
        <input type="submit" value="Batal" name="batal" />
        <input type="submit" value="Simpan" name="simpan" />
        </form>
    <fieldset>
    </body>
</html>