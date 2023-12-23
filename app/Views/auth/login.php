<?= $this->include('auth/template/header'); ?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= base_url('/'); ?> ">
            <img class="logoheader" src="<?= base_url('/assets/images/logotec.jpg'); ?> ">
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/registerSiswa'); ?> ">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-center">
                <h1 class="text-white font-weight-bold">Selamat datang di</h1>
                <h1 class="text-white font-weight-bold">Tanry Education Centre!</h1>
            </div>
        </div>
    </div>
</header>

<!-- Login -->
<section class="page-section" id="daftar">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 style="font-weight: bold;" class="mt-0">Login </h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <?= view('Myth\Auth\Views\_message_block') ?>

                <form method="post" id="loginForm" action="<?= url_to('login') ?>">
                    <?php csrf_token() ?>
                    <!-- Email-->
                    <div class="form-floating mb-3">
                        <input class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="email" name="login" type="text" data-sb-validations="required" />
                        <label for="email"> Email</label>
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" type="password" />
                        <label for="password">Password</label>
                        <div class="invalid-feedback"><?= session('errors.password') ?></div>
                    </div>

                    <!-- Login Button-->
                    <div class="d-grid">
                        <!-- <a href="<?= base_url('/home/siswa'); ?>" class="btn btn-primary btn-xl" id="loginButton" type="submit"> -->
                        <button type="submit" class="btn btn-primary btn-xl" id="loginButton">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->include('auth/template/footer'); ?>