<?php 
    include 'koneksi.php';

    $keyword = $_GET['keyword'];
    $semuadata=array();
    $ambil = $koneksi->query("SELECT * FROM pengumuman WHERE judul LIKE '%$keyword%' OR isi LIKE '%$keyword%'");
    while($pecah = $ambil->fetch_assoc()){
        $semuadata[]=$pecah;
    }
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
    <main>
        <section class="informasi">
        <div class="container">
            
            <?php if(empty($semuadata)) : ?>
                <div class="alert alert-danger">Produk <b><?= $keyword; ?></b> tidak ditemukan</div>
            <?php endif; ?>
            <center>
                <p class="my-4">Hasil Pencarian : <?= $keyword ?></p>
                <div class="row">
                    <?php foreach($semuadata as $key => $value) : ?>
                        <div class="col-4 mb-5">
                            <div class="card" style="width: 22rem">
                                <a href="detail-pengumuman.php?id=<?= $value['id']; ?>" style="text-decoration: none;color: #000;">
                                <img src="foto/<?= $value['gambar']; ?>" class="card-img-top" alt="card" height="200px"/>
                                <div class="card-body" style="height: 120px;">
                                    <p class="card-text">
                                        <?php echo mb_strimwidth($value['judul'], 0, 110, "..."); ?>
                                    </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                </center>
            </div>
        </section>
    </main>

    <?php 
        include "footer.php";
    ?>

</body>

</html>