<?php echo $this->extend('admin/layout/template'); ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class=" content-header">
        <div class="container-fluid ml-2">
            <div class="row mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Tambah Data Pengguna </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/user/'); ?>#">Data Pengguna</a></li>
                        <li class="breadcrumb-item" active>Tambah Data Pengguna</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card card-info">
                        <div class="card-header" `>
                        </div>
                        <div class="card-body">
                            <form action="/admin/simpanUser" method="POST">
                                <?= csrf_field(); ?>
                                <div class="form-group ml-2">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label for="nama_user">Nama Pengguna</label>
                                            <input type="text" id="nama_user" class="form-control" name="nama_user">
                                        </div>
                                        <div class="col">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" name="username">
                                        </div>
                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="text" id="password" class="form-control" name="password" value="123" placeholder="123" readonly>
                                        </div>
                                        <div class="col">
                                            <label for="akses">Hak Akses</label>
                                            <select name="akses" id="akses" class="form-control select" required>
                                                <option value=""></option>
                                                <option value="Semua">Semua</option>
                                                <option value="TK">TK</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>