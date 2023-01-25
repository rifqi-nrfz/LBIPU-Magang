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
        <main class="container pimpinanstaff">
            <h1>Pimpinan dan Staff LBIPU</h1>
            <br>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="30%">Nama</th>
                    <th width="30%">Jabatan</th>
                    <th width="30%" style="text-align: center;">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil=$koneksi->query("SELECT * FROM pimpinanstaff"); ?>
                <?php while($anggota=$ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $anggota['nama']; ?></td>
                    <td><?= $anggota['jabatan']; ?></td>
                    <td><img  width="50px" height="50px" src="foto/<?= $anggota['foto']; ?>" alt="<?= $anggota['nama']; ?>"></td>
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
