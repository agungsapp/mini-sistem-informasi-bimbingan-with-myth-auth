<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/styleauth.css'); ?>  ">

    <!-- Custom Font -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <title>Tanry Education Centre</title>
    <link id="logo" rel="shortcut icon" href="<?= base_url('/assets/images/teclogo.jpg'); ?>">

</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('#page-top'); ?> ">
                <img class="logoheader" src="<?= base_url('/assets/images/logotec.jpg'); ?> ">
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/register'); ?> ">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/login'); ?> ">Login</a></li>
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

    <!-- Daftar -->
    <section class="page-section" id="daftar">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 style="font-weight: bold;" class="mt-0">Daftar</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Daftarkan anak anda ke Tanry Education Centre sekarang!</p>
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
                    <form id="registerForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Student Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" data-sb-validations="required" />
                            <label for="studentname">Nama Calon Siswa</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Class input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="class" type="text" data-sb-validations="required" />
                            <label for="class">Kelas Calon Siswa</label>
                            <div class="invalid-feedback" data-sb-feedback="class:required">A class is required.</div>
                        </div>

                        <hr>

                        <!-- Parent Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" data-sb-validations="required" />
                            <label for="parentname">Nama Orang Tua</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" data-sb-validations="required,email" />
                            <label for="parentemail">Alamat Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" minlength="9" maxlength="14" data-sb-validations="required" />
                            <label for="parentphone">Nomor Telepon / WA</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>

                        <!-- Submit success message-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder"><br>Formulir pendaftaran berhasil dikirim!</div>
                                Terima kasih, kami akan segera menghubungi anda untuk melakukan wawancara.
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Formulir pendaftaran gagal dikirimkan!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Announcement -->
    <section class="page-section bg-dark text-white" style="text-align: center;">
        <h3 style="font-weight: bold;">Pengumuman</h3>
        <br>
        <img class="img-pengumuman" src="<?= base_url('assets/images/pengumuman.png'); ?> " width="400px">
    </section>

    <!-- Location -->
    <section class="page-section" style="background-color: #2F3290;" id="location">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center" style="margin-top: -10px; margin-bottom: -30px;">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0" style="font-weight: bold;">Location</h2>
                    <hr class="divider divider-light" />

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7055108012523!2d106.62704941430974!3d-6.170172662183016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8cd2b34318d%3A0x4710b1f4026daf5c!2sBakmie%20Enso!5e0!3m2!1sen!2sid!4v1675432151284!5m2!1sen!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h6 class="text-white-75 mb-4"><br>Benteng Makasar 1 No. 10 (BAKMI ENSO)</h6>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-light" style="padding-top: 10px; padding-bottom: 10px; margin-top: -30px;">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - paramithag.</div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
<!-- <script src="js/script.js"></script> -->

</html>