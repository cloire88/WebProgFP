<?php

include ("../config.php");

if (isset($_POST['daftar'])) {

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    // Handle file upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $photo_name = $_FILES['photo']['name'];
        $photo_tmp = $_FILES['photo']['tmp_name'];

        // Define upload directory and unique file name
        $upload_dir = __DIR__ . "/uploads/";
        $photo_path = $upload_dir . uniqid() . "_" . basename($photo_name);

        // Create the directory if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Move the uploaded file
        if (move_uploaded_file($photo_tmp, $photo_path)) {
            $photo_filename = basename($photo_path); // Store only the file name
        } else {
            die("Failed to upload the photo.");
        }
    } else {
        $photo_filename = null; // No photo uploaded
    }

    // Insert data into the database
    $stmt = $db->prepare("INSERT INTO siswa (foto, nis, nama, jurusan, alamat) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $photo_filename, $nis,  $nama, $jurusan, $alamat);

    if ($stmt->execute()) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        error_log("Database error: " . $stmt->error);
        header('Location: list.siswa.php?status=gagal');
    }

    $stmt->close();
} else {
    die("akses dilarang");
}

?>
