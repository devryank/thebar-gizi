<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6">
                <h2>OLSHOP MAKANAN</h2>
            </div>
            <?php $is_login = true; ?>

            <div class="col-lg-6 text-end">
                <?php if (!$is_login) : ?>
                    <a href="" class="btn btn-primary">Login</a>
                <?php else : ?>
                    <a href="profile.php" class="align-middle">Ryan Kurniawan</a>
                <?php endif; ?>
            </div>
        </div>

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
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/nasi goreng gila-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Nasi Goreng Gila</h5>
                        <p class="card-text fw-bold text-primary">Rp 15.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/nasi goreng ayam-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Nasi Goreng Ayam</h5>
                        <p class="card-text fw-bold text-primary">Rp 13.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/nasi goreng bakso-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Nasi Goreng Bakso</h5>
                        <p class="card-text fw-bold text-primary">Rp 13.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/nasi goreng sosis-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Nasi Goreng Sosis</h5>
                        <p class="card-text fw-bold text-primary">Rp 13.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/mie rebus-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Mie Rebus</h5>
                        <p class="card-text fw-bold text-primary">Rp 13.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/mie goreng-min.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Mie Goreng</h5>
                        <p class="card-text fw-bold text-primary">Rp 13.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/food/seblak komplit.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Seblak Komplit</h5>
                        <p class="card-text fw-bold text-primary">Rp 10.000</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="text-center">Minuman</h3>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/drink/ice-tea.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Es Teh</h5>
                        <p class="card-text fw-bold text-primary">Rp 5.000</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4">
                <a href="detail.php" class="card text-decoration-none">
                    <img src="assets/img/drink/air-putih.jpg" class="card-img-top" width="100%">
                    <div class="card-body">
                        <h5 class="card-title text-black">Air Putih</h5>
                        <p class="card-text fw-bold text-primary">Rp 3.000</p>
                    </div>
                </a>
            </div>
        </div>
        <h2 class="text-center my-5">SELAMAT MENIKMATI</h2>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>