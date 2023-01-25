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
    $ambil = $koneksi->query("SELECT * FROM lowongan WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Data Lowongan</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Lowongan</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text"  class="form-control" placeholder="" name="jenis_lowongan" value="<?= $pecah['jenis_lowongan']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Detail Lowongan</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" rows="8" placeholder="detail lowongan" name="detail" id="summernote"><?= $pecah['detail']; ?></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">File PDF</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a href="../file/<?= $pecah['files']; ?>" download><?= $pecah['files']; ?></a> <br><br>
                                <label class="form-label" for="">Ganti File</label>
                                <input type="file" class="form-control" name="pdf" id="">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Ubah Status</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <p>Status saat ini : <?= $pecah['status_lowongan']; ?></p>
                                <select id="status" name="status_lowongan">
                                    <option value="">--Ganti Status--</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
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
        $pdf=$_FILES['pdf']['name'];
        $lokasipdf = $_FILES['pdf']['tmp_name'];

        if(!empty($lokasipdf)){
            move_uploaded_file($lokasipdf, "../file/$pdf");

            $koneksi->query("UPDATE lowongan SET jenis_lowongan='$_POST[jenis_lowongan]', detail='$_POST[detail]', files='$pdf', status_lowongan='$_POST[status_lowongan]' WHERE id='$_GET[id]'");
        }else {
            $koneksi->query("UPDATE lowongan SET jenis_lowongan='$_POST[jenis_lowongan]', detail='$_POST[detail]', status_lowongan='$_POST[status_lowongan]'  WHERE id='$_GET[id]'");
        }

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=lowongan'>";
}
?>