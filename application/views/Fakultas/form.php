<div class="card">
    <div class="card-header">
        <h3><?= $button ?> Fakultas</h3>
    </div>

    <div class="card-body">
        <form action="<?= $action ?>" method="post">

            <div class="mb-3">
                <label>Nama Fakultas</label>
                <input type="text"
                       name="fakultas_name"
                       class="form-control"
                       value="<?= isset($fakultas['fakultas_name']) ? $fakultas['fakultas_name'] : '' ?>">
            </div>

            <button type="submit" class="btn btn-primary">
                <?= $button ?>
            </button>

            <a href="<?= base_url('fakultas') ?>" class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>