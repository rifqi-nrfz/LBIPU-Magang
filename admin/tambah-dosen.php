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
            <h1 class="h3 d-inline align-middle">Tambah Data Dosen</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Nama Dosen</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan nama" name="nama">
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Mata Kuliah</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Bahasa Indonesia" name="matkul">
                                    <p class="form-check-label">
                                        Bahasa Indonesia
                                    </p>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Pancasila" name="matkul">
                                    <p class="form-check-label">
                                        Pancasila
                                    </p>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Bahasa Inggris" name="matkul">
                                    <p class="form-check-label">
                                        Bahasa Inggris
                                    </p>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Kewarganegaraan" name="matkul">
                                    <p class="form-check-label">
                                        Kewarganegaraan
                                    </p>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" value="Pendamping Tutor" name="matkul">
                                    <p class="form-check-label">
                                        Pendamping Tutor
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Foto Dosen</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="foto" id="">
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
    $koneksi->query("INSERT INTO dosen(nama_dosen, mata_kuliah, foto) VALUES('$_POST[nama]','$_POST[matkul]','$nama')");

    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=daftar-dosen'>";
}
?>