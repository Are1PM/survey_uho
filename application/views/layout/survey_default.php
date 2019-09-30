<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default Form</h4>
                  <p class="card-description">
                    <div class="blockquote blockquote-primary">
                    Silahkan isi data diri anda dengan sebenar-benarnya!
                    </div>
                  </p>
                   <?php echo form_error('pekerjaan_orang_tua'); ?>
                  <form class="forms-sample blockquote blockquote-primary" action="<?php 
                    if($this->session->userdata('status') == "mahasiswa_aktif"){
                      echo base_url('admin/home/default_survey'); 
                    }else{
                      echo base_url('member/home/default_survey'); 
                    }
                  ?>" method="post">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?= $this->session->userdata['nama_lengkap'] ?>" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="NIM atau Stambuk">
                      </div>
                      <?php echo form_error('pekerjaan_orang_tua'); ?>
                    </div>
                    <div class="form-group row">
                      <label for="nim" class="col-sm-3 col-form-label">NIM/Stambuk</label>
                      <div class="col-sm-9">
                        <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM atau Stambuk">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                      <div class="col-sm-9">
                        <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                      <div class="col-sm-9">
                        <input type="text" name="fakultas" class="form-control" id="fakultas" placeholder="Fakultas">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_tlp" class="col-sm-3 col-form-label">No. Telp/HP</label>
                      <div class="col-sm-9">
                        <input type="text" name="no_hp" class="form-control" id="no_tlp" placeholder="Nomor telepon atau handphone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="alamat_rumah" class="col-sm-3 col-form-label">Alamat Rumah</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat_rumah" id="alamat_rumah" rows="4" placeholder="Alamat Rumah Anda..."></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nama_ortu" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                      <div class="col-sm-9">
                        <input type="text" name="nama_orang_tua" class="form-control" id="nama_ortu" placeholder="Nama Orang Tua">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pekerjaan_ortu" class="col-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                      <div class="col-sm-9">
                        <input type="text" name="pekerjaan_orang_tua" class="form-control" id="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="penghasilan_ortu" class="col-sm-3 col-form-label">Penghasilan Orang Tua</label>
                      <div class="col-sm-9">
                        <input type="text" name="penghasilan_orang_tua" class="form-control" id="penghasilan_ortu" placeholder="Penghasilan Orang Tua">
                      </div>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary mr-2">Simpan</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                  </form>
                </div>
              </div>
 </div>