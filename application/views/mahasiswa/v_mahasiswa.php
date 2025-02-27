<a href="<?= base_url('mahasiswa/input_mahasiswa') ?>" class="btn btn-primary btn-sm">Tambah Data</a> <br>

<?php
// notif CRUD
if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}

?>

<table class="table table-bordered" id="dataTable">
    <thead>
        <tr class="text-center">
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat/tanggal</th>
            <th>Jenis Kelamin</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomer = 1;
        foreach ($mhs as $key => $value) { ?>
            <tr>
                <td class="text-center"><?= $nomer++; ?></td>
                <td class="text-center"><?= $value->nim  ?></td>
                <td><?= $value->nama_mahasiswa  ?></td>
                <td class="text-center"><?= $value->tempat_lahir ?>,<?= $value->tgl_lahir ?></td>
                <td class="text-center"><?php if ($value->jenis_kelamin == 'L') {
                                            echo 'Laki-laki';
                                        } else {
                                            echo 'Perempuan';
                                        } ?>
                </td>
                <td><?= $value->nama_fakultas; ?></td>
                <td><?= $value->nama_prodi; ?></td>
                <td class="text-center">
                    <a href="<?= base_url('mahasiswa/edit_mahasiswa/' . $value->id_mahasiswa) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('mahasiswa/delete_mahasiswa/' . $value->id_mahasiswa) ?>" onclick="return confirm('Yakin akan dihapus... ?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>