<?= $this->extend('layouts/backend/base_layouts') ?>
<?= $this->section('title'); ?>Data Trasaksi <?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
    </div>
    <a href="buku/tambah" class="btn btn-primary btn-sm my-4"><i class="bx bx-plus"></i> Tambah Data</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anggota</th>
                        <th>Judul</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($transaksi as $key => $value) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_anggota ?>

                            <td><?= $value->judul ?></td>
                            <td><?= $value->tanggal_peminjaman ?></td>
                            <td><?= $value->tanggal_pengembalian ?></td>
                            <td>
                                <a href="buku/edit/<?= $value->id_transaksi ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="buku/delete/<?= $value->id_transaksi ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?= $this->endSection() ?>