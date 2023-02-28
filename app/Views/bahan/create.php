<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mb-3">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Bahan</h2>

            <?php helper('form'); ?>

            <form action="/bahan/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (validation_show_error('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama')?>">
                        <div class="invalid-feedback">
                            <?= validation_show_error('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga')?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="satuan_beli" class="col-sm-2 col-form-label">Satuan Beli</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="satuan_beli" name="satuan_beli" value="<?= old('satuan_beli')?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="satuan_pakai" class="col-sm-2 col-form-label">Satuan Pakai</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="satuan_pakai" name="satuan_pakai" value="<?= old('satuan_pakai')?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="konversi" class="col-sm-2 col-form-label">Konversi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="konversi" name="konversi" value="<?= old('konversi')?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>