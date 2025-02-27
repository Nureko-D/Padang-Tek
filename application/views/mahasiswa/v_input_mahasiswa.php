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
         <?php echo form_open('mahasiswa/input_mahasiswa') ?>
         <div class="form-group">
             <label>NIM</label>
             <input name="nim" class="form-control" placeholder="nim" type="number">
         </div>

         <div class="form-group">
             <label>Nama Mahasiswa</label>
             <input name="nama_mahasiswa" class="form-control" placeholder="nim" type="text">
         </div>

         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label>Tempat Lahir</label>
                     <input name="tempat_lahir" class="form-control" placeholder="tempat lahir" type="text">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label>Tanggal Lahir</label>
                     <input name="tgl_lahir" class="form-control" placeholder="" type="date">
                 </div>
             </div>
         </div>



         <div class="form-group">
             <label>Jenis Kelamin</label>
             <select name="jenis_kelamin" class="form-control" id="">
                 <option value="">--Jenis Kelamin--</option>
                 <option value="L">Laki-laki</option>
                 <option value="P">Perempuan</option>
             </select>
         </div>
         <div class="form-group">
             <label>Fakultas</label>
             <select name="id_fakultas" class="form-control" id="">
                 <option value="">--Pilih Fakultas--</option>
                 <?php foreach ($fakultas as $key => $value) { ?>
                     <option value="<?= $value->id_fakultas ?>"><?= $value->nama_fakultas ?> </option>
                 <?php } ?>
             </select>
         </div>
         <div class="form-group">
             <label>Program Studi</label>
             <select name="id_prodi" class="form-control" id="">
                 <option value="">--Pilih Prodi--</option>
                 <?php foreach ($prodi as $key => $value) { ?>
                     <option value="<?= $value->id_prodi ?>"><?= $value->nama_prodi ?> </option>
                 <?php } ?>
             </select>
         </div>



         <div class="form-group">
             <button class="btn btn-primary btn-sml" type="submit">Simpan</button>
             <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-success">Kembali</a>
             <?php echo form_close() ?>
         </div>
     </div>
 </div>