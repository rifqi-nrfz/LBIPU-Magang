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
$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if (file_exists("../foto/$foto")){
    unlink("../foto/$foto");
}

$koneksi->query("DELETE FROM kegiatan WHERE id='$_GET[id]'");

echo "<script>location='index.php?halaman=kegiatan';</script>";

?>