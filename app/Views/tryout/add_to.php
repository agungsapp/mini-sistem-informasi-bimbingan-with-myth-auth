<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css'); ?>  ">
    <!-- Custom Font -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <title>Tanry Education Centre</title>
    <link id="logo" rel="shortcut icon" href="<?= base_url('/assets/images/teclogo.jpg'); ?>">

</head>

<body>

    <!-- HEADER + NAVBAR -->
    <div class="header">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="<?= base_url('/home/siswa'); ?> ">
                        <img class="logoheader" style="margin-top: auto;" src="<?= base_url('/assets/images/logotec.jpg'); ?> ">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/home/guru'); ?>">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/status/guru'); ?>">SALARY STATUS</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/progress/guru'); ?>">LEARNING PROGRESS</a></li>
                            <li class="nav-item"><a class="nav-link active" href="<?= base_url('/tryout/guru'); ?>">TRY OUT</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <div id="wrapper" style="margin-top: 50px;">
        <div class="container">

        </div>
    </div>


    <!-- Footer-->
    <footer class="footer fixed-bottom">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - paramithag.</div>
        </div>
    </footer>
    <!-- <script src="js/script.js"></script> -->
</body>