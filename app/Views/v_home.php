<?= $this->extend('/template/tempelate-frontend') ?>
<?= $this->section('content') ?>
<div class="col-sm-8 mt-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="415px" src="<?= base_url('img/dsdk1.jpg') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="415px" src="<?= base_url('img/dsdk2.jpg') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="415px" src="<?= base_url('img/dsdk3.jpg') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="col-sm-4 mt-3">
    <div class="col-md-12 col-sm-12 col-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title m-0"><b>Pengguna Aktif Tahun <?= date('Y') ?></b></h5>
            </div>
            <div class="card-body">

                <div class="col-md-12 col-sm-12 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pengguna</span>
                            <span class="info-box-number"><?= "aaa" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-male"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Laki - Laki</span>
                            <span class="info-box-number"><?= "bbb" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-12 col-sm-12 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-female"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Perempuan</span>
                            <span class="info-box-number"><?= "ccc" ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-12 col-12">
                    <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block"><i class="fas fa-file-alt"></i> Mendaftar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>