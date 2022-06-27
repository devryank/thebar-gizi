<?php include('../../template/dashboard-header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Transaksi</h1>
            <a href="<?= $base_url;?>/dashboard/transaksi/index.php" class="btn btn-primary mb-2">Kembali</a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <?php
                            $result_daftar_pembelian = mysqli_query($conn, "SELECT d.*, p.nama, p.foto, p.harga, p.kategori FROM daftar_pembelian d INNER JOIN produk p ON d.kode_produk = p.id WHERE d.kode_transaksi = '" . $_GET['trx'] . "'");
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
                    
                    <div class="row mt-3">
                        <div class="col-lg-8">
                            <h5 class="text-success fw-bold"><?php echo "Rp " . number_format($total, 0, ',', '.') ?></h5>
                        </div>
                        <div class="col-lg-4 text-end">
                            <?php
                                $sql = "SELECT status FROM transaksi WHERE kode_transaksi = '" . $_GET['trx'] . "'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <h5 class="text-success fw-bold"><?php echo $row['status'] ?></h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            Ubah menjadi:
                            <br>
                            <a href="<?= $base_url;?>/dashboard/transaksi/kirim.php?trx=<?= $_GET['trx'];?>" class="btn btn-info mb-2">Dalam Pengiriman</a>
                            <a href="<?= $base_url;?>/dashboard/transaksi/selesai.php?trx=<?= $_GET['trx'];?>" class="btn btn-success mb-2">Selesai</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include('../../template/dashboard-footer.php'); ?>