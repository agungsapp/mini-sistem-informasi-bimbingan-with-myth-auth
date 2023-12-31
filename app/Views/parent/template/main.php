<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/style.css'); ?>  ">

  <!-- Custom Font -->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

  <title>Tanry Education Centre | orang tua</title>
  <link id="logo" rel="shortcut icon" href="<?= base_url('/assets/images/teclogo.jpg'); ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/css/select.css'); ?>">

</head>

<body>

  <!-- HEADER + NAVBAR -->
  <div class="header">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="<?= base_url('/parent/home'); ?>">
            <img class="logoheader" style="margin-top: auto;" src="<?= base_url('/assets/images/logotec.jpg'); ?> ">
          </a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
              <li class="nav-item"><a class="nav-link <?= $nav == 1 ? 'active' : ''; ?> " href="<?= base_url('/parent/home'); ?>">HOME</a></li>
              <li class="nav-item"><a class="nav-link <?= $nav == 3 ? 'active' : ''; ?> " href="<?= base_url('/parent/learning'); ?>">LEARNING PROGRESS</a></li>
              <li class="nav-item"><a class="nav-link " href=" <?= base_url('/logout'); ?>">LOGOUT</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </div>

  <!-- CONTENT -->
  <div id="wrapper" style="margin-top: 30px;">
    <div class="container px-4 px-lg-5">
      <!-- render section -->
      <?= $this->renderSection('content') ?>

    </div>
  </div>

  <!-- Footer -->
  <footer class="footer fixed-bottom">
    <div class="container px-4 px-lg-5">
      <div class="small text-center text-muted">Copyright &copy; 2023 - paramithag.</div>
    </div>
  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="<?= base_url('/assets/js/jquery.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/select.js'); ?>"></script>

  <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
      $('.select2').select2({
        placeholder: 'Select an option',
        allowClear: true
      });
    });
  </script>
</body>
<!-- <script src="js/script.js"></script> -->

</html>