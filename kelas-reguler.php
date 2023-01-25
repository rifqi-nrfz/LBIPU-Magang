<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM akademik WHERE judul = 'Kelas Regular'");
    $akademik= $ambil->fetch_assoc();
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
            <h1>Kelas Reguler</h1>
            <p>
                <?= $akademik['detail']; ?>
            </p>
        </main>
        <?php 
        include "footer.php";
        ?>
    </body>
</html>
