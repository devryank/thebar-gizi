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
                    <a href="detail.php" class="align-middle">Ryan Kurniawan</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="card my-5 px-3 py-3">
            <h2 class="text-center">Ryan Kurniawan</h2>
            <table>
                <tr>
                    <td style="width: 120px;">Email</td>
                    <td>: ryansg41@gmail.com</td>
                </tr>
                <tr>
                    <td style="width: 120px;">No HP</td>
                    <td>: 085814316629</td>
                </tr>
                <tr>
                    <td style="width: 120px;">Jenis Kelamin</td>
                    <td>: Laki-Laki</td>
                </tr>
                <tr>
                    <td style="width: 120px;">Alamat</td>
                    <td>: Jl Ampera Raya Gg Melati</td>
                </tr>
            </table>
            <a href="#" class="btn btn-primary mt-3">Ubah Profile</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>