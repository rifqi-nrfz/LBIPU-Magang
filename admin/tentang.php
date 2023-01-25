<?php
include '../koneksi.php';

if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php'</script>";
    header("Location:login.php");
    exit();
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><a href="index.php?halaman=tambah-kegiatan" style="color: #000;">Tentang LBIPU</a></h1>
        <?php $ambil = $koneksi->query("SELECT * FROM tentang"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profil</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                                
                                <tr>
                                    <td width="85%"><?= $pecah['profil']; ?></td>
                                    <td width="5%"></td>
                                    <td width="10%">
                                        <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Visi</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                                <tr>
                                    <td width="85%"><?= $pecah['visi']; ?></td>
                                    <td width="5%"></td>
                                    <td width="10%">
                                        <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Misi</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                                <tr>
                                    <td width="85%"><?= $pecah['misi']; ?></td>
                                    <td width="5%"></td>
                                    <td width="10%">
                                        <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tujuan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                            <tr>
                                <td width="85%"><?= $pecah['tujuan']; ?></td>
                                <td width="5%"></td>
                                <td width="10%">
                                    <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Sejarah</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                                <tr>
                                    <td width="85%"><?= mb_strimwidth($pecah['sejarah'], 0, 1000, "..."); ?></td>
                                    <td width="5%"></td>
                                    <td width="10%">
                                        <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Struktur Organisasi</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <tbody>
                            <tr>
                                <td width="85%"><img width="350px" src="../foto/<?= $pecah['strukturOrganisasi']; ?>" alt="Struktur Organisasi"></td>
                                <td width="5%"></td>
                                <td width="10%">
                                    <a href="index.php?halaman=edit-tentang"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</main>