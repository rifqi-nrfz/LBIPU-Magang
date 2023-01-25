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
$ambil = $koneksi->query("SELECT * FROM slides WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM slides WHERE id='$_GET[id]'");

echo "<script>location='index.php?halaman=slides';</script>";

?>