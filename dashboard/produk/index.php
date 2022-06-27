<?php include('../../template/dashboard-header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Produk</h1>
            <a href="tambah.php" class="btn btn-primary mb-2">Tambah</a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($conn, 'SELECT * FROM produk');
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><img width="100px" src="<?= $base_url; ?>/assets/img/<?php echo $data['kategori'] . "/" . $data['foto'] ?>" alt=""></td>
                                        <td><?php echo "Rp " . number_format($data['harga'], 0, ',', '.') ?></td>
                                        <td>
                                            <a href="<?= $base_url . '/dashboard/produk/edit.php/?id=' . $data['id']; ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= $base_url . '/dashboard/produk/hapus.php/?id=' . $data['id']; ?>" class="btn btn-danger">Hapus</a>
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