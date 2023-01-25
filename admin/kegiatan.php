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
        <h1 class="h3 mb-3"><a href="index.php?halaman=tambah-kegiatan" style="color: #000;">Daftar Kegiatan</a></h1>
        <p>
            <a href="index.php?halaman=tambah-kegiatan">Klik disini atau judul untuk menambah data kegiatan <i data-feather="plus-circle"></i></a>
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th style="width: 10%;">No</th>
                                <th style="width: 50%;">Judul</th>
                                <th class="d-none d-xl-table-cell" style="width: 30%;">Foto</th>
                                <th  style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $nomor = 1; ?>
                                <?php $ambil = $koneksi->query("SELECT * FROM kegiatan"); ?>
                                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $nomor; ?></td>
                                    <td><?= mb_strimwidth($pecah['judul'], 0, 60, "..."); ?></td>
                                    <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['gambar']; ?>" width="100px" height="75px" download></img></td>
                                    <td>
                                        <a href="index.php?halaman=edit-kegiatan&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a> | 
                                        <a href="index.php?halaman=hapus-kegiatan&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
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