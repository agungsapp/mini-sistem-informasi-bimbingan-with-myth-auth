<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Jumlah Siswa -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Number of students</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <img class="logoheader" src="<?= base_url('/assets/images/users.png'); ?> " width="45px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jumlah Guru -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Number of teachers</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <img class="logoheader" src="<?= base_url('/assets/images/group.png'); ?> " width="45px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-9 mb-4">

            <!-- Login History -->
            <div class="card shadow mb-0">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Login History</h6>
                </div>
                <div class="card-body">

                    <!-- Table -->
                    <div class="card shadow mb-0">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>Teacher</td>
                                        <td>1 minute ago</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Student</td>
                                        <td>10 minutes ago</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Parent</td>
                                        <td>1 hour ago</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Student</td>
                                        <td>1 day ago</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Teacher</td>
                                        <td>3 days ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Column -->
        <div class="col-lg-3 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Student Grade Levels</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Kindergarten <span class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Elementary <span class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Junior High <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Senior High <span class="float-right">80%</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
</div>

<?= $this->include('admin/template/footer'); ?>