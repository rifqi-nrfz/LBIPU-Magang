
<header>
    <nav class="navbar navbar-dark navbar-expand-lg bg-youngBlue">
        <div class="container">
            <a href="index.php"><img src="assets/img/LBIPU.png" class="me-4" alt="" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navleft" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link ml-4 px-4 active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active ml-4 px-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="kelas-reguler.php">Kelas Reguler</a></li>
                            <li>
                                <a class="dropdown-item" href="kelas-internasional.php">Kelas Internasional</a>
                            </li>
                            <li><a class="dropdown-item" href="mkdu.php">MKDU</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active ml-4 px-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Program
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="etp.php">ETP</a></li>
                            <li><a class="dropdown-item" href="bipa.php">BIPA</a></li>
                            <li>
                                <a class="dropdown-item" style="color: blue" href="semua-program.php"><u>Lihat semua</u></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active ml-4 px-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Lowongan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dosen-tidak-tetap.php">Dosen Tidak Tetap</a></li>
                            <li><a class="dropdown-item" href="pendamping-tutor.php">Pendamping Tutor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ml-4 px-4 active" aria-current="page" href="galeri.php">Galeri</a>
                    </li>
                </ul>
            </div>

            <form action="pencarian.php" method="get" class="d-flex form-size" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari disini..."  name="keyword" aria-label="Search" />
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div>
    </nav>
</header>