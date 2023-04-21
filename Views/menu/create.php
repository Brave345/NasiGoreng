<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Tambah Menu</h2>
            <form method="post" action="<?= base_url('/menu/create') ?>">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga') ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
