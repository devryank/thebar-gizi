<?php include('../../template/dashboard-header.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php
            if (isset($_POST['submit'])) {
                $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $kategori = $_POST['kategori'];
                $foto = $_FILES['foto']['name'];
                $x = explode('.', $foto);
                $ekstensi = strtolower(end($x));
                $ukuran    = $_FILES['foto']['size'];
                $file_tmp = $_FILES['foto']['tmp_name'];
                $folder = $_SERVER['DOCUMENT_ROOT'] . '/thebar-gizi/assets/img/' . $kategori . "/";
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                    if ($ukuran < 10000000) {
                        move_uploaded_file($file_tmp, $folder . $foto);
                        $sql = "INSERT INTO produk VALUES (NULL, '$nama', '$foto', '$harga', '$kategori')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        mysqli_close($conn);
                    } else {
                        var_dump($ukuran < 1044070);
                        echo 'UKURAN FILE TERLALU BESAR';
                    }
                } else {
                    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                }
            }
            ?>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Produk</h1>
            <a href="<?= $base_url;?>/dashboard/produk/index.php" class="btn btn-primary mb-2">Kembali</a>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama" class="form-control" placeholder="Ciki Taro">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="2000">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori" class="form-control" name="kategori">
                                <option value="food">Makanan</option>
                                <option value="drink">Minuman</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php include('../../template/dashboard-footer.php'); ?>