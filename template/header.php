<?php require($_SERVER['DOCUMENT_ROOT'] . '/thebar-gizi/config/koneksi.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thebar Gizi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6">
                <h2>THEBAR GIZI</h2>
            </div>

            <div class="col-lg-6 text-end">
                <?php if ($_SESSION['id'] == '') : ?>
                    <a href="<?= $base_url; ?>/auth/login.php" class="btn btn-primary">Login</a>
                <?php else : ?>
                    <a href="profile.php" class="align-middle me-3"><?= $_SESSION['nama']; ?></a>
                    <a href="keranjang.php" class="align-middle me-3"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="<?= $base_url;?>/action/logout.php" class="align-middle">Logout</i></a>

                <?php endif; ?>
            </div>
        </div>