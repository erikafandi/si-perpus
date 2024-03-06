<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Daftar Buku<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Buku</h1>
    <form>
        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Buku">
        </div>
        <div class="form-group">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" placeholder="Masukkan Nama Pengarang">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" placeholder="Masukkan Nama Penerbit">
        </div>
        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" class="form-control" id="tahun_terbit" placeholder="Masukkan Tahun Terbit">
        </div>
        <div class="form-group">
            <label for="ringkasan">Ringkasan Buku</label>
            <textarea class="form-control" id="ringkasan" name="ringkasan_buku" rows="5" placeholder="Masukan Ringkasan Buku"></textarea>
        </div>
        <div class="form-group">
            <label for="jumlah_buku">Jumlah Salinan Tersedia</label>
            <input type="number" class="form-control" id="jumlah_buku" placeholder="Masukkan Jumlah Buku">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection() ?>