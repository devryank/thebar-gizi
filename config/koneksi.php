<?php

session_start();
$_SESSION['id'] = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$_SESSION['peran'] = isset($_SESSION['peran']) ? $_SESSION['peran'] : '';
$_SESSION['nama'] = isset($_SESSION['nama']) ? $_SESSION['nama'] : '';

$base_url = "http://" . $_SERVER['SERVER_NAME'] . "/thebar-gizi";
$img_path = $_SERVER['DOCUMENT_ROOT'] . "/thebar-gizi/assets/img";
$servername = "localhost";
$database = "thebar-gizi";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
