<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Daftar Menu</h2>
            <a href="<?= base_url('/menu/create') ?>" class="btn btn-primary mb-3">Tambah Menu</a>
            <?php if (empty($menu)) : ?>
                <div class="alert alert-danger" role="alert">
                    Belum ada data menu
                </div>
            <?php else : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $m['nama'] ?></td>
                                <td><?= $m['harga'] ?></td>
                                <td>
                                    <a href="<?= base_url('/menu/edit/' . $m['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('/menu/delete/' . $m['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
