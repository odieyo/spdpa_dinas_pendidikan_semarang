<?php echo $this->extend('auth/layout/template'); ?>


<!-- Main content -->
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 text-black">

            <div class="me-3 px-5 pt-5 mt-xl-4">
                <!-- i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"-->
                <img src="dist/img/SemarangLogo.png" alt="Semarang Logo" width="50" height="60">
                <span class="h3 fw-bold mb-0 px-2 my-2 ">Sistem Pengelolaan Data Pegawai ASN</span>
                <!-- span class="h3 fw-bold mb-0">SPDPA</span-->
            </div>

            <div class="d-flex align-items-center px-5" style="margin-top:200px;">


                <div class="form" style="width: 23rem;">
                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button data-dismiss="alert" class="close">x</button>
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?= site_url('/auth/loginProcess'); ?>" class="needs-validation">
                        <?= csrf_field(); ?>

                        <div class="form-group form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="username" id="username" name="username" class="form-control form-control-lg" required autofocus>
                            <div class="invalid-feedback">
                                Mohon isi Username
                            </div>
                        </div>

                        <div class="form-group form-outline">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                            <div class="invalid-feedback">
                                Mohon isi password
                            </div>
                        </div>

                        <!-- <div class="form-group form-outline">
                            <a class="p float-right text-block" href="#">Reset Password</a>
                        </div> -->

                        <div class="form-group" style="margin-top:50px;">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="dist/img/GdDinas.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    </div>
</div>
<?= $this->endsection() ?>