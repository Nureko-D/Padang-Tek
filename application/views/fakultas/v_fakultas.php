<a href="<?= base_url('fakultas/input_fakultas') ?>" class="btn btn-primary btn-sm">Tambah Data</a> <br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php $nomer = 1;
            foreach ($fakultas as $key => $value) { ?>
                <td><?= $nomer++; ?></td>
                <td><?= $value->nama_fakultas ?></td>
                <td>

                    <a href="<?= base_url('fakultas/edit_fakultas/' . $value->id_fakultas) ?>" class="btn btn-warning">Ubah</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>
        </tr>
    <?php } ?>
    </tbody>
</table>