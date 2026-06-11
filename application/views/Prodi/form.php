<form action="<?= $action ?>" method="post">

    <div class="mb-3">
        <label>Nama Prodi</label>
        <input type="text"
               name="prodi_name"
               class="form-control"
               value="<?= isset($prodi['prodi_name']) ? $prodi['prodi_name'] : '' ?>"
               required>
    </div>

    <div class="mb-3">
        <label>Strata</label>
        <select name="prodi_strata" class="form-control" required>
            <option value="">-- Pilih --</option>

            <option value="D3"
            <?= isset($prodi['prodi_strata']) && $prodi['prodi_strata']=='D3' ? 'selected' : '' ?>>
                D3
            </option>

            <option value="S1"
            <?= isset($prodi['prodi_strata']) && $prodi['prodi_strata']=='S1' ? 'selected' : '' ?>>
                S1
            </option>

            <option value="S2"
            <?= isset($prodi['prodi_strata']) && $prodi['prodi_strata']=='S2' ? 'selected' : '' ?>>
                S2
            </option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        <?= $button ?>
    </button>

    <a href="<?= base_url('prodi') ?>" class="btn btn-secondary">
        Kembali
    </a>

</form>