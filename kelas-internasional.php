<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM akademik WHERE judul = 'Kelas Internasional'");
    $akademik= $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<?php 
    include "head.php";
?>
    <body>
        <?php 
        include "navbar.php";
    ?>
        <main class="container profil">
            <h1>Kelas Internasional</h1>
            <p>
                <?= $akademik['detail']; ?>
            </p>
        </main>
        <?php 
        include "footer.php";
    ?>
    </body>
</html>
