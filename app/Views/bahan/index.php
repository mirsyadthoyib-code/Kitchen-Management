<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Bahan</h1>
            <a class="btn btn-primary my-3" href="/bahan/create">Tambah Data</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Satuan Beli</th>
                        <th scope="col">Satuan Pakai</th>
                        <th scope="col">Konversi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($bahan as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['harga']; ?></td>
                            <td><?= $row['satuan_beli']; ?>
                            <td><?= $row['satuan_pakai']; ?>
                            <td><?= $row['konversi']; ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="/bahan/edit/<?= $row['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>

                                <form action="/bahan/<?= $row['id']; ?>" method="post" class="d-inline">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Anda yakin ingin menghapus?')"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>