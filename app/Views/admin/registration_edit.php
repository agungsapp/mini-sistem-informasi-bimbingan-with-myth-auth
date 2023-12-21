<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Edit Kelas <?= $mapel->judul; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row mt-4">
        <div class="col-lg-12 mb-0">
            <div class="card-body rounded-lg" style="background-color: #eaeaea;">
                <form action="/admin/registration/update" method="post">
                    <?php csrf_token() ?>
                    <input type="hidden" name="id" value="<?= $mapel->id_mapel; ?>">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $mapel->judul; ?>" placeholder="judul kelas" required>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="masukan deskripsi kelas"><?= $mapel->deskripsi; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-control" name="hari" required>
                            <option selected disabled>-- pilih hari --</option>
                            <option value="senin" <?= $mapel->hari == 'senin' ? 'selected' : ''; ?>>senin</option>
                            <option value="selasa" <?= $mapel->hari == 'selasa' ? 'selected' : ''; ?>>selasa</option>
                            <option value="rabu" <?= $mapel->hari == 'rabu' ? 'selected' : ''; ?>>rabu</option>
                            <option value="kamis" <?= $mapel->hari == 'kamis' ? 'selected' : ''; ?>>kamis</option>
                            <option value="jumat" <?= $mapel->hari == 'jumat' ? 'selected' : ''; ?>>jum'at</option>
                            <option value="sabtu" <?= $mapel->hari == 'sabtu' ? 'selected' : ''; ?>>sabtu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select form-control" name="jam" required>
                            <option selected disabled>-- pilih jam --</option>
                            <option value="07:00-09:30" <?= $mapel->jam == '07:00-09:30' ? 'selected' : ''; ?>>07:00 - 09:30</option>
                            <option value="09:40-12:00" <?= $mapel->jam == '09:40-12:00' ? 'selected' : ''; ?>>09:40 - 12:00</option>
                            <option value="13:00-14:30" <?= $mapel->jam == '13:00-14:30' ? 'selected' : ''; ?>>13:00 - 14:30</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-select form-control" name="guru" required>
                            <option selected disabled>-- pilih guru --</option>
                            <?php foreach ($guru as $g) : ?>
                                <option value="<?= $g->id; ?>" <?= $mapel->id_user == $g->id ? 'selected' : ''; ?>><?= $g->nama; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Kelas</button>
                </form>
            </div>
        </div>
    </div>



</div>
<!-- End of Main Content -->


<?= $this->include('admin/template/footer'); ?>