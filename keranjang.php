<?php include('template/header.php'); ?>
<?php
$result_transaksi = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_user = " . $_SESSION['id'] . " order by tanggal desc");
$data_transaksi = mysqli_fetch_all($result_transaksi, MYSQLI_ASSOC);
?>

<?php
foreach ($data_transaksi as $key => $data) :
?>
    <div class="card mt-2">
        <div class="card-body">
            <h4 class=""><?= $data['kode_transaksi'];?></h4>
            <hr>
            <div class="row ms-3">
                <?php
                $result_daftar_pembelian = mysqli_query($conn, "SELECT d.*, p.nama, p.foto, p.harga, p.kategori FROM daftar_pembelian d INNER JOIN produk p ON d.kode_produk = p.id WHERE d.kode_transaksi = '" . $data['kode_transaksi'] . "'");
                $data_pembelian = mysqli_fetch_all($result_daftar_pembelian, MYSQLI_ASSOC);
                $total = 0;
                foreach ($data_pembelian as $data_p) :
                    $total += $data_p['harga'] * $data_p['jumlah'];
                ?>
                <div class="col-lg-2 my-2">
                    <img src="<?= $base_url; ?>/assets/img/<?php echo $data_p['kategori'] . "/" . $data_p['foto'] ?>" width="100%">
                </div>
                <div class="col-lg-10">
                    <?= $data_p['nama']; ?>
                    <br>
                    <?php echo "Rp " . number_format($data_p['harga'], 0, ',', '.') . " x " . $data_p['jumlah'] . " = " . "Rp " . number_format($data_p['harga'] * $data_p['jumlah'], 0, ',', '.') ?>
                </div>
                <?php endforeach;?>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="text-success fw-bold"><?php echo "Rp " . number_format($total, 0, ',', '.') ?></h5>
                </div>
                <div class="col-lg-4 text-end">
                    <h5 class="text-success fw-bold"><?php echo $data['status'] ?></h5>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php include('template/footer.php'); ?>