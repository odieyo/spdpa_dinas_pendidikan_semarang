<?php echo $this->extend('auth/layout/template'); ?>


<!-- Main content -->
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 text-black">

            <div class="me-3 px-5 pt-5 mt-xl-4">
                <!-- i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"-->
                <img src="dist/img/SemarangLogo.png" alt="Semarang Logo" width="50" height="60">
                <span class="h3 fw-bold mb-0 px-2 my-2 ">SPDPA</span>
                <!-- span class="h3 fw-bold mb-0">SPDPA</span-->
            </div>

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4  pt-xl-0 mt-xl-n5">

                <form style="width: 23rem;">

                    <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="username" id="username" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-1 mb-4">
                        <a class="btn btn-info btn-lg btn-block" href="<?= base_url('/admin'); ?>" type="button">Login</a>
                    </div>
                </form>

            </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="dist/img/GdDinas.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
    </div>
</div>
<?= $this->endsection() ?>