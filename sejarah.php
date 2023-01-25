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
        <main class="container sejarah">
            <h1>Sejarah LBIPU</h1>
            <p>
                <?= $tentang['sejarah']; ?>
            </p>
        </main>
        <?php 
            include "footer.php";
        ?>
    </body>
</html>
