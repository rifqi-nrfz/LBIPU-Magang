<?php 
    include "koneksi.php";
    $ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id='$_GET[id]'");
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
        <small>By <a href="#"><?= $pecah['updateby']; ?></a> / <?= date('d F Y', strtotime($pecah['tanggal'])); ?></small>
        <br><br>
        <p>
            <?= $pecah['isi']; ?>
        </p>
        <a href="file/<?= $pecah['files']; ?>" download="">Download Hasil</a>
    </main>
    <?php 
        include "footer.php";
    ?>
</body>

</html>