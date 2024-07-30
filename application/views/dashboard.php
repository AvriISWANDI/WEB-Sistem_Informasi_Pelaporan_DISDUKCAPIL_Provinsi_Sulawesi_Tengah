<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 DISDUKCAPIL SULTENG (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by DISDUKCAPIL SULTENG

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<!-- Content -->
<div class="container-fluid py-4">
  <div class="card-header pb-0 text-start text-center">
    <?php echo $this->session->flashdata('msg'); ?>
  </div>
  <div class="row mt-4">
    <div class="col-12">
      <div class="card bg-gradient-primary">
        <img src="<?php echo base_url('assets/img/shapes/waves-white.svg') ?>" alt="pattern-lines" class="position-absolute opacity-4 start-0 top-0 w-100">
        <div class="card-body px-5 z-index-1 bg-cover">
          <div class="row justify-content-center">
            <div class="col-md-1 my-auto">
              <img src="<?php echo base_url('assets/img/kabkota/sulteng.png'); ?> " class="img-fluid w-100" alt="pattern-lines">
            </div>
            <div class="col-lg-5 col-12 my-auto">
              <h4 class="text-white opacity-9">Dinas Kependudukan dan Pencatatan Sipil</h4>
              <h4 class="text-white opacity-9">Provinsi Sulawesi Tengah</h4>
              <hr class="horizontal light mt-1 mb-3">
              <div class="d-flex">
                <div>
                  <h6 class="mb-0 text-white">Jl. Pramuka, Besusu Bar</h6>
                  <h6 class="mb-0 text-white">Kec. Palu Tim., Kota Palu, Sulawesi Tengah 94111</h6>
                </div>
                <div class="ms-lg-6 ms-4">
                  <a href="https://goo.gl/maps/9EShQZCkRDAEQ9Gs8" class="btn btn-icon-only btn-rounded btn-outline-white mb-0">
                    <i class="ni ni-map-big" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Daftar User</p>
                <?php if ($getUser > 0) : ?>
                <h5 class="font-weight-bolder mb-0">
                  <?= $getUser ?>
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Laporan Simpan Rindu</p>
                <?php if ($getSimpanrindu > 0) : ?>
                  <h5 class="font-weight-bolder mb-0">
                    <?= $getSimpanrindu ?>
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Data Inovasi</p>
                <?php if ($getInovasi > 0) : ?>
                  <h5 class="font-weight-bolder mb-0">
                    <?= $getInovasi ?>
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Perjanjian Kerjasama</p>
                <?php if ($getPks > 0) : ?>
                  <h5 class="font-weight-bolder mb-0">
                    <?= $getPks ?>
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Laporan Device KTP-eL</p>
                <?php if ($getDevicektpel > 0) : ?>
                <h5 class="font-weight-bolder mb-0">
                  <?= $getDevicektpel ?>
                  <span class="text-success text-sm font-weight-bolder"></span>
                </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Laporan Device Pelayanan SIAK</p>
                <?php if ($getDevicepel > 0) : ?>
                  <h5 class="font-weight-bolder mb-0">
                    <?= $getDevicepel ?>
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Layanan Online & Terintegritas</p>
                <?php if ($getLayanan > 0) : ?>
                  <h5 class="font-weight-bolder mb-0">
                    <?= $getLayanan ?>
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                <?php else : ?>
                  <p class="font-weight-bolder mb-0">Tidak ada data</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-dark shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="row">
  <div class="col-12">
    <div id="globe" class="position-absolute end-0 top-10 mt-sm-3 mt-7 me-lg-7">
      <canvas width="700" height="600" class="w-lg-100 h-lg-100 w-75 h-75 me-lg-0 me-n10 mt-lg-5"></canvas>
    </div>
  </div>
</div>


<script src="<?php echo base_url('assets/js/plugins/chartjs.min.js'); ?>"></script>
<script>
  var ctx = document.getElementById("chart-bars").getContext("2d");

  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Sales",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "#fff",
        data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 15,
            font: {
              size: 14,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            display: false
          },
        },
      },
    },
  });


  var ctx2 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#cb0c9f",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        },
        {
          label: "Websites",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          fill: true,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>