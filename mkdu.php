<?php 
include 'koneksi.php';
    $ambil = $koneksi->query("SELECT * FROM akademik WHERE judul = 'MKU (Mata Kuliah Umum)'");
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
        <main class="container mkdu">
            <h1>MKU</h1>
            <p>
                <?= $akademik['detail']; ?>
            </p>
        </main>
        <?php 
        include "footer.php";
    ?>
    </body>
</html>
