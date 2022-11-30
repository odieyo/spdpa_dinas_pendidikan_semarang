<?php echo $this->extend('admin/layout/template'); ?>

<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="page-header">Data Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengguna</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (session()->getFlashdata('notifikasi')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('notifikasi'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="row ml-auto mb-3">
                            <div class="col-sm-12 col-md-6">
                                <a href="<?= base_url('/admin/user/tambah'); ?>" type="button" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Pengguna</a>
                            </div>
                        </div>
                        <div class="row">
                            <table id="tabel_user" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Hak Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <tbody>
                                    <?php foreach ($users as $usr) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $usr['nama_user']; ?></td>
                                            <td><?= $usr['username']; ?></td>
                                            <td><?= $usr['password']; ?></td>
                                            <td><?= $usr['akses']; ?></td>
                                            <td>
                                                <a href="/admin/user/ubah/<?= $usr['slug']; ?>" type="button" class="btn btn-info btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="/admin/user/hapus/<?= $usr['id_user']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <!-- <td>
                                                <a href="/admin/user/ubah/</?= $usr['slug']; ?>" type="button" class="btn btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td> -->
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
        <!-- content -->
    </div>
    <div class="modal fade" id="hapusModal" tabindex="-1" aria-hidden="true" aria-labelledby="hapusPenggunaLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusPenggunaLabel">Hapus Pengguna</h5>
                    <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin untuk menghapus pengguna?
                </div>
                <div class="modal-footer">
                    <form action="/admin/user/hapus/<?= $usr['id_user']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Yakin</button>
                    </form>
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>