<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title') ?>Daftar Buku<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
    </div>
    <a href="buku/tambah" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Cover Buku</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Ringkasan Buku</th>
                            <th>Jumlah Salinan Tersedia</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($buku as $key) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img src="<?= base_url('img/cover_buku/' . $key['cover_buku']); ?>" style="width: 200px;"></td>
                                <td><?= $key['judul']; ?></td>
                                <td><?= $key['pengarang']; ?></td>
                                <td><?= $key['penerbit']; ?></td>
                                <td><?= $key['tahun_terbit']; ?></td>
                                <td><?= $key['ringkasan_buku']; ?></td>
                                <td><?= $key['jumlah_salinan_tersedia']; ?></td>
                                <td><?= $key['id_kategori']; ?></td>
                                <td>
                                    <a href="buku/edit/<?= $key['id_buku'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="buku/delete/<?= $key['id_buku'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- DataTales Example -->



<?= $this->endSection() ?>