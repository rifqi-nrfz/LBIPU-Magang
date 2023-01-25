<?php
include '../koneksi.php';

if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php'</script>";
    header("Location:login.php");
    exit();
}
?>

<?php 
    $ambil = $koneksi->query("SELECT * FROM tentang");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Tentang LBIPU</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profil</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control summernote" rows="8" placeholder="isi pengumuman" name="profil" id="summernote"><?= $pecah['profil']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Visi</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control summernote" rows="8" placeholder="isi pengumuman" name="visi" id="summernote"><?= $pecah['visi']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Misi</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control summernote" rows="8" placeholder="isi pengumuman" name="misi" id="summernote"><?= $pecah['misi']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tujuan</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control summernote" rows="8" placeholder="isi pengumuman" name="tujuan" id="summernote"><?= $pecah['tujuan']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sejarah</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control summernote" rows="8" placeholder="isi pengumuman" name="sejarah" id="summernote"><?= $pecah['sejarah']; ?></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Struktur Organisasi</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <img src="../foto/<?= $pecah['strukturOrganisasi']; ?>" width="200px"> <br> <br>
                                <label class="form-label" for="">Ganti Foto :</label>
                                <input type="file" class="form-control" name="foto" id="">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" name="save">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
if(isset($_POST['save'])){
    $namafoto=$_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    if(!empty($lokasifoto)){
        move_uploaded_file($lokasifoto, "../foto/$namafoto");

        $koneksi->query("UPDATE tentang SET profil='$_POST[profil]', visi='$_POST[visi]', misi='$_POST[misi]', tujuan='$_POST[tujuan]', sejarah='$_POST[sejarah]', strukturOrganisasi='$namafoto'");
    }else {
        $koneksi->query("UPDATE tentang SET profil='$_POST[profil]', visi='$_POST[visi]', misi='$_POST[misi]', tujuan='$_POST[tujuan]', sejarah='$_POST[sejarah]'");
    }

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=tentang'>";
}
?>