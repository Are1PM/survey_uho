<div class="row">            
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Survey</h4>
        <form class="form-sample">
          <p>
          <div class="row blockquote blockquote-primary">
            Menurut anda seberapa besar penekanan pada pembelajaran di bawah ini dilaksanakan di program studi anda?
          </div>
          </p>
          <div class="row">
      
            <div class="col-md-12 blockquote blockquote-primary">
            <?php //print_r($soal);die; ?>

            <?php 
              $i = 1;
              foreach($soal as $s):
            ?>
              <div class="form-group row">

                <label class="col-sm-7 col-form-label"><?= $s->isi ?></label>
                <div class="col-sm-1 pl-0 pr-0">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="soal_<?= $i?>" id="membershipRadios1" value="tidak memuaskan">
                      (1) TM
                    </label>
                  </div>
                </div>

                <div class="col-sm-1 pl-0 pr-0">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="soal_<?= $i?>" id="membershipRadios2" value="kurang memuaskan">
                      (2) KM
                    </label>
                  </div>
                </div>
                <div class="col-sm-1 pl-0 pr-0">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="soal_<?= $i?>" id="membershipRadios3" value="cukup memuaskan">
                      (3) CM
                    </label>
                  </div>
                </div>
                <div class="col-sm-1 pl-0 pr-0">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="soal_<?= $i?>" id="membershipRadios4" value="memuaskan">
                      (4) M
                    </label>
                  </div>
                </div>
                <div class="col-sm-1 pl-0 pr-0">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="soal_<?= $i?>" id="membershipRadios4" value="sangat memuaskan">
                      (5) SM
                    </label>
                  </div>
                </div>
            
              </div>
              <hr>
              <?php endforeach; ?>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>