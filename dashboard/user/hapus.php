<?php
require('../../config/koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$row = mysqli_fetch_array($query);

mysqli_query($conn, "DELETE FROM user WHERE id='$id'");
header('location:' . $base_url . '/dashboard/user');
