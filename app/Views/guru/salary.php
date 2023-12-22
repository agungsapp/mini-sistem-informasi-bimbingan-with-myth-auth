<?= $this->extend('guru/template/main') ?>

<?= $this->section('content') ?>



<!-- Begin Page Content -->
<div class="container" style="margin-top: 40px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-0">
    <h1 class="h4 mb-0 text-gray-800">Salary Status</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12 mb-0">
      <div class="card-body">

        <!-- Table -->
        <div class="card shadow mb-0">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Month</th>
                  <th>No of Session</th>
                  <th>Pay per Session</th>
                  <th>Total</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>May</td>
                  <td>20</td>
                  <td>Rp 70.000</td>
                  <td>Rp 1.400.000</td>
                  <td>NOT PAID</td>
                </tr>
                <tr>
                  <td>April</td>
                  <td>18</td>
                  <td>Rp 70.000</td>
                  <td>Rp 1.260.000</td>
                  <td>PAID</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->

<?= $this->endSection() ?>