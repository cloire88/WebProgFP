<?php

require_once "../config.php";

if(isset($_POST['login'])){
    $usernameinput = htmlspecialchars($_POST['username']);
    $passwordinput = htmlspecialchars($_POST['password']);

    if($usernameinput == "admin"){
        if($passwordinput == "12345"){
            header("location:../index.php");
            exit;
        }
        else{
            echo "<script>
                alert('password salah..');
                document.location.href= 'login.php';
                </script>";
        }
    }
    else{
        echo "<script>
                alert('username tidak terdaftar..');
                document.location.href= 'login.php';
                </script>";
    }
    

}


?>