<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Daftar Buku<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Buku</h1>
    <form id="editbuku" action="<?php echo base_url('admin/buku/update') ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $buku['id_buku']; ?>">
        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul_buku" value="<?= $buku['judul']; ?>">
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $buku['pengarang']; ?>">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit']; ?>">
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>">
        </div>
        <div class="form-group">
            <label for="ringkasan">Ringkasan Buku</label>
            <textarea class="form-control" id="ringkasan" name="ringkasan_buku" rows="5"><?= $buku['ringkasan_buku']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="jumlah_buku">Jumlah Salinan Tersedia</label>
            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_salinan_tersedia" value="<?= $buku['jumlah_salinan_tersedia']; ?>">
        </div>
        <div class="form-group">
            <label for="photo">Pilih Foto:</label>
            <input type="file" class="form-control-file" id="photo" name="cover" accept="image/*">
        </div>
        <button class="btn btn-primary mt-3 mb-3" onclick="return confirm('Apakah anda yakin akan menambahkan data ini?')">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>