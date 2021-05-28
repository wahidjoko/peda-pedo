<?= $this->extend('template/tempelate-frontend') ?>
<?= $this->section('content') ?>


<div class="col-sm-5 mt-3">
    <img class="img-fluid pad" src="<?= base_url('logo/aktivasi.png') ?>" width="350px" alt="">
</div>

<div class="col-sm-7 mt-3">

    <?php
    echo form_open('Aktivasi/simpanOTP');
    ?>
    <div class="col-md-12 col-sm-12 col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0"><b>Aktivasi Akun</b></h5>
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
                            <blockquote class="no-margin mb-15 border-left-orange">
                                Masukkan kode aktivasi yang telah dikirimkan oleh system.
                                <footer class="text-italic text-size-mini">Pastikan anda telah mendapatkan kode aktivasi yang dikirimkan oleh system.</footer>
                                <footer class="text-italic no-margin-top text-size-mini">Silahkan kirim ulang kode aktivasi jika tidak menerima.</footer>
                                <footer class="text-italic no-margin-top text-size-mini">Permintaan kirim ulang kode aktivasi hanya berlaku 1x24jam.</footer>
                            </blockquote>
                            <label>Kode Aktivasi</label>
                            <input name="aktivasi" value="<?= old('aktivasi') ?>" class="form-control" placeholder="Kode Aktivasi">
                            <p class="text-danger"><?= $validation->hasError('aktivasi') ? $validation->getError('aktivasi') : '' ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fas fa-check"></i> Aktivasi Akun</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo form_close() ?>
</div>



<?= $this->endSection() ?>