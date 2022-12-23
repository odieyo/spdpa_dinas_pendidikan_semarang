<?php echo $this->extend('admin/layout/template'); ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class=" content-header">
        <div class="container-fluid ml-2">
            <div class="row mt-2">
                <div class="col-sm-6">
                    <h3 class="page-header">Ubah Data Pengguna </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>#">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin/user/'); ?>#">Data Pengguna</a></li>
                        <li class="breadcrumb-item" active>Ubah Data Pengguna</li>
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
                            <form action="/admin/updateUser/<?= $users['id_user']; ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="slug" value="<?= $users['slug']; ?>">
                                <div class="form-group ml-2">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <label for="nama_user">Nama Pengguna</label>
                                            <input type="text" id="nama_user" class="form-control" name="nama_user" value="<?= $users['nama_user']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" class="form-control" name="username" value="<?= $users['username']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control" name="password" value="<?= $users['password']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="akses">Hak Akses</label>
                                            <select id="akses" name="akses" class="form-control select">
                                                <!-- <option value="</?= old('akses') ?>"></?= old('akses') ?></option> -->
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