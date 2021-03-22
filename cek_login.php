<?php

//panggil koneksi database
include "./inc/koneksi.php";

$pass = $_POST['password'];
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if ($level == "admin")
        {
            header('location:index.php');
        } 
        elseif ($level == "hotel") 
        {
            header('location:index_hot.php');
        }
        elseif ($level == "corporate") 
        {
            header('location:index_cor.php');
        }
        elseif ($level == "ecomm") 
        {
            header('location:index_eco.php');
        }
        elseif ($level == "marketing") 
        {
            header('location:index_mar.php');
        }
        elseif ($level == "outbound") 
        {
            header('location:index_out.php');
        }
        elseif ($level == "document") 
        {
            header('location:index_doc.php');
        } 
        elseif ($level == "tiket") 
        {
            header('location:index_tic.php');
        }
        elseif ($level == "counter") 
        {
            header('location:index_coun.php');
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}
