<div class="card shadow border-0 mb-4">
    <div class="card-header bg-success text-white d-flex justify-content-between">
        <h5 class="mb-0">Data Program Studi</h5>

        <a href="<?= base_url('prodi/tambah') ?>" class="btn btn-light">
            + Tambah Prodi
        </a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Sarjana</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($prodi as $key => $value): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value['prodi_name'] ?></td>
                        <td><?= $value['prodi_strata'] ?></td>
                        <td>
                            <a href="<?= base_url('prodi/ubah/'.$value['prodi_id']) ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="<?= base_url('prodi/hapus/'.$value['prodi_id']) ?>" class="btn btn-danger btn-sm">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>