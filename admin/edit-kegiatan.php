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
    $ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Pengumuman</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $pecah['judul']; ?>">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tanggal</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <input type="date" id="tanggal" name="tanggal"  value="<?= $pecah['tanggal']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Foto</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <img src="../foto/<?= $pecah['gambar']; ?>" width="200px"> <br> <br>
                                <label class="form-label" for="">Ganti Foto</label>
                                <input type="file" class="form-control" name="foto" id="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" rows="8" placeholder="isi pengumuman" name="detail" id="summernote"><?= $pecah['detail']; ?></textarea>
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

        $koneksi->query("UPDATE kegiatan SET judul='$_POST[judul]', tanggal='$_POST[tanggal]', gambar='$namafoto', detail='$_POST[detail]' WHERE id='$_GET[id]'");
    }else {
        $koneksi->query("UPDATE kegiatan SET judul='$_POST[judul]', tanggal='$_POST[tanggal]', detail='$_POST[detail]' WHERE id='$_GET[id]'");
    }

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kegiatan'>";
}
?>