<?= $this->include('admin/partial/header') ?>
<?= $this->include('admin/partial/sidebar') ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Customer</h4>
            </div>
            <div class="card-body">
              <?= $countcustomer ?><!-- setting nilai dari jumlah customer -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-car"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Lomba</h4>
            </div>
            <div class="card-body">
              <?= $countevent ?> <!-- setting nilai dari jumlah lomba -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-grip-horizontal"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Transaksi</h4>
            </div>
            <div class="card-body">
              3 <!-- setting nilai dari jumlah transaksi -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-random"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total pendapatan</h4>
            </div>
            <div class="card-body">
              Rp 500.000 <!-- setting nilai dari jumlah Pendapatan -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Statistics</h4>
          </div>
          <div>
            <div class="code-example">
              <h1>Statistik Transaksi Per Order Id</h1>
              <style name="column-example-14">
                #column-example-14 {
                  width: 100%;
                  max-width: 300px;
                  margin: 0 auto;
                }

                #column-example-14 .column {
                  --aspect-ratio: 4 / 3;
                }
              </style>
              <div id="column-example-14 m-0">
                <table class="charts-css column show-labels multiple show-primary-axis show-data-axes">
                  <caption>Statistik Transaksi Per Order Id</caption>
                  <thead>
                    <tr>
                      <th scope="col"> Year </th>
                      <th scope="col"> Progress 1</th>
                      <th scope="col"> Progress 2</th>
                      <th scope="col"> Progress 3</th>
                      <th scope="col"> Progress 4</th>
                      <th scope="col"> Progress 5</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- on Progress -->
                    Statistik (year) Drop down 
                    <?php
                    for ($i = 1; $i <= 12; $i++) :
                    ?>
                      <tr style="margin-right: 10px";>
                        <th scope="row"><?= $i < 10 ? '0' . $i : $i; ?></th>
                        <td style="--size:0.3;"></td>
                        <td style="--size:0.9;"></td>
                        <td style="--size:0.6;"></td>
                      </tr>
                    <?php endfor; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div id="myfirstchart" style="height: 250px;"></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-12 col-sm-12">

    </div>
</div>
</section>
</div>

<?= $this->include('admin/partial/footer') ?>