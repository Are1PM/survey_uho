<div class="register-box">
    <div class="register-logo">
        <a href="<?php echo base_url(); ?>"><b><?php echo $site['nama_aplikasi']; ?></b></a>
    </div>

    <div class="register-box-body">
        <font color="green">
            <?php echo $this->session->flashdata('pesan'); ?>
        </font>
        <p class="login-box-msg">Register a new membership</p>
        <form action="<?= base_url('auth/check_register'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?php echo form_error('username', '<div class="text-danger"><small>', '</small></div>'); ?>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php echo form_error('nama_lengkap', '<div class="text-danger"><small>', '</small></div>'); ?>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>'); ?>
            </div>
            <label>status anda sekarang</label>
            <div class="form-group has-feedback">
                <select class="form-control" name="status_anda">
                    <?php foreach ($role_user as $role) : ?>
                        <option value="<?php echo $role->id_role ?>"><?php echo $role->name_role ?></option>}
                    <?php endforeach ?>
                </select>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </form>
    </div>
</div>
<a href="<?php echo base_url('auth/login'); ?>" class="text-center">I already have a membership</a>
</div>
</div>