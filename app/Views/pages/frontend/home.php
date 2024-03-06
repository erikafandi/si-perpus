<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Home<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo (base_url("img/banner/bg_1.jpg")) ?>" class="d-block" width="100%" height="500" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="<?php echo (base_url("img/banner/bg_1.jpg")) ?>" class="d-block" width="100%" height="500" alt="...">
        </div>
        <div class="carousel-item active">
            <img src="<?php echo (base_url("img/banner/bg_1.jpg")) ?>" class="d-block" width="100%" height="500" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="search-card">
                <h3 class="text-center mb-3">Cari Buku</h3>
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Judul Buku" aria-label="Judul Buku" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="judul mb-5">
        <h1>buku terbaru</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 1</h5>
                            <p class="card-text">Deskripsi buku 1.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 2</h5>
                            <p class="card-text">Deskripsi buku 2.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 3</h5>
                            <p class="card-text">Deskripsi buku 3.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 4</h5>
                            <p class="card-text">Deskripsi buku 4.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card book-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 4</h5>
                            <p class="card-text">Deskripsi buku 4.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
