<?php 
    include "koneksi.php";
    $ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<?php 
    include "head.php";
?>

<body>
    <?php 
        include "navbar.php";
    ?>
    <main class="container detail-pengumuman">
        <h1><?= $pecah['judul']; ?></h1>
        <img src="foto/<?= $pecah['gambar']; ?>" alt="<?= $pecah['gambar']; ?>">
        <br>
        <small><i><?= date('d F Y', strtotime($pecah['tanggal'])); ?></i></small>
        <br><br>
        <p>
            <?= $pecah['detail']; ?>
        </p>
    </main>
    <?php 
        include "footer.php";
    ?>
</body>

</html>