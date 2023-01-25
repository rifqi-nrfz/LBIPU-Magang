<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM tentang");
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
        <main class="container profil">
            <h1>Struktur Organisasi</h1>
            <img src="foto/<?= $pecah['strukturOrganisasi']; ?>" alt="struktur-organisasi" style="width: 450px; margin-top: 30px; border:5px solid #555; padding: 20px 100px 20px 100px;">
        </main>
        <?php 
            include "footer.php";
        ?>
    </body>
</html>
