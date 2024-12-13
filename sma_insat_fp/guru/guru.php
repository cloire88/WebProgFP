<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("Location:../auth/login.php");
    exit();
}

require_once "../config.php";
$title = "Guru - SMA Garuda Satu";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Guru</li>
            </ol>
            <div class="card">
                <div class="card-body">
                    <div class="hard-header">

                    </div>
                </div>
            </div>
        </div>
    <main>

<?php

require_once "../template/footer.php";

?>