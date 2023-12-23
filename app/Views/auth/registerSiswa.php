<?= $this->include('auth/template/header'); ?>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <!-- ... your existing nav content ... -->
</nav>

<!-- Masthead-->
<header class="masthead">
    <!-- ... your existing header content ... -->
</header>

<!-- Register -->
<section class="page-section" id="daftar">
    <div class="container px-4 px-lg-5">
        <!-- ... -->
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">

                <h1 class="text-center mb-3">Register Siswa</h1>

                <!-- Show Error Messages if Any -->
                <?php if (session()->has('errors')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php foreach (session('errors') as $error) : ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>


                <?= view('Myth\Auth\Views\_message_block') ?>

                <form method="POST" id="regisForm" action="<?= url_to('registerSiswa') ?>">
                    <?= csrf_field() ?>
                    <!-- Nama Siswa input -->
                    <div class="form-floating mb-3">
                        <input class="form-control <?php if (session('errors.nama')) : ?>is-invalid<?php endif ?>" id="namasiswa" name="nama" type="text" value="<?= old('nama') ?>" required />
                        <label for="namasiswa">Nama</label>
                    </div>
                    <!-- Username Siswa input -->
                    <div class="form-floating mb-3">
                        <input class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" type="text" value="<?= old('username') ?>" required />
                        <label for="username">Username</label>
                    </div>
                    <!-- Email Orang Tua input -->
                    <div class="form-floating mb-3">
                        <input class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" name="email" type="email" value="<?= old('email') ?>" required />
                        <label for="email">Email Siswa/Orang Tua</label>
                    </div>
                    <!-- Password input -->
                    <div class="form-floating mb-3">
                        <input class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" type="password" required />
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                    </div>
                    <!-- Register Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-xl" id="regisButton">Register</button>
                    </div>
                </form>
                <p class="mt-3">Anda orang tua siswa ? <a href="/registerOrtu">Daftar</a></p>
                <p class="mt-3">Anda sudah punya akun ? <a href="/login">login</a></p>
            </div>
        </div>
    </div>
</section>

<?= $this->include('auth/template/footer'); ?>