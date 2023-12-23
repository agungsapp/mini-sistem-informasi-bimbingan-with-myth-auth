<?= $this->extend('siswa/template/main') ?>
<?= $this->section('content') ?>

<div class="col-12">
  <div class="content">
    <h3 style="font-weight: bold;">Try Out</h3>
    <hr>

    <div class="col-12">


      <?php if (empty($soal)) : ?>
        <div class="card">
          <div class="card-body">
            <h5>-- maaf belum ada soal --</h5>
          </div>
        </div>
      <?php else : ?>
        <?php
        $i = 1;
        foreach ($soal as $s) : ?>
          <div class="card">
            <div class="card-header bg-primary text-white fw-bold py-1">
              <h5>Soal <?= $i++; ?></h5>
            </div>
            <div class="card-body">
              <h6><?= $s->soal; ?></h6>
              <ul>
                <li><?= $s->a; ?></li>
                <li><?= $s->b; ?></li>
                <li><?= $s->c; ?></li>
                <li><?= $s->d; ?></li>
              </ul>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>




    </div>

  </div>
</div>


<?= $this->endSection() ?>