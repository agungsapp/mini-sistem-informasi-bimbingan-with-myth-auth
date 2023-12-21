<?= $this->include('home/template/header'); ?>

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
                        <li class="nav-item"><a class="nav-link active" href="<?= base_url('/home/siswa'); ?>">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/status/siswa'); ?>">PAYMENT STATUS</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/progress/siswa'); ?>">LEARNING PROGRESS</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/tryout/siswa'); ?>">TRY OUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>

<!-- CONTENT -->
<div id="wrapper" style="margin-top: 30px;">
    <div class="container px-4 px-lg-5">
        <div class="col-md-9">
            <div class="content">
                <h3 style="font-weight: bold;">Jadwal Kelas</h3>
                <hr>

            </div>
        </div>
        <div class="col-md-3">
            <div class="sidebar1">
                <h5 style="font-weight: bold;">Kehadiran Siswa</h5>
                <hr>
            </div>
            <div class="sidebar2">
                <h5 style="font-weight: bold;">Progress Siswa</h5>
                <hr>
            </div>
        </div>
    </div>
</div>

<?= $this->include('home/template/footer'); ?>