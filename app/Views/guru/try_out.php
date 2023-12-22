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
    <h3 style="font-weight: bold;">daftar kelas</h3>
    <hr>

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
                <a href="/guru/tryOut/show/<?= $m->id_mapel; ?>" class="btn btn-sm btn-primary">Tambah Try Out</a>
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
<!-- <div class="col-md-3">
  <div class="sidebar1">
    <h5 style="font-weight: bold;">Absensi Guru</h5>
    <hr>
  </div>
</div> -->
<?= $this->endSection() ?>