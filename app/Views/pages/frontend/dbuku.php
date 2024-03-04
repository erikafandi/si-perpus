<?= $this->extend('layouts/frontend/base_layouts') ?>
<?= $this->section('title') ?>Daftar Buku<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="judul mb-5">
        <h1>Daftar Buku</h1>
    </div>
    <div class="row">
        <?php
        foreach ($buku as $key) : ?>
            <div class="col-md-6">

                <div class="book-card">
                    <img src="<?= base_url('img/banner/bg_1.jpg'); ?>" alt="Book 1 Cover" class="book-cover">
                    <div class="book-details">
                        <h2 class="book-title"><?= $key['judul']; ?></h2>
                        <p class="book-description"><?= $key['ringkasan_buku']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>