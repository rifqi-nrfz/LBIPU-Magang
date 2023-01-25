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
    $ambil = $koneksi->query("SELECT * FROM kalender WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Update Kalendar Terbaru</h1>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="" role="form" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Tahun Kalendar</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <small>*tulis tahun contoh : 2022/2023</small>  
                                <input type="text"  class="form-control" placeholder="" name="tahun" value="<?= $pecah['tahun']; ?>">
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Kalendar Akademik</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <img src="../file/<?= $pecah['foto']; ?>" width="400px"></img> <br><br>
                                <label class="form-label" for="">Ganti File Kalendar Akademik</label>
                                <input type="file" class="form-control" name="foto" id="">
                                <small>*format foto</small>
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
        $foto=$_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];

        if(!empty($lokasifoto)){
            move_uploaded_file($lokasifoto, "../foto/$foto");

            $koneksi->query("UPDATE kalender SET tahun='$_POST[tahun]', foto='$foto' WHERE id='$_GET[id]'");
        }else {
            $koneksi->query("UPDATE kalender SET tahun='$_POST[tahun]' WHERE id='$_GET[id]'");
        }

    echo "<div class='alert alert-info'>Data telah diupdate</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kalender'>";
}
?>