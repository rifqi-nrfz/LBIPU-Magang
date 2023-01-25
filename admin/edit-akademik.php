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
    $ambil = $koneksi->query("SELECT * FROM akademik WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Akademik</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul Akademik</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" value="<?= $pecah['judul']; ?>">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" rows="8" placeholder="isi detail" name="detail" id="summernote"><?= $pecah['detail']; ?></textarea>
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
    $koneksi->query("UPDATE akademik SET judul='$_POST[judul]', detail='$_POST[detail]' WHERE id='$_GET[id]'");

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=akademik'>";
}
?>