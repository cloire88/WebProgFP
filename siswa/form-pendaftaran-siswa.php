<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Data Siswa</title>
</head>

<body>

    <form method="POST" action="proses-pendaftaran-siswa.php" enctype="multipart/form-data">
        <p>
            <label for="photo">Foto:</label>
            <input type="file" name="photo" accept="image/*">
        </p>
        <p>
            <label for="nis">NIS:</label>
            <input type="text" name="nis" placeholder="Masukkan NIS" required>
        </p>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama" required>
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
            <input type="text" name="alamat" placeholder="Masukkan alamat" required>
        </p>
        <button a href="list-siswa">Batal</button>
        <button type="submit" name="daftar">Daftar</button>
    </form>

</body>
