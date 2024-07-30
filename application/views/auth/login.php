<!DOCTYPE html>
<html lang="en">

<!-- CONTENT -->
<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <div class="card-body pt-2">
                    <div class="card card-plain"><div class="card-header pb-0 text-start text-center">
                        <?php echo $this->session->flashdata('msg');?>
                    </div>
                    <div class="card card-plain"><div class="card-header pb-0 text-start">
                        <h4 class="font-weight-bolder">Login</h4>
                        <p class="mb-0">Harap masukan username dan kata sandi anda</p>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?php echo base_url('auth') ?>" method="POST">
                            <div class="mb-3">
                                <input name="username" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" autofocus required>
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Ingat saya</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                            </div>
                        </form>
                    </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                        <img src="<?php echo base_url('assets/img/shapes/pattern-lines.svg'); ?>" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                        <div class="position-relative">
                            <img class="max-width-300 w-100 position-relative z-index-2" src="<?php echo base_url('assets/img/logo.svg'); ?>" alt="chat-img">
                        </div>
                        <h4 class="mt-5 text-white font-weight-bolder">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</h4>
                        <p class="text-white">PROVINSI SULAWESI TENGAH</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>