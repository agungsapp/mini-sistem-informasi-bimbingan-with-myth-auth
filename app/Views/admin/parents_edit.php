<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Orang Tua</h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-0">
            <div class="card-body rounded-lg" style="background-color: #eaeaea;">
                <form action="/admin/parents/update" method="post">
                    <?php csrf_token(); ?>

                    <!-- id -->
                    <input type="hidden" name="id" value="<?= $parent->id; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $parent->nama; ?>" placeholder="masukan nama Orang Tua" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Orang Tua</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $parent->email; ?>" placeholder="masukan email Orang Tua" readonly required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- End of Main Content -->

<?= $this->include('admin/template/footer'); ?>