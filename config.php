<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "sma_insat_fp";

$db = new mysqli($server,$user,$password,$db_name);

if($db == TRUE){
    echo "Berhasil terhubung";
}

?>