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
    <p>tambah soal tryout untuk kelas <?= $mapel->judul; ?></p>
    <hr>

    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <form action="/guru/tryOut/store" method="post">
            <?php csrf_token(); ?>

            <input type="hidden" name="id_mapel" value="<?= $mapel->id_mapel; ?>">

            <div class="row">
              <div class="col-6">
                <div class="mb-3">
                  <label for="display" class="form-label">Nama kelas</label>
                  <input type="text" id="display" class="form-control" name="display" value="<?= $mapel->judul; ?>" readonly>
                </div>
              </div>

              <div class="col-6">
                <!-- select kunci jawaban -->
                <div class="mb-3">
                  <label for="kunci" class="form-label">Kunci Jawaban</label>
                  <select class="form-select" id="kunci" name="kunci" aria-label="Default select example" required>
                    <option selected>-- pilih kunci jawaban --</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="mb-3">
              <label for="soal" class="form-label">soal</label>
              <textarea class="form-control" id="soal" name="soal" type="text" required placeholder="ketikan soal try out ..." rows="3"><?= old('soal'); ?></textarea>
            </div>

            <div class="mb-3">
              <label for="a" class="form-label">Opsi A</label>
              <input class="form-control" id="a" name="a" type="text" required placeholder="jawaban opsi a ...">
            </div>
            <div class="mb-3">
              <label for="b" class="form-label">Opsi B</label>
              <input class="form-control" id="b" name="b" type="text" required placeholder="jawaban opsi b ...">
            </div>
            <div class="mb-3">
              <label for="c" class="form-label">Opsi C</label>
              <input class="form-control" id="c" name="c" type="text" required placeholder="jawaban opsi c ...">
            </div>
            <div class="mb-3">
              <label for="d" class="form-label">Opsi D</label>
              <input class="form-control" id="d" name="d" type="text" required placeholder="jawaban opsi d ...">
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

<div class="col-12 my-4">
  <div class="content">
    <h3 style="font-weight: bold;">Bank Soal</h3>
    <hr>

    <?php if (empty($soals)) : ?>
      <div class="row">
        <div class="col-12">
          <div class="card text-center">
            <h4>Belum ada data</h4>
          </div>
        </div>
      </div>
    <?php else : ?>
      <!-- for loop -->
      <?php
      $i = 1;
      foreach ($soals as $soal) : ?>
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-between">
              <h4>Soal <?= $i++; ?></h4>
              <div>
                <h4>Kunci Jawban : <?= strtoupper($soal->kunci); ?></h4>

              </div>
            </div>
            <div class="card">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 100px;" scope="col">Pertanyaan</th>
                    <th scope="col"><?= $soal->soal; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Opsi A</th>
                    <td><?= $soal->a; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Opsi B</th>
                    <td><?= $soal->b; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Opsi C</th>
                    <td><?= $soal->c; ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Opsi D</th>
                    <td><?= $soal->d; ?></td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex justify-content-center gap-2 py-2">
                <a href="/guru/tryOut/editSoal/<?= $soal->id . "/" . $mapel->id_mapel; ?>" class="btn btn-sm btn-warning btn-block">Edit Soal</a>
                <a href="/guru/tryOut/deleteSoal/<?= $soal->id; ?>" class="btn btn-sm btn-danger">Delete Soal</a>
              </div>
            </div>
            <hr>
          </div>
        </div>
      <?php endforeach ?>
      <!-- end loop -->
    <?php endif ?>

  </div>

</div>
<!-- <div class="col-md-3">
  <div class="sidebar1">
    <h5 style="font-weight: bold;">Absensi Guru</h5>
    <hr>
  </div>
</div> -->
<?= $this->endSection() ?>