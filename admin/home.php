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
        <h1 class="h3 mb-3">Dashboard</h1>
        <div class="row">
            <div class="col-lg-8 d-flex">
                <div class="card flex-fill">
                    <h1 class="text-center m-5">Selamat Datang Admin !</h1>
                    <center>
                        <img width="250px" style="margin-bottom: 50px;" src="../assets/img/LBIPU.png" alt="LBIPU">
                    </center>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="card flex-fill">
                    <h1 class="text-center m-5">Jumlah Pengunjung</h1>
                    <center>
                        <a href="http://s11.flagcounter.com/more/Ma"><img
                        src="https://s11.flagcounter.com/count2/Ma/bg_FFFFFF/txt_000000/border_000000/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/"
                        alt="Flag Counter" border="0" class="mb-5"></a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</main>