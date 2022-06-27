<?php include('../../template/dashboard-header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">User</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Nama Pembeli</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($conn, 'SELECT t.kode_transaksi, u.nama, u.alamat, t.tanggal, t.status FROM transaksi t INNER JOIN user u WHERE t.id_user = u.id GROUP BY t.kode_transaksi ORDER BY t.tanggal DESC');
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['kode_transaksi'] ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['alamat'] ?></td>
                                        <td><?php echo $data['tanggal'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td>
                                            <a href="<?= $base_url . '/dashboard/transaksi/detail.php/?trx=' . $data['kode_transaksi']; ?>" class="btn btn-info">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include('../../template/dashboard-footer.php'); ?>