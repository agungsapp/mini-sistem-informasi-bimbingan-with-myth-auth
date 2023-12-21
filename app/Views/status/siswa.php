<?= $this->include('status/template/header'); ?>

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
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/home/siswa'); ?>">HOME</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= base_url('/status/siswa'); ?>">PAYMENT STATUS</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/progress/siswa'); ?>">LEARNING PROGRESS</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/tryout/siswa'); ?>">TRY OUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>

<!-- Begin Page Content -->
<div class="container" style="margin-top: 40px;">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h4 mb-0 text-gray-800">Payment Status</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-0">
            <div class="card-body">

                <!-- Table -->
                <div class="card shadow mb-0">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>No of Session</th>
                                    <th>Pay per Session</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>May</td>
                                    <td>20</td>
                                    <td>Rp 50.000</td>
                                    <td>Rp 1.000.000</td>
                                    <td>NOT PAID</td>
                                </tr>
                                <tr>
                                    <td>April</td>
                                    <td>18</td>
                                    <td>Rp 50.000</td>
                                    <td>Rp 900.000</td>
                                    <td>PAID</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->


<?= $this->include('status/template/footer'); ?>