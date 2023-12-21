<?= $this->extend('guru/template/main') ?>

<?= $this->section('content') ?>
<?php $session = session(); ?>
<div class="col-12">

  <h1>Selamat datang <?= user()->nama; ?> </h1>
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

<div class="col-12 py-4">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="/guru/home/update" method="post">

              <?php csrf_token() ?>

              <div class="modal-body">

                <input type="hidden" name="id" value="<?= $mapel->id_mapel; ?>">

                <div class="mb-3">
                  <input class="form-control" id="judul" name="judul" type="text" placeholder="masukan nama kelas ..." value="<?= $mapel->judul; ?>" required>
                </div>

                <div class="mb-3">
                  <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="masukan deskripsi kelas..." required><?= $mapel->deskripsi; ?></textarea>
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

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update kelas</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<?= $this->endSection() ?>