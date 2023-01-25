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
    $ambil = $koneksi->query("SELECT * FROM dosen WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Dosen</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Nama Dosen</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $pecah['nama_dosen']; ?>">
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
                                <img src="../foto/<?= $pecah['foto']; ?>" width="200px"> <br> <br>
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
    $namafoto=$_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    if(!empty($lokasifoto)){
        move_uploaded_file($lokasifoto, "../foto/$namafoto");

        $koneksi->query("UPDATE dosen SET nama_dosen='$_POST[nama]', mata_kuliah='$_POST[matkul]', foto='$namafoto' WHERE id='$_GET[id]'");
    }else {
        $koneksi->query("UPDATE dosen SET nama_dosen='$_POST[nama]', mata_kuliah='$_POST[matkul]' WHERE id='$_GET[id]'");
    }

    echo "<div class='alert alert-info'>Data tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=daftar-dosen'>";
}
?>