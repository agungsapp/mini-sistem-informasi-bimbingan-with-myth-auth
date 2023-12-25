<?= $this->extend('parent/template/main') ?>
<?= $this->section('content') ?>

<div class="col-12">
  <h1>Selamat datang <?= user()->nama; ?> </h1>
  <div class="content">
    <h3 style="font-weight: bold;">lengkapi data</h3>
    <hr>
    <div class="row">
      <div class="col-12">
        <h5>Silahkan masukan nama anak anda</h5>
        <form action="/parent/home/save" method="post">
          <?php csrf_token() ?>
          <div class="input-group mb-3">
            <!-- pencarian anak -->
            <select class="form-select select2" name="siswa" aria-label="Default select example">
              <option selected> -- cari nama -- </option>
              <?php foreach ($data as $d) : ?>
                <option value="<?= $d->id; ?>"><?= $d->nama; ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <button type="submit" class="btn btn-sm btn-primary">Konfirmasi</button>

        </form>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>