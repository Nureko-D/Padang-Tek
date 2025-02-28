<table class="table table-bordered" id="dataTable">
    <thead>
        <tr class="text-center">
            <th>No</th>
            <th>Program Strudi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomer = 1;
        foreach ($prodi as $key => $value) { ?>
            <tr class="text-center">

                <td><?= $nomer++; ?></td>
                <td> <?= $value->nama_prodi; ?></td>
                <td><a href="<?= base_url('prodi/edit_prodi/' . $value->id_prodi) ?>" class="btn btn-warning btn-sm">Update</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>