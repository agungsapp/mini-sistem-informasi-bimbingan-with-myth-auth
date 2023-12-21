<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/admin.css'); ?> ">

    <!-- Custom Font -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <title>Tanry Education Centre Admin</title>
    <link id="logo" rel="shortcut icon" href="<?= base_url('assets/images/teclogo.jpg'); ?> ">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/admin'); ?>">
                <img class="logoheader" src="<?= base_url('assets/images/teclogo.jpg'); ?> " width="60px">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/admin'); ?>">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Registration Data -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin/registration'); ?>">
                    <span>Registration Data</span></a>
            </li>

            <!-- Nav Item - Student Data -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin/student'); ?>">
                    <span>Student Data</span></a>
            </li>

            <!-- Nav Item - Teacher Data -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin/teacher'); ?>">
                    <span>Teacher Data</span></a>
            </li>

            <!-- Nav Item - Parent Data -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/admin/parents'); ?>">
                    <span>Parent Data</span></a>
            </li>

            <br>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <a href="<?= base_url('/logout'); ?>">LOGOUT</a>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">
                    <div class="col-12">
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
                    </div>
                </div>