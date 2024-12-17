<?php

require_once "../config.php";

$id = $_GET["id"];
$foto = $_GET["foto"];

mysqli_query($db, "DELETE FROM tabel_guru WHERE id = $id");

header("location:main-guru.php?msg=deleted");
?>