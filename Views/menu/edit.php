<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Edit Menu</h2>
            <form method="post" action="<?= base_url('/menu/edit/' . $menu['id']) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text class=" form-control id="nama" name="nama" value="<?= $menu['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Harga</label>
                    <input type="text class=" form-control id="harga" name="harga" value="<?= $menu['harga'] ?>">
                </div>
                <input type="hidden" name="_method" value="update">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

