<?php include('template/header.php'); ?>
<?php
$product_id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$product_id");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset($_POST['submit'])) {
    $result_transaksi_terakhir_user = mysqli_query($conn, "SELECT kode_transaksi, status FROM transaksi WHERE DATE(tanggal) = CURDATE() AND id_user = " . $_SESSION['id'] . " ORDER BY tanggal DESC LIMIT 1");
    $transaksi_terakhir_user = mysqli_fetch_array($result_transaksi_terakhir_user, MYSQLI_ASSOC);

    $result_transaksi_terakhir_semua = mysqli_query($conn, "SELECT kode_transaksi FROM transaksi WHERE DATE(tanggal) = CURDATE() ORDER BY tanggal DESC LIMIT 1");
    $transaksi_terakhir_semua = mysqli_fetch_array($result_transaksi_terakhir_semua, MYSQLI_ASSOC);

    $jumlah = $_POST['jumlah'];
    if ($transaksi_terakhir_semua == NULL) {
        $kode_transaksi = "INV-" . date('Ymd') . "0001";
        $user_id = $_SESSION['id'];
        $total = $row['harga'] * $_POST['jumlah'];
        $insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi VALUES('$kode_transaksi', $user_id, $total, now(), 'proses')");
        $insert_daftar_pembelian = mysqli_query($conn, "INSERT INTO daftar_pembelian VALUES(NULL, '$kode_transaksi', $product_id, $jumlah)");
    } else if ($transaksi_terakhir_user == NULL) {
        $nomor = substr($transaksi_terakhir_semua['kode_transaksi'], -4);
        $kode_transaksi = "INV-" . date('Ymd') . str_pad(intval($nomor) + 1, strlen($nomor), '0', STR_PAD_LEFT);
        $user_id = $_SESSION['id'];
        $total = $row['harga'] * $_POST['jumlah'];
        $insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi VALUES('$kode_transaksi', $user_id, $total, now(), 'proses')");
        $insert_daftar_pembelian = mysqli_query($conn, "INSERT INTO daftar_pembelian VALUES(NULL, '$kode_transaksi', $product_id, $jumlah)");
    } else {
        if ($transaksi_terakhir_user['status'] == 'selesai') {
            $nomor = substr($transaksi_terakhir_semua['kode_transaksi'], -4);
            $kode_transaksi = "INV-" . date('Ymd') . str_pad(intval($nomor) + 1, strlen($nomor), '0', STR_PAD_LEFT);

            $user_id = $_SESSION['id'];
            $total = $row['harga'] * $_POST['jumlah'];
            $insert_transaksi = mysqli_query($conn, "INSERT INTO transaksi VALUES('$kode_transaksi', $user_id, $total, now(), 'proses')");

            $insert_daftar_pembelian = mysqli_query($conn, "INSERT INTO daftar_pembelian VALUES(NULL, '$kode_transaksi', $product_id, $jumlah)");
            // if ($insert_transaksi && $insert_daftar_pembelian) {
            //     echo 'berhasil';
            // } else {
            // }
        } else {
            $kode_transaksi = $transaksi_terakhir_user['kode_transaksi'];
            $insert_daftar_pembelian = mysqli_query($conn, "INSERT INTO daftar_pembelian VALUES(NULL, '$kode_transaksi', $product_id, $jumlah)");
        }
    }
}
?>
<div class="card my-5 px-3 py-3">
    <div class="row">
        <div class="col-lg-3">
            <img src="<?= $base_url; ?>/assets/img/<?php echo $row['kategori'] . "/" . $row['foto'] ?>" width="100%">
        </div>
        <div class="col-lg-6">
            <h2><?= $row['nama']; ?></h2>
            <p class="fw-bold text-primary"><?php echo "Rp " . number_format($row['harga'], 0, ',', '.') ?></p>
            <form action="" method="post">
                <input type="number" name="jumlah" class="form-control" placeholder="0" min="1" style="width: 100px;">
                <input type="submit" name="submit" value="Pesan" class="btn btn-primary mt-2">
            </form>
        </div>
        <div class="col-lg-3">
            <h3>Deskripsi</h3>
            <p><?= $row['deskripsi']; ?></p>
        </div>
    </div>
</div>
</div>
<?php include('template/footer.php'); ?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>