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
        <main class="container daftar-dosen">
            <h1>Daftar Dosen & Pendamping Tutor</h1>
            <h2>Dosen MKU</h2>
            <p>Daftar Dosen Bahasa Indonesia</p>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="60%">Nama</th>
                    <th width="30%">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Bahasa Indonesia'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $pecah['nama_dosen']; ?></td>
                    <td><a href="foto/<?= $pecah['foto']; ?>"><img src="foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></a></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </table><br>
            <p>Daftar Dosen Pancasila</p>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="60%">Nama</th>
                    <th width="30%">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Pancasila'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $pecah['nama_dosen']; ?></td>
                    <td><img src="foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </table><br>
            <p>Daftar Dosen Bahasa Inggris</p>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="60%">Nama</th>
                    <th width="30%">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Bahasa Inggris'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $pecah['nama_dosen']; ?></td>
                    <td><img src="foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </table><br>
            <p>Daftar Dosen Kewarganegaraan</p>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="60%">Nama</th>
                    <th width="30%">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Kewarganegaraan'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $pecah['nama_dosen']; ?></td>
                    <td><img src="foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
            </table><br>
            <h2>Pendamping Tutor</h2>
            <table class="table table-striped table-hover">
                <tr>
                    <th width="10%">No</th>
                    <th width="60%">Nama</th>
                    <th width="30%">Foto</th>
                </tr>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Pendamping Tutor'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= $pecah['nama_dosen']; ?></td>
                    <td><img src="foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
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
