<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Guru</h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-0">
            <div class="card-body rounded-lg" style="background-color: #eaeaea;">
                <form action="/admin/teacher/update" method="post">
                    <?php csrf_token(); ?>

                    <!-- id -->
                    <input type="hidden" name="id" value="<?= $guru->id; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Guru</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama guru" value="<?= $guru->nama; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Guru</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="masukan email guru" value="<?= $guru->email; ?>" required readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Data Guru
                    </button>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- End of Main Content -->


<?= $this->include('admin/template/footer'); ?>