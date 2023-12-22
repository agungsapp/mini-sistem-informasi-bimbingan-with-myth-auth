<?= $this->extend('guru/template/main') ?>

<?= $this->section('content') ?>
<?php $session = session(); ?>
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

<div class="col-12">
  <div class="content">
    <h3 style="font-weight: bold;">Tambah Soal</h3>
    <p>edit data soal</p>
    <hr>

    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="/guru/tryOut/updateSoal" method="post">
            <?php csrf_token(); ?>

            <input type="hidden" name="id" value="<?= $soal->id; ?>">
            <input type="hidden" name="id_mapel" value="<?= $id_mapel; ?>">

            <div class="row">
              <!-- <div class="col-6">
                <div class="mb-3">
                  <label for="display" class="form-label">Nama kelas</label>
                  <input type="text" id="display" class="form-control" name="display" value="" readonly>
                </div>
              </div> -->

              <div class="col-6">
                <!-- select kunci jawaban -->
                <div class="mb-3">
                  <label for="kunci" class="form-label">Kunci Jawaban</label>
                  <select class="form-select" id="kunci" name="kunci" aria-label="Default select example" required>
                    <option value="" selected>-- Pilih kunci jawaban --</option>
                    <option <?= $soal->kunci == 'a' ? 'selected' : ''; ?> value="a">A</option>
                    <option <?= $soal->kunci == 'b' ? 'selected' : ''; ?> value="b">B</option>
                    <option <?= $soal->kunci == 'c' ? 'selected' : ''; ?> value="c">C</option>
                    <option <?= $soal->kunci == 'd' ? 'selected' : ''; ?> value="d">D</option>
                  </select>
                </div>


              </div>

            </div>
            <div class="mb-3">
              <label for="soal" class="form-label">soal</label>
              <textarea class="form-control" id="soal" name="soal" type="text" required placeholder="ketikan soal try out ..." rows="3"><?= $soal->soal; ?></textarea>
            </div>

            <div class="mb-3">
              <label for="a" class="form-label">Opsi A</label>
              <input class="form-control" id="a" name="a" type="text" value="<?= $soal->a ?>" required placeholder="jawaban opsi a ...">
            </div>
            <div class="mb-3">
              <label for="b" class="form-label">Opsi B</label>
              <input class="form-control" id="b" name="b" type="text" value="<?= $soal->b ?>" required placeholder="jawaban opsi b ...">
            </div>
            <div class="mb-3">
              <label for="c" class="form-label">Opsi C</label>
              <input class="form-control" id="c" name="c" type="text" value="<?= $soal->c ?>" required placeholder="jawaban opsi c ...">
            </div>
            <div class="mb-3">
              <label for="d" class="form-label">Opsi D</label>
              <input class="form-control" id="d" name="d" type="text" value="<?= $soal->d ?>" required placeholder="jawaban opsi d ...">
            </div>

            <div class="row">
              <div class="col-6">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </div>


          </form>
          <!-- end form -->

        </div>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>