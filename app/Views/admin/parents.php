<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Orang Tua</h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-0">
            <div class="card-body rounded-lg" style="background-color: #eaeaea;">
                <form action="/admin/parents/registerOrangtua" method="post">
                    <?php csrf_token(); ?>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama Orang Tua" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username orang tua</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="masukan username siswa" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Orang Tua</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="masukan email Orang Tua" required>
                    </div>

                    <input type="hidden" name="password" value="berhasil123">
                    <input type="hidden" name="pass_confirm" value="berhasil123">

                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>








    <!-- Page Heading -->
    <div class="d-sm-flex mt-4 align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Data Orang Tua</h1>
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Last Login</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if (!empty($parent)) : ?>
                                    <?php foreach ($parent as $p) : ?>
                                        <tr>
                                            <td><?= $p->nama; ?></td>
                                            <td><?= $p->email; ?></td>
                                            <td>00000000000000000</td>
                                            <td>
                                                <a href="/admin/parents/edit/<?= $p->id; ?>" class="btn btn-warning">Edit</a>
                                                <a href="/admin/parents/delete/<?= $p->id; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="4" class="text-center">-- Belum ada data --</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?= $this->include('admin/template/footer'); ?>