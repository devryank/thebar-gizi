<?php include('../config/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= $base_url; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= $base_url; ?>/assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <?php
                            if (isset($_POST['submit'])) {
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $password1 = $_POST['password1'];
                                $password2 = $_POST['password2'];
                                $alamat = $_POST['alamat'];
                                $no_hp = $_POST['no_hp'];
                                $peran = "user";
                                $errors['nama'] = $nama == '' ? 'Kolom nama kosong' : '';
                                $errors['email'] = $email == '' ? 'Kolom email kosong' : '';
                                $errors['alamat'] = $alamat == '' ? 'Kolom alamat kosong' : '';
                                $errors['no_hp'] = $no_hp == '' ? 'Kolom no hp kosong' : '';
                                $errors['password1'] = $password1 == '' ? 'Kolom password kosong' : '';
                                $errors['password2'] = $password2 == '' ? 'Kolom ketik ulang password kosong' : '';
                                $errors['password'] = $password1 !== $password2 ? "Password tidak sama" : '';

                                $password = password_hash($password1, PASSWORD_DEFAULT);
                                $sql = "INSERT INTO user VALUES (NULL, '$nama', '$email', '$password', '$alamat', '$no_hp', '$peran')";
                                if (mysqli_query($conn, $sql)) {
                                    echo "";
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            }
                            ?>
                            <form class="user" action="" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap">
                                        <small class="text-danger"><?= isset($errors['nama']) ? $errors['nama'] : ''; ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" placeholder="Email Address">
                                    <small class="text-danger"><?= isset($errors['email']) ? $errors['email'] : ''; ?></small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control form-control-user" placeholder="Password">
                                        <small class="text-danger"><?= isset($errors['password']) ? $errors['password'] : ''; ?></small>
                                        <small class="text-danger"><?= isset($errors['password1']) ? $errors['password1'] : ''; ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password2" class="form-control form-control-user" placeholder="Repeat Password">
                                        <small class="text-danger"><?= isset($errors['password']) ? $errors['password'] : ''; ?></small>
                                        <small class="text-danger"><?= isset($errors['password2']) ? $errors['password2'] : ''; ?></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="no_hp" class="form-control form-control-user" placeholder="08xxxx">
                                    <small class="text-danger"><?= isset($errors['no_hp']) ? $errors['no_hp'] : ''; ?></small>
                                </div>
                                <div class="form-group">
                                    <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat"></textarea>
                                    <small class="text-danger"><?= isset($errors['alamat']) ? $errors['alamat'] : ''; ?></small>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url; ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url; ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url; ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>