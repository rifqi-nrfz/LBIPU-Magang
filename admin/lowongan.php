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
        <h1 class="h3 mb-3">Lowongan</h1>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-xl-table-cell" style="width: 10%;">No</th>
                                    <th>Lowongan</th>
                                    <th class="d-none d-xl-table-cell">File</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM lowongan"); ?>
                                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <tr>
                                        <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                        <td><?= $pecah['jenis_lowongan']; ?></td>
                                        <td class="d-none d-xl-table-cell"><a href="../file/<?= $pecah['file']; ?>" download><?= $pecah['files']; ?></a></td>
                                        <td><?= $pecah['status_lowongan']; ?></td>
                                        <td>
                                            <a href="index.php?halaman=edit-lowongan&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php $nomor++; ?>
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