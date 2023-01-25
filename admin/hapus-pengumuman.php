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
$ambil = $koneksi->query("SELECT * FROM pengumuman WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['foto'];
if (file_exists("../foto/$foto")){
    unlink("../foto/$foto");
}

$pdf = $pecah['files'];
if (file_exists("../file/$pdf")){
    unlink("../file/$pdf");
}

$koneksi->query("DELETE FROM pengumuman WHERE id='$_GET[id]'");

echo "<script>location='index.php?halaman=pengumuman';</script>";

?>