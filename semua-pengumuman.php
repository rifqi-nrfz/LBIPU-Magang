<?php 
    include "koneksi.php";
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
        <main class="container semua-pengumuman">
            <h1>Semua Pengumuman</h1>
            <table class="table table-striped table-hover">
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM pengumuman ORDER BY tanggal DESC"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><a href="detail-pengumuman.php?id=<?= $pecah['id']; ?>"><?= $nomor; ?></a></td>
                    <td><a href="detail-pengumuman.php?id=<?= $pecah['id']; ?>"><?= $pecah['judul']; ?></a></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </table>
            
        </main>
        <?php 
        include "footer.php";
    ?>
    </body>
</html>
