<?= $this->extend('parent/template/main') ?>
<?= $this->section('content') ?>

<div class="col-12">
  <h1>Selamat datang bapak/ibu <?= user()->nama; ?> </h1>
  <div class="content">
    <h3 style="font-weight: bold;">Jadwal Kelas Anak Anda</h3>
    <hr>

    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Kelas</th>
            <th>Hari</th>
            <th>Jam</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($data)) : ?>
            <?php foreach ($data as $m) : ?>
              <td><?= $m->judul; ?></td>
              <td><?= $m->hari; ?></td>
              <td><?= $m->jam; ?></td>
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


<?= $this->endSection() ?>