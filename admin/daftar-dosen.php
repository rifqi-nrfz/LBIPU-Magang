<?php
if(!isset($_SESSION['admin'])){
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php'</script>";
    header("Location:login.php");
    exit();
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><a href="index.php?halaman=tambah-dosen" style="color: #000;">Daftar Dosen</a></h1>
        <p>
            <a href="index.php?halaman=tambah-dosen">Klik disini atau judul untuk menambah data dosen <i    data-feather="plus-circle"></i></a>
        </p>
        
        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dosen Bahasa Indonesia</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell" width="10%">No</th>
                                <th width="50%">Nama</th>
                                <th class="d-none d-xl-table-cell" width="30%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Bahasa Indonesia'"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                <td><?= $pecah['nama_dosen']; ?></td>
                                <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                                <td>
                                    <a href="index.php?halaman=edit-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    <a href="index.php?halaman=hapus-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dosen Pancasila</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell" width="10%">No</th>
                                <th width="50%">Nama</th>
                                <th class="d-none d-xl-table-cell" width="30%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Pancasila'"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                <td><?= $pecah['nama_dosen']; ?></td>
                                <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                                <td>
                                    <a href="index.php?halaman=edit-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    <a href="index.php?halaman=hapus-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dosen Bahasa Inggris</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell" width="10%">No</th>
                                <th width="50%">Nama</th>
                                <th class="d-none d-xl-table-cell" width="30%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Bahasa Inggris'"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                <td><?= $pecah['nama_dosen']; ?></td>
                                <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                                <td>
                                    <a href="index.php?halaman=edit-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    <a href="index.php?halaman=hapus-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dosen Kewarganegaraan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell" width="10%">No</th>
                                <th width="50%">Nama</th>
                                <th class="d-none d-xl-table-cell" width="30%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Kewarganegaraan'"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                <td><?= $pecah['nama_dosen']; ?></td>
                                <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                                <td>
                                    <a href="index.php?halaman=edit-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    <a href="index.php?halaman=hapus-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pendamping Tutor</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-xl-table-cell" width="10%">No</th>
                                <th width="50%">Nama</th>
                                <th class="d-none d-xl-table-cell" width="30%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM dosen WHERE dosen.mata_kuliah = 'Pendamping Tutor'"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td class="d-none d-xl-table-cell"><?= $nomor; ?></td>
                                <td><?= $pecah['nama_dosen']; ?></td>
                                <td class="d-none d-xl-table-cell"><img src="../foto/<?= $pecah['foto']; ?>" width="50px" height="50px"></td>
                                <td>
                                    <a href="index.php?halaman=edit-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-primary" data-feather="edit"></i></a>
                                    <a href="index.php?halaman=hapus-dosen&id=<?= $pecah['id']; ?>"><i class="align-middle text-danger" data-feather="trash"></i></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>