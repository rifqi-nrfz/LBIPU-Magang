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

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Pengumuman</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Foto</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="foto" id="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail Pengumuman</h5>
                        </div>
                        <div class="card-body">
                            <textarea id="summernote" name="isi"></textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tanggal</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                
                                <input type="date" id="tanggal" name="tanggal">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">File PDF</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="pdf" id="">
                            </div>
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
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto/" . $nama);

    $pdf = $_FILES['pdf']['name'];
    $lokasipdf = $_FILES['pdf']['tmp_name'];
    move_uploaded_file($lokasipdf, "../file/" . $pdf);
    $koneksi->query("INSERT INTO pengumuman(judul, gambar, isi, tanggal, files) VALUES('$_POST[judul]','$nama', '$_POST[isi]', '$_POST[tanggal]', '$pdf')");

    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pengumuman'>";
}
?>