<?= $this->extend('template/tempelate-frontend') ?>
<?= $this->section('content') ?>


<div class="col-sm-5 mt-3">
    <div class="text-center">
        <img class="img-fluid pad" src="<?= base_url('logo/login.png') ?>" width="350px">
    </div>
</div>

<div class="col-sm-7">
    <?php echo form_open('Auth/cek_login_user') ?>
    <div class="col-md-12 col-sm-12 col-12 mt-3">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0">Login User</h5>
            </div>
            <div class="card-body">
                <?php
                session()->getFlashdata('errors');
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                } ?>

                <div class="form-group">
                    <p class="text-danger">*) Sebelum login, pastikan anda sudah mendaftar di aplikasi ini !!!</p>
                </div>
                <div class="form-group">
                    <label>Nomor Induk Kependudukan</label>
                    <input name="nik" value="<?= old('nik') ?>" class="form-control" placeholder="NIK">
                    <p class="text-danger"><?= $validation->hasError('nik') ? $validation->getError('nik') : '' ?></p>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?= old('password') ?>" class="form-control" placeholder="Password">
                    <p class="text-danger"><?= $validation->hasError('password') ? $validation->getError('password') : '' ?></p>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-info btn-flat btn-block">Login</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= base_url('Daftar') ?>" class="btn btn-success btn-flat btn-block">Mendaftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo form_close() ?>
</div>


<!-- jQuery -->
<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<?= $this->endSection() ?>