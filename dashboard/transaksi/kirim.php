<?php
require('../../config/koneksi.php');
$query = mysqli_query($conn, "UPDATE transaksi SET status = 'pengiriman' WHERE kode_transaksi='" . $_GET['trx'] . "'");
header('location:' . $base_url . '/dashboard/transaksi');
