<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Hapus Menu</h2>
            <p>Anda yakin ingin menghapus menu <?= $menu['nama'] ?>?</p>
            <form method="post" action="<?= base_url('/menu/delete/' . $menu['id']) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
