<?= $this->extend('guru/template/main') ?>

<?= $this->section('content') ?>
<?php $session = session(); ?>
<div class="col-12">

  <h1>Selamat datang </h1>
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

<div class="col-md-9">
  <div class="content">
    <h3 style="font-weight: bold;">Jadwal Kelas</h3>
    <hr>

    <!-- Button trigger modal add kelas -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Buat jadwal kelas baru
    </button>

    <!-- Modal add kelas -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal Kelas Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/guru/home/simpanKelas" method="post">
            <?php csrf_token() ?>
            <div class="modal-body">

              <div class="mb-3">
                <input class="form-control" id="judul" name="judul" type="text" placeholder="masukan nama kelas ...">
              </div>

              <div class="mb-3">
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="masukan deskripsi kelas..."></textarea>
              </div>

              <div class="mb-3">
                <select name="hari" class=" form-select form-control">
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


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan kelas</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Kelas</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($mapel)) : ?>
            <?php foreach ($mapel as $m) : ?>
              <td><?= $m->judul; ?></td>
              <td><?= $m->hari; ?></td>
              <td><?= $m->jam; ?></td>
              <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
              </tr>
            <?php endforeach ?>
          <?php else : ?>
            <tr>
              <td colspan="4" class="text-center">-- belum ada data --</td>
            </tr>
          <?php endif ?>
        </tbody>
      </table>
    </div>

  </div>
</div>
<div class="col-md-3">
  <div class="sidebar1">
    <h5 style="font-weight: bold;">Absensi Guru</h5>
    <hr>
  </div>
</div>
<?= $this->endSection() ?>