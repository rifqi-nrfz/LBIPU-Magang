<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM tentang");
    $tentang= $ambil->fetch_assoc();
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
        <main class="container visi-misi-tujuan">
            <h1>Visi Misi dan Tujuan</h1>
            <h2>Visi LPIDB</h2>
            <p>
                <?= $tentang['visi']; ?>
            </p>
            <br>
            <h2>Misi LPIDB</h2>
            <p>
                <?= $tentang['misi']; ?>
            </p>
            <br>
            <h2>Tujuan LPIDB</h2>
            <p>
                <?= $tentang['tujuan']; ?>
            </p>
        </main>
        <?php 
            include "footer.php";
        ?>
    </body>
</html>
