<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
				<div class="row flex-grow">
					<div class="col-lg-6 d-flex align-items-center justify-content-center">
						<div class="auth-form-transparent text-left p-3">
							<div class="brand-logo">
								<img src="<?php echo base_url("assets/vendor/thematic/gambar/uho.png") ?>" alt="logo uho">
							</div>
							<h4>Selamat Datang Di Halaman Login Form Survey UHO!</h4>
							<h6 class="font-weight-light">Masukan Username Dan Password anda Dibawah Ini</h6>
							<?php echo form_error('username', '<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <h4><i class="icon fa fa-ban"></i> Gagal!</h4>', '</div>'); ?>
							<?php echo form_error('password', '<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <h4><i class="icon fa fa-ban"></i> Gagal!</h4>', '</div>'); ?>
							<form class="pt-3" action="<?php echo site_url('auth/login'); ?>" method="post" role="login">
								<div class="form-group">
									<label for="exampleInputEmail">Username</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-account-outline text-primary"></i>
											</span>
										</div>
										<input type="text" name="username" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword">Password</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-lock-outline text-primary"></i>
											</span>
										</div>
										<input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
									</div>
								</div>
								<div class="my-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="login">LOGIN</button>
								</div>
								<div class="text-center mt-4 font-weight-light">
									Belom Daftar Silahkan Klik Link <a href="<?= site_url('auth/register'); ?>" class="text-primary pendaftaran">Register</a>
								</div>
								<div class="flash-pendaftaran" data-pendaftaran="<?= $this->session->flashdata('info'); ?>"></div>
								<div id="myalert">
									<?php echo $this->session->flashdata('alert', true);
									?>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 login-half-bg d-flex flex-row">
						<p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?php echo date("Y"); ?> Create By Muh Syamsul And Arwan.</p>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>

	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
		$('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
	</script>