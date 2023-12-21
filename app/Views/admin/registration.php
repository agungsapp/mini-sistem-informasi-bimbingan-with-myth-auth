<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Registrasi Kelas Baru</h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-0">
            <div class="card-body rounded-lg" style="background-color: #eaeaea;">
                <form action="/admin/registration/simpanKelas" method="post">
                    <?php csrf_token() ?>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul kelas" required>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="masukan deskripsi kelas"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-control" name="hari" required>
                            <option selected>-- pilih hari --</option>
                            <option value="senin">senin</option>
                            <option value="selasa">selasa</option>
                            <option value="rabu">rabu</option>
                            <option value="kamis">kamis</option>
                            <option value="jumat">jum'at</option>
                            <option value="sabtu">sabtu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-control" name="jam" required>
                            <option selected>-- pilih jam --</option>
                            <option value="07:00-09:30">07:00 - 09:30</option>
                            <option value="09:40-12:00">09:40 - 12:00</option>
                            <option value="13:00-14:30">13:00 - 14:30</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-control" name="guru" required>
                            <option selected>-- pilih guru --</option>
                            <?php foreach ($guru as $g) : ?>
                                <option value="<?= $g->id; ?>"><?= $g->nama; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Kelas</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Page Heading -->
    <div class="d-sm-flex mt-4 align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Registration Data</h1>
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
                                    <th>Nama Kelas</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Guru</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if (!empty($mapel)) : ?>
                                    <?php foreach ($mapel as $m) : ?>
                                        <tr>
                                            <td><?= $m->judul; ?></td>
                                            <td><?= $m->hari; ?></td>
                                            <td><?= $m->jam;  ?></td>
                                            <td><?= $m->guru;  ?></td>
                                            <td>
                                                <a href="/admin/registration/edit/<?= $m->id_mapel; ?>" class="btn btn-warning">Edit</a>
                                                <a href="/admin/registration/delete/<?= $m->id_mapel; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="5" class="text-center">-- Belum ada data --</td>
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