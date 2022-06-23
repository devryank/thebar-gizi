<?php include('../config/koneksi.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    if (mysqli_num_rows($query) > 0) {
        if ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            if (password_verify($password, $row['password'])) {

                $_SESSION['peran'] = $row['peran'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];

                if ($row['peran'] == 'admin') {
                    header('location: http://localhost/thebar-gizi/dashboard');
                } else {
                    header('location: http://localhost/thebar-gizi');
                }
            } else {
                $errors['password'] = $password == '' ? 'Kolom password kosong' : 'Password salah';
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        $errors['email'] = $email == '' ? 'Kolom email kosong' : 'Akun tidak ditemukan';
        $errors['password'] = $password == '' ? 'Kolom password kosong' : '';
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= $base_url; ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= $base_url; ?>/assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            <small class="text-danger"><?= isset($errors['email']) ? $errors['email'] : ''; ?></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                            <small class="text-danger"><?= isset($errors['password']) ? $errors['password'] : ''; ?></small>
                                        </div>
                                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
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