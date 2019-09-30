

<div class="row">            
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Survey</h4>
        <form class="form-sample" action="<?php 
        	if($this->session->userdata('status') == "mahasiswa_aktif"){
        	  echo base_url('admin/home/index'); 
        	}else{
        	  echo base_url('member/home/index'); 
        	}
         ?>" method="post">
          <p>
          <div class="row blockquote blockquote-primary">
            PETUNJUK UMUM :
          </div>
          </p>
          <div class="row">
      
            <div class="col-md-12 blockquote blockquote-primary">
              <div class="form-group row">
              	<div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0">a.</div>
		            <div class="col-sm-11 pl-0">           		  
		                Survey ini dilakukan dengan tujuan untuk mengukur tingkat kepuasan mahasiswa terhadap pelayanan akademik di Universitas Halu Oleo
		            </div>	
	            </div>	           
	            <br>
				<div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0">b.</div>
		            <div class="col-sm-11 pl-0">
		                Saudara mendapatkan kepercayaan terpilih sebagai responden, dimohon untuk mengisi seluruh instrumen ini sesuai dengan pengalaman, pengetahuan, persepsi, dan keadaan yang sebenarnya.            
		            </div>
	        	</div>
	        	<br>
				<div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0">c.</div>
		            <div class="col-sm-11 pl-0">
		                Partisipasi Saudara untuk mengisi instrumen ini secara objektif sangat besar artinya bagi kami untuk mendapatkan informasi yang akurat       
		            </div>
		        </div>
		        <br>
	            <div class="row col-12 pb-2">
              		<div class="col-sm-1 text-center p-0">d.</div>
		            <div class="col-sm-11 pl-0">
		                Jawaban Saudara dijamin kerahasiaan dan tidak memiliki dampak negatif dalam	bentuk apapun.     
		            </div>
		        </div>
		        <br>
	            <div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0">e.</div>
		            <div class="col-sm-11 pl-0">
		                Pilihlah salah satu dari alternatif yang disediakan     
		            </div>
		        </div>
		        <br>
				<div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0">f.</div>
		            <div class="col-sm-11 pl-0">
		                Ada empat alternatif jawaban yang dapat saudara pilih, yaitu:
		            </div>
		        </div>
		        <div class="row col-12 pb-2">
	              	<div class="col-sm-1 text-center p-0"></div>
		            <div class="col-sm-11 pl-0">
		            	<div class="row col-12">
			            	<div class="col-sm-1 pl-0 pr-0">(1)&nbsp; TM</div>
			            	<div class="col-sm-10 pl-0">= Tidak Memuaskan</div> 
		            	</div>                  
		            </div>
		            <div class="col-sm-1 text-center p-0"></div>
		            <div class="col-sm-11 pl-0"> 
						<div class="row col-12">
			            	<div class="col-sm-1 pl-0 pr-0">(2)&nbsp; KM</div>
			            	<div class="col-sm-10 pl-0">= Kurang Memuaskan</div> 
		            	</div> 			
		            </div>
		            <div class="col-sm-1 text-center p-0"></div>
		            <div class="col-sm-11 pl-0"> 						
						<div class="row col-12">
			            	<div class="col-sm-1 pl-0 pr-0">(3)&nbsp; CM</div>
			            	<div class="col-sm-10 pl-0">= Cukup Memuaskan</div> 
		            	</div>  						
		            </div>
		            <div class="col-sm-1 text-center p-0"></div>
		            <div class="col-sm-11 pl-0"> 
						<div class="row col-12">
			            	<div class="col-sm-1 pl-0 pr-0">(4)&nbsp; M</div>
			            	<div class="col-sm-10 pl-0">= Memuaskan</div> 
		            	</div>  						
		            </div>
		            <div class="col-sm-1 text-center p-0"></div>
		            <div class="col-sm-11 pl-0">
						<div class="row col-12">
			            	<div class="col-sm-1 pl-0 pr-0">(5)&nbsp; SM</div>
			            	<div class="col-sm-10 pl-0">= Sangat Memuaskan</div> 
		            	</div> 
		            </div>
		        </div>
              </div>
              <hr>
              <button type="submit" name="lanjut" value="1" class="btn btn-primary mr-2">Selanjutnya</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>