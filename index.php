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
    <main>
        <!-- <div class="video-container">
            <iframe src="https://www.youtube.com/embed/HH12-_ne6vU?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allow="autoplay; encrypted-media"></iframe>
        </div> -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <?php $nomor = 0; ?>
                <?php $ambil=$koneksi->query("SELECT * FROM slides"); ?>
                <?php while($slide=$ambil->fetch_assoc()) { ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $nomor; ?>" class="active" aria-current="true" aria-label="Slides <?= $slide['id']; ?>"></button>
                <?php $nomor++; ?>
                <?php } ?>
            </div>
            
            <div class="carousel-inner">
                <?php $ambil=$koneksi->query("SELECT * FROM slides WHERE id = 1"); ?>
                <?php while($slide=$ambil->fetch_assoc()) { ?>
                    <div class="carousel-item active">
                    <div class="video-container">
                        <iframe src="<?= $slide['link']; ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $slide['judul']; ?></h5>
                        <p><?= $slide['detail']; ?></p>
                    </div>
                    </div>
                <?php } ?>
                <?php $ambil=$koneksi->query("SELECT * FROM slides WHERE id > 1"); ?>
                <?php while($slide=$ambil->fetch_assoc()) { ?>
                    <div class="carousel-item">
                    <div class="video-container">
                        <iframe src="<?= $slide['link']; ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?= $slide['judul']; ?></h5>
                        <p><?= $slide['detail']; ?></p>
                    </div>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        <section class="informasi">
            <div class="container">
                <h1>
                    <center>Pengumuman</center>
                </h1>
                <center>
                    <div class="row">
                        <?php $ambil=$koneksi->query("SELECT * FROM pengumuman LIMIT 6"); ?>
                        <?php while($pengumuman=$ambil->fetch_assoc()) { ?>
                            <div class="col">
                                <div class="card" style="width: 22rem">
                                    <a href="detail-pengumuman.php?id=<?= $pengumuman['id']; ?>" style="text-decoration: none;color: #000;">
                                        <img src="foto/<?= $pengumuman['gambar']; ?>" class="card-img-top" alt="card" height="200px"/>
                                    
                                    <div class="card-body" style="height: 120px;">
                                        <p class="card-text">
                                            <?php echo mb_strimwidth($pengumuman['judul'], 0, 110, "..."); ?>
                                        </p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                        
                    </center>
                    <div class=" container text-center">
                            <a href="semua-pengumuman.php" class="btn btn-primary viewall">Lihat semua</a>
                        </div>
                    </div>
        </section>
        <section class="pelayanan">
            <div class="container">
                <center>
                    <h1>Layanan Online</h1>
                    <div class="row">
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                        <div class="col-8">
                            <div class="description">
                                <img src="assets/img/testtoep.png" alt="" class="pelayanan-image" />
                                <div class="text-description">
                                    <div class="jarak">&nbsp;</div>
                                    <h3>Pendaftaran Tes TOEP Mandiri</h3>
                                    <a href="https://bit.ly/PendaftaranTesTOEPMandiriLuringLBIPU" target="_blank" class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                        <div class="col-8">
                            <div class="description">
                                <img src="assets/img/kursustoep.png" alt="" class="pelayanan-image" />
                                <div class="text-description">
                                    <div class="jarak">&nbsp;</div>
                                    <h3>Pendaftaran Kursus TOEP Online</h3>
                                    <a href="https://bit.ly/PendaftaranKursusToepOnline" target="_blank" class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                        <div class="col-8">
                            <div class="description">
                                <img src="assets/img/sertiftoep.png" alt="" class="pelayanan-image" />
                                <div class="text-description">
                                    <div class="jarak">&nbsp;</div>
                                    <h3>Pengajuan Sertifikat dan Surat Keterangan Online</h3>
                                    <a href="http://bit.ly/sertifonlinelbipu" target="_blank" class="btn btn-primary">Ajukan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="description">

                            </div>
                        </div>
                    </div>
                    <a class="btn btn-outline-danger btn-pelayanan" target="_blank" href="https://linktr.ee/lbipu_ums">Lihat semua</a>
                </center>
            </div>
        </section>

        <!-- bagian kalendar akademik-->
        <section class="kalendarAkademik">
            <div class="container">
                <div class="row align-items-center">
                    <?php $ambil=$koneksi->query("SELECT * FROM kalender"); ?>
                    <?php while($kalender=$ambil->fetch_assoc()) { ?>
                    <div class="col-md-4">
                        <h1>
                            <center>Kalender Akademik <?= $kalender['tahun']; ?> UMS</center>
                        </h1>
                    </div>
                    <div class="col-md-8">
                        <center>
                            <img src="foto/<?= $kalender['foto']; ?>" alt="kalender" width="100%"
                                style="border: 1px solid red;"></img>
                        </center>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>

    <?php 
        include "footer.php";
    ?>

</body>

</html>