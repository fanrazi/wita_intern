<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "wita_intern";

$koneksi = mysqli_connect($server, $user, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 