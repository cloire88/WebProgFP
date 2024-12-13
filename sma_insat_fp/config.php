
<?php

$server = "localhost:8111";
$user = "root";
$password = "";
$db_name = "sma_insat_fp";

$db = new mysqli($server,$user,$password,$db_name);

if($db == TRUE){
    echo "Berhasil terhubung";
}

$main_url = "http://localhost/sma_insat_fp/";

?>
