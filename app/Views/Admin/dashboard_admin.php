<?php echo $this->extend('admin/layout/template'); ?>


<!-- Main content -->
<?= $this->section('content') ?>
<div class="content-wrapper">
  <div class="container-fluid ">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang <? $nama_user; ?></h1>
            <h5>di Sistem Pengelolaan Data Pegawai ASN</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Dashboard Admin</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <!-- ./col -->
                <div class="col-lg-3 col-6">

                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Pengguna Aktif</span>
                      <span class="info-box-number"><?= $jml_usr; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<!-- /.row (main row) -->
</div>
</div><!-- /.container-fluid -->
<?= $this->endSection() ?>