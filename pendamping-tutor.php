<?php 
    include "koneksi.php";
    $ambil = $koneksi->query("SELECT * FROM lowongan WHERE jenis_lowongan='Pendamping Tutor'");
    $pecah= $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include "head.php";
?>

<body>
    <?php 
        include "navbar.php";
    ?>
    <main class="container profil">
        <h1>Pendamping Tutor</h1>
        <?php if($pecah['status_lowongan']!='Aktif'): ?>
            <p class="alert alert-danger" role="alert">
                Untuk saat ini belum ada lowongan Pendamping Tutor. Akan kami perbaharui jika sudah ada lowongan.
            </p>
            
        <?php else: ?>
            <p><?= $pecah['detail']; ?></p>
            <a href="file/<?= $pecah['files']; ?>"><?= $pecah['files']; ?></a>
        <?php endif; ?>
        
    </main>
    <?php 
        include "footer.php";
    ?>
</body>

</html>