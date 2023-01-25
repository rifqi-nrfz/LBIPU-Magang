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
        <h1 class="h3 mb-3"><a href="index.php?halaman=tambah-slides" style="color: #000;">Slides</a></h1>
        <p>
            <a href="index.php?halaman=tambah-slides">Klik disini atau judul untuk menambah data slides <i data-feather="plus-circle"></i></a>
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-xl-table-cell" style="width: 10%;">No</th>
                                    <th>Link Embed Youtube</th>
                                    <th>Judul</th>
                                    <th class="d-none d-xl-table-cell">Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $nomor = 1; ?>
                                    <?php $ambil = $koneksi->query("SELECT * FROM slides"); ?>
                                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                    <tr>
                                        <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                        <td><?= $pecah['link']; ?></td>
                                        <td><?= $pecah['judul']; ?></td>
                                        <td class="d-none d-xl-table-cell"><?= $pecah['detail']; ?></td>
                                        <td>
                                            <a href="index.php?halaman=edit-slides&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                            <a href="index.php?halaman=hapus-slides&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
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