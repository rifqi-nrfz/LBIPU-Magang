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
    <main class="container galeri">
        <h1>Kegiatan LBIPU</h1>
        <center>
            <div class="row">
                <?php $ambil=$koneksi->query("SELECT * FROM kegiatan"); ?>
                <?php while($kegiatan=$ambil->fetch_assoc()) { ?>
                    <div class="col">
                        <div class="card" style="width: 22rem">
                            <a href="detail-kegiatan.php?id=<?= $kegiatan['id']; ?>" style="text-decoration: none;color: #000;">
                                <img src="foto/<?= $kegiatan['gambar']; ?>" class="card-img-top" alt="card" height="200px"/>
                                <div class="card-body" style="height: 120px;">
                                    <p class="card-text">
                                        <?php echo mb_strimwidth($kegiatan['judul'], 0, 80, "..."); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        
        </center>
    </main>
    <?php 
        include "footer.php";
    ?>
</body>

</html>