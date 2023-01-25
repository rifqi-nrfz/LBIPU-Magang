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
        <h1 class="h3 mb-3">Kalender</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th width="20%">Kalender Tahun</th>
                                    <th class="d-none d-xl-table-cell" width="70%">File Gambar</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $ambil = $koneksi->query("SELECT * FROM kalender"); ?>
                                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?= $pecah['tahun']; ?></td>
                                        <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="700px"></img></td>
                                        <td>
                                            <a href="index.php?halaman=edit-kalender&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>