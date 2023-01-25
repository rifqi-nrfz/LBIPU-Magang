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
            <h1 class="h3 d-inline align-middle">Tambah Data Kegiatan</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Judul Kegiatan</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan judul" name="judul">
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
                            <h5 class="card-title mb-0">Foto Kegiatan</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="foto" id="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Penjelasan Kegiatan</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <textarea id="summernote" name="detail"></textarea>
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

    $koneksi->query("INSERT INTO kegiatan(judul, tanggal, gambar, detail) VALUES('$_POST[judul]', '$_POST[tanggal]','$nama', '$_POST[detail]')");

    echo "<div class='alert alert-info'>Data kegiatan berhasil tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kegiatan'>";
}
?>