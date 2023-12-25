<?= $this->extend('parent/template/main') ?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container" style="margin-top: 40px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-0">
    <h1 class="h4 mb-0 text-gray-800">Student's Learning Progress</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-0">
      <div class="card-body">

        <!-- Table -->
        <?php if (empty($data)) : ?>
          <div class="card shadow mb-0">
            <h4 class="text-center">-- belum ada data --</h4>
          </div>
        <?php else : ?>
          <div class="card shadow mb-0">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Score</th>
                    <th>Komentar</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $i = 1;
                  foreach ($data as $d) :
                  ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $d->siswa; ?></td>
                      <td><?= $d->score; ?></td>
                      <td><?= $d->komentar; ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>