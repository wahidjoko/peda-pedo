<?= $this->extend('template/tempelate-frontend') ?>
<?= $this->section('content') ?>


<div class="col-sm-5 mt-3">
    <img class="img-fluid pad" src="<?= base_url('logo/register.png') ?>" width="350px" alt="">
</div>

<div class="col-sm-7 mt-3">

    <?php
    // echo form_open('Pendaftaran/simpanPendaftaran');
    ?>
    <div class="col-md-12 col-sm-12 col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0"><b>Pendaftaran</b></h5>
            </div>
            <div class="card-body">

                <?php session()->getFlashdata('errors');

                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                }

                ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Nomor Induk Kependudukan (NIK)</label>
                            <input name="nik" value="<?= old('nik') ?>" class="form-control" placeholder="NIK">

                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>No Handphone (HP)</label>
                            <input name="no_telp" value="<?= old('no_telp') ?>" class="form-control" placeholder="No Handphone">
                            <span class="help-block" style="color: #999999 !important"><i><span class="text-danger">*</span>&nbsp;Nomor handphone yang aktif dan dapat menerima pesan singkat [ SMS ] kode verifikasi</i></span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input name="email" value="<?= old('email') ?>" class="form-control" placeholder="Alamat Email">
                            <span class="help-block" style="color: #999999 !important"><i><span class="text-danger">*</span>&nbsp;Alamat email yang aktif untuk menerima pemberitahuan.</i></span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" value="<?= old('password') ?>" class="form-control" placeholder="Password">

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Re-Password</label>
                            <input name="repassword" value="<?= old('repassword') ?>" class="form-control" placeholder="Re-Password">

                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-12 mt-3">
                        <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fas fa-save"></i> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<?= $this->endSection() ?>