<!-- change this template -->

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
				<div class="row flex-grow">
					<div class="col-lg-6 d-flex align-items-center justify-content-center">
						<div class="auth-form-transparent text-left p-3">
							<div class="brand-logo">
								<img src="<?php echo base_url('assets/vendor/thematic/gambar/uho.png'); ?>" alt="logo">
							</div>
							<h4>Belom Punya Akun?</h4>
							<?php echo form_error('nama_lengkap'); ?>
							<?php echo form_error('username', '<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <h4><i class="icon fa fa-ban"></i> Gagal!</h4>', '</div>'); ?>
							<?php echo form_error('password1', '<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <h4><i class="icon fa fa-ban"></i> Gagal!</h4>', '</div>'); ?>
							<h6 class="font-weight-light">Silahkan Register dulu baru Login</h6>
							<form class="pt-3" action="<?php echo base_url('auth/check_register'); ?>" method="post">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-account-outline text-primary"></i>
											</span>
										</div>
										<input type="text" name="nama_lengkap" class="form-control form-control-lg border-left-0" placeholder="masukan nama lengkap anda" value="<?= set_value('nama_lengkap'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label>Username</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-email-outline text-primary"></i>
											</span>
										</div>
										<input type="text" name="username" class="form-control form-control-lg border-left-0" placeholder="masukan username anda" value="<?= set_value('username'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label>Password</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-lock-outline text-primary"></i>
											</span>
										</div>
										<input type="password" name="password1" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label>Ulangi Password</label>
									<div class="input-group">
										<div class="input-group-prepend bg-transparent">
											<span class="input-group-text bg-transparent border-right-0">
												<i class="mdi mdi-lock-outline text-primary"></i>
											</span>
										</div>
										<input type="password" name="password2" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control form-control-lg" id="exampleFormControlSelect2" name="status_anda">
										<?php foreach ($role_user as $role) : ?>
											<option value="<?php echo $role->id_role ?>"><?php echo $role->name_role ?></option>}
										<?php endforeach ?>
									</select>
								</div>
								<div class="mt-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Daftar</button>
							</form>
						</div>
						<div class="text-center mt-4 font-weight-light">
							Kalo sudah pernah register sebelomnya silahkan login <a href="<?= site_url('auth/login') ?>" class="text-primary">Login</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 register-half-bg d-flex flex-row">
					<p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?= date('Y') ?> Design by arwan and samsul.</p>
				</div>
			</div>
		</div>

		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
	</div>