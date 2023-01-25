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
        <h1 class="h3 mb-3"><a href="index.php?halaman=tambah-pengumuman" style="color: #000;">Pengumuman</a></h1>
        <p>
            <a href="index.php?halaman=tambah-pengumuman">Klik disini atau judul untuk menambah data pengumuman <i data-feather="plus-circle"></i></a>
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th style="width: 10%;">No</th>
                                <th style="width: 50%;">Judul</th>
                                <th class="d-none d-xl-table-cell" style="width: 30%;">File</th>
                                <th  style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $nomor = 1; ?>
                                <?php $ambil = $koneksi->query("SELECT * FROM pengumuman"); ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $nomor; ?></td>
                                    <td><?= mb_strimwidth($pecah['judul'], 0, 60, "..."); ?></td>
                                    <td class="d-none d-xl-table-cell"><a href="../file/<?= $pecah['files']; ?>" width="100px" download><?= $pecah['files']; ?></a></td>
                                    <td>
                                        <a href="index.php?halaman=edit-pengumuman&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a> | 
                                        <a href="index.php?halaman=hapus-pengumuman&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
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
</main>