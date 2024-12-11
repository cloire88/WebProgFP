<?php

include ("../config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

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

    $update_data = "UPDATE siswa SET foto='$photo_filename', nis ='$nis', nama='$nama', jurusan='$jurusan', alamat='$alamat'  WHERE id=$id";
    $query = mysqli_query($db, $update_data);

    if($query){
        header ('Location: list-siswa.php?status=sukses');
    }
    else{
        header ('Location: list-siswa.php?status=gagal');
    }

}
else if(isset($_POST['batal'])){
    header('Location: list-siswa.php?status=sukses');
}
else{
    die ("akses dilarang");
}

?>