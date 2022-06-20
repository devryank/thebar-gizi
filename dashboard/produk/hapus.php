<?php
require('../../config/koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
$row = mysqli_fetch_array($query);
$kategori = $row['kategori'];
$foto = $row['foto'];

mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");
unlink("$img_path/$kategori/$foto");
header('location:' . $base_url . '/dashboard/produk');
