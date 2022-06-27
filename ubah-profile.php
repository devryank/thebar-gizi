<?php include('template/header.php'); ?>

<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $errors['nama'] = $nama == '' ? 'Kolom nama kosong' : '';
    $errors['email'] = $email == '' ? 'Kolom email kosong' : '';
    $errors['alamat'] = $alamat == '' ? 'Kolom alamat kosong' : '';
    $errors['no_hp'] = $no_hp == '' ? 'Kolom no hp kosong' : '';

    $sql = "UPDATE user SET nama='$nama', no_hp='$no_hp', alamat='$alamat' WHERE id = '" . $_SESSION['id'] . "'";
    if (mysqli_query($conn, $sql)) {
        header('location:' . $base_url . '/profile.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php
$sql = "SELECT * FROM user WHERE id = " . $_SESSION['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
            <form action="" method="post">
                <div class="card my-5 px-3 py-3">
                    <table>
                        <tr>
                            <td style="width: 120px;">Nama</td>
                            <td><input type="text" name="nama" class="form-control" value="<?= $row['nama'];?>">
                            <small class="text-danger"><?= isset($errors['nama']) ? $errors['nama'] : ''; ?></small>
                                </td>
                        </tr>
                        <tr>
                            <td style="width: 120px;">Email</td>
                            <td><input type="text" name="email" class="form-control" value="<?= $row['email'];?>" readonly></td>
                        </tr>
                        <tr>
                            <td style="width: 120px;">No HP</td>
                            <td><input type="text" name="no_hp" class="form-control" value="<?= $row['no_hp'];?>">
                            <small class="text-danger"><?= isset($errors['no_hp']) ? $errors['no_hp'] : ''; ?></small>
                                </td>
                        </tr>
                        <tr>
                            <td style="width: 120px;">Alamat</td>
                            <td><textarea name="alamat" id="" cols="30" rows="3" class="form-control"><?= $row['alamat'];?></textarea>
                            <small class="text-danger"><?= isset($errors['alamat']) ? $errors['alamat'] : ''; ?></small>
                        </td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" class="btn btn-primary mt-3" value="Ubah Profile">
                </div>
            </form>
        </div>
<?php include('template/footer.php'); ?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>