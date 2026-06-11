<div class="card">
    <div class="card-header">
        <h3>Data Fakultas</h3>
        <a href="<?= base_url('fakultas/tambah') ?>" class="btn btn-primary">Tambah</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Fakultas</th>
                <th>Aksi</th>
            </tr>

            <?php $no=1; foreach($fakultas as $f){ ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $f['fakultas_name'] ?></td>
                <td>
                    <a href="<?= base_url('fakultas/ubah/'.$f['fakultas_id']) ?>" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="<?= base_url('fakultas/hapus/'.$f['fakultas_id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>