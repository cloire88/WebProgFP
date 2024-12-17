<?php
require_once ("../config.php");

if (isset($_POST['simpan'])) {
    // Sanitize and get POST values
    $nip     = htmlspecialchars($_POST['nip']);
    $nama    = htmlspecialchars($_POST['nama']);
    $alamat  = htmlspecialchars($_POST['alamat']);
    $email   = htmlspecialchars($_POST['email']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    
    // Check if NIP is provided and is not empty
    if (empty($nip)) {
        die("NIP cannot be empty.");
    }

    // Query the database to check if NIP already exists
    $cekNip = mysqli_query($db, "SELECT nip FROM tabel_guru WHERE nip = '$nip'");
    if (mysqli_num_rows($cekNip) > 0) {
        // Redirect with a message if NIP already exists
        header('location:add-guru.php?msg=cancel');
        exit(); // Stop further execution
    }

    // Check for file upload (photo)
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $photo_name = $_FILES['image']['name'];
        $photo_tmp = $_FILES['image']['tmp_name'];

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

    $query = "INSERT INTO tabel_guru (foto, nip, nama, alamat, email, jabatan) 
                VALUES ('$photo_filename', '$nip', '$nama', '$alamat', '$email', '$jabatan')";
    $insert_data = mysqli_query($db, $query);
    // Check if insertion was successful
    if ($insert_data) {
        header('Location:add-guru.php?msg=added');
    } else {
        error_log("Database error: " . mysqli_error($db));
        header('Location:add-guru.php?msg=cancel');
    }
}

if (isset($_POST['update'])) {
    $id      = $_POST['id'];
    $nip     = htmlspecialchars($_POST['nip']);
    $nama    = htmlspecialchars($_POST['nama']);
    $alamat  = htmlspecialchars($_POST['alamat']);
    $email   = htmlspecialchars($_POST['email']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $foto = htmlspecialchars($_POST['fotoLama']);

    $sqlGuru = mysqli_query($db, "SELECT * FROM tabel_guru WHERE id = $id");
    $data = mysqli_fetch_array($sqlGuru);
    $curNIP = $data['nip'];

    $newNIP = mysqli_query($db, "SELECT nip FROM tabel_guru WHERE nip = '$nip'");

    if ($nip !== $curNIP) {
        if (mysqli_num_rows($newNIP) > 0) {
            header("location:main-guru.php?msg=cancel");
            return;
        }
    }

    mysqli_query($db, "UPDATE tabel_guru SET nip = '$nip', nama = '$nama', alamat = '$alamat', email = '$email', jabatan = '$jabatan' WHERE id = $id");

    header("location:main-guru.php?msg=updated");
}
?>