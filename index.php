<?php include('template/header.php'); ?>

<div id="carouselExampleControls" class="carousel slide my-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/carousel1.jpg" width="100%" class="d-block w-100" style="object-fit: cover; height: 450px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carousel2.jpg" width="100%" class="d-block w-100" style="object-fit: cover; height: 450px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carousel3.jpg" width="100%" class="d-block w-100" style="object-fit: cover; height: 450px;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row">
    <h3 class="text-center">Makanan</h3>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM produk where kategori = 'food'");
    while ($data = mysqli_fetch_array($query)) :
    ?>
        <div class="col-lg-3 mt-4 d-flex align-items-stretch">
            <a href="<?= $base_url; ?>/detail.php?id=<?= $data['id']; ?>" class="card text-decoration-none">
                <img src="<?= $base_url; ?>/assets/img/<?php echo $data['kategori'] . "/" . $data['foto'] ?>" class="card-img-top" width="100%" height="70%" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-black"><?= $data['nama']; ?></h5>
                    <p class="card-text fw-bold text-primary"><?php echo "Rp " . number_format($data['harga'], 0, ',', '.') ?></p>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
</div>

<div class="row mt-5">
    <h3 class="text-center">Minuman</h3>
    <?php
    $query = mysqli_query($conn, "SELECT * FROM produk where kategori = 'drink'");
    while ($data = mysqli_fetch_array($query)) :
    ?>
        <div class="col-lg-3 mt-4 d-flex align-items-stretch">
            <a href="<?= $base_url; ?>/detail.php?id=<?= $data['id']; ?>" class="card text-decoration-none">
                <img src="<?= $base_url; ?>/assets/img/<?php echo $data['kategori'] . "/" . $data['foto'] ?>" class="card-img-top" width="100%" height="70%" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-black"><?= $data['nama']; ?></h5>
                    <p class="card-text fw-bold text-primary"><?php echo "Rp " . number_format($data['harga'], 0, ',', '.') ?></p>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
</div>
<h2 class="text-center my-5">SELAMAT MENIKMATI</h2>
</div>
<?php include('template/footer.php'); ?>