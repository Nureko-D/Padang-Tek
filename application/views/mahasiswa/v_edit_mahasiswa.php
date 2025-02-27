 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
     </div>
     <div class="card-body">
         <?php
            //notif validasi form diambil dari halam utama yg danger 
            echo validation_errors('<div class="col-sm-12"><div class="card bg-danger text-white shadow">
                        <div class="card-body">', '</div></div></div>');
            ?>

         <!-- form open dibawah arahkan ke inputan, yaitu controller mahasiswa/nama function input mahasiswa -->
         <?php echo form_open('mahasiswa/edit_mahasiswa/' . $mhs->id_mahasiswa) ?>
         <div class="form-group">
             <label>NIM</label>
             <input name="nim" value="<?= $mhs->nim ?>" class="form-control" placeholder="nim" type="number">
         </div>

         <div class="form-group">
             <label>Nama Mahasiswa</label>
             <input name="nama_mahasiswa" value="<?= $mhs->nama_mahasiswa ?>" class=" form-control" placeholder="Nama mhs" type="text">
         </div>

         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input name="tempat_lahir" value="<?= $mhs->tempat_lahir ?>" class="form-control" placeholder="tempat lahir" type="text">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <input name="tgl_lahir" value="<?= $mhs->tgl_lahir ?>" class="form-control" placeholder="" type="date">
                 </div>

             </div>
         </div>

         <div class="form-group">
             <label>Jenis Kelamin</label>
             <select name="jenis_kelamin" class="form-control" id="">
                 <option value="">--Jenis Kelamin--</option>
                 <option value="L" <?= $mhs->jenis_kelamin === 'L' ? 'selected' : '' ?>>Laki-laki</option>
                 <option value="P" <?= $mhs->jenis_kelamin === 'P' ? 'selected' : '' ?>>Perempuan</option>
             </select>
         </div>

         <div class="form-group">
             <button class="btn btn-primary btn-sml" type="submit">Simpan</button>
             <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-success">Kembali</a>
             <?php echo form_close() ?>
         </div>
     </div>
 </div>