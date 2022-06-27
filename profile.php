<?php include('template/header.php'); ?>

<?php
$sql = "SELECT * FROM user WHERE id = " . $_SESSION['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
        <div class="card my-5 px-3 py-3">
            <h2 class="text-center"><?= $row['nama'];?></h2>
            <table>
                <tr>
                    <td style="width: 120px;">Email</td>
                    <td>: <?= $row['email'];?></td>
                </tr>
                <tr>
                    <td style="width: 120px;">No HP</td>
                    <td>: <?= $row['no_hp'];?></td>
                </tr>
                <tr>
                    <td style="width: 120px;">Alamat</td>
                    <td>: <?= $row['alamat'];?></td>
                </tr>
            </table>
            <a href="<?= $base_url;?>/ubah-profile.php" class="btn btn-primary mt-3">Ubah Profile</a>
        </div>
    </div>
    <?php include('template/footer.php'); ?>
