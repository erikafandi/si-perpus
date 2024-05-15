<nav class="navbar navbar-expand-lg bg-info rounded fixed-top"> <!-- Menambahkan kelas fixed-top -->
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#" style="color: white; font-size: 24px;"> <!-- Menambahkan style untuk ukuran huruf -->
                <img src="<?php echo (base_url()) ?>/img/logoperpus.png" alt="Logo" width="40" height="50" class="d-inline-block align-text-center">
                Perpustakaan Kelompok 4
            </a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('home') ?>" style="margin-right: 10px; color: white; font-size: 20px;"  onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white'"> Home</a> <!-- Menambahkan style untuk ukuran huruf -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" style="margin-right: 10px; color: white; font-size: 20px;" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white'"> <!-- Menambahkan style untuk ukuran huruf dan efek hover -->
                        Daftar Buku
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('about') ?>" style="color: white; font-size: 20px;" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white'"> <!-- Menambahkan style untuk ukuran huruf dan efek hover -->
                        About
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ms-lg-auto">
    <button class="btn btn-light my-2 my-sm-0 mr-2" type="button" onclick="window.location.href='<?= base_url('#') ?>'">Masuk</button> <!-- Tambahkan tombol Register -->
    </form>
        </div>
    </div>
</nav>
