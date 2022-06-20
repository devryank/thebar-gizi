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

        <div class="card my-5 px-3 py-3">
            <div class="row">
                <div class="col-lg-3">
                    <img src="assets/img/food/nasi goreng gila-min.jpg" width="100%">
                </div>
                <div class="col-lg-6">
                    <h2>Nasi Goreng Gila</h2>
                    <p class="fw-bold text-primary">Rp 15.000</p>
                    <input type="number" class="form-control" placeholder="0" min="1" style="width: 100px;">
                    <input type="submit" value="Pesan" class="btn btn-primary mt-2">
                </div>
                <div class="col-lg-3">
                    <h3>Deskripsi</h3>
                    <p>Nasi, telur, ayam, sosis, bakso, tomat, timun</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>