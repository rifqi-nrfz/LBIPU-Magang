<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM tentang");
    $profil= $ambil->fetch_assoc();
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
            <h1>Profile LBIPU</h1>
            <p>
                <?= $profil['profil']; ?>
            </p>
        </main>
        <?php 
            include "footer.php";
        ?>
    </body>
</html>
