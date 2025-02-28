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
         <?php echo form_open('prodi/input_prodi/' . $prodi->id_prodi) ?>
         <div class="form-group">
             <label>Nama Fakultas</label>
             <input name="nama_prodi" class="form-control" placeholder="Nama {Prodi}" type="text" value="<?= $prodi->nama_prodi ?>">
         </div>
         <div class="form-group">
             <button class="btn btn-primary btn-sml" type="submit">Simpan</button>
             <a href="<?= base_url('prodi/index') ?>" class="btn btn-success">Kembali</a>
             <?php echo form_close() ?>
         </div>
     </div>
 </div>