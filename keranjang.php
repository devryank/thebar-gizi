<?php include('template/header.php'); ?>
<?php
$result_transaksi = mysqli_query($conn, "SELECT * FROM transaksi");
$data_transaksi = mysqli_fetch_array($result_transaksi, MYSQLI_ASSOC);
var_dump($data_transaksi);
die;
?>

<?php
foreach ($data_transaksi as $key => $data) :
?>
    <div class="card">
        <div class="card-body">
            <h4 class="">INV-202205230001</h4>
            <hr>
            <div class="row ms-3">
                <?php
                $result_daftar_pembelian = mysqli_query($conn, "SELECT d.*, p.nama, p.foto, p.harga, p.kategori FROM daftar_pembelian d INNER JOIN produk p ON d.kode_produk = p.id WHERE d.kode_transaksi = '" . $data['kode_transaksi'] . "'");
                $data_pembelian = mysqli_fetch_array($result_daftar_pembelian, MYSQLI_ASSOC);
                ?>
                <div class="col-lg-2 my-2">
                    <img src="<?= $base_url; ?>/assets/img/<?php echo $data_pembelian['kategori'] . "/" . $data_pembelian['foto'] ?>" width="100%">
                </div>
                <div class="col-lg-10">
                    <?= $data_pembelian['nama']; ?>
                    <br>
                    <?php echo "Rp " . number_format($data_pembelian['harga'], 0, ',', '.') . " x " . $data_pembelian['jumlah'] . " = " . "Rp " . number_format($data_pembelian['harga'] * $data_pembelian['jumlah'], 0, ',', '.') ?>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                <h5 class="text-success fw-bold"><?php echo "Rp " . number_format($data['total'], 0, ',', '.') ?></h5>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php include('template/footer.php'); ?>