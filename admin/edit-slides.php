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
    $ambil = $koneksi->query("SELECT * FROM slides WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Slides</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Link Embed Youtube</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan link" name="link" value="<?= $pecah['link']; ?>">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $pecah['judul']; ?>">
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail Video</h5>
                        </div>
                        <div class="card-body">
                            <textarea rows="4" cols="auto" name="detail"><?= $pecah['detail']; ?></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary" name="save">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
if (isset($_POST['save'])) {
    $koneksi->query("UPDATE slides SET link='$_POST[link]', judul='$_POST[judul]', detail='$_POST[detail]' WHERE id='$_GET[id]'");

    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=slides'>";
}
?>