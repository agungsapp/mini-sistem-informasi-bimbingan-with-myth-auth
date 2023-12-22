<?= $this->extend('guru/template/main') ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container" style="margin-top: 40px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-0">
    <h1 class="h4 mb-0 text-gray-800">Tambah Data Learning Progress</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-0">
      <div class="card-body">

        <!-- Table -->
        <div class="card shadow mb-0">
          <div class="card-body">
            <form action="/guru/learning/store" method="post">
              <?php csrf_token() ?>
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <label for="siswa" class="form-label">Siswa</label>
                    <select class="form-select" id="siswa" name="siswa" required>
                      <option selected>-- pilih siswa --</option>
                      <?php foreach ($siswa as $s) : ?>
                        <option value="<?= $s->id; ?>"><?= $s->nama; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label for="kelas" class="form-label">Nama Kelas</label>
                    <select class="form-select" id="kelas" name="kelas" required>
                      <option selected>-- pilih kelas --</option>
                      <?php foreach ($mapel as $m) : ?>
                        <option value="<?= $m->id_mapel; ?>"><?= $m->judul; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">

                <div class="col-9">
                  <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <textarea class="form-control" id="komentar" name="komentar" rows="3" aria-label="Beri komentar" placeholder="berikan komentar penilaian ..." required></textarea>
                  </div>
                </div>
                <div class="col-3">
                  <div class="mb-3">
                    <label for="score" class="form-label">Score</label>
                    <input class="form-control" id="score" name="score" type="number" placeholder="masukan score" required>
                  </div>
                </div>  
              </div>

              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>