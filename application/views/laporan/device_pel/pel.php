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
  <div class="row mt-4">
    <div class="col-12">
      <div class="card">

        <div class="card-header">
          <div class="d-lg-flex">
            <div>
              <h3 class="mb-0">Device Pelayanan SIAK</h3>
              <p class="text-sm mb-0">
                Laporan.
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
              <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                <a href="<?php echo base_url('pel_add') ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('pel_filter') ?>" method="post">
                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="start_date" class="form-control-label">Tanggal Awal</label>
                      <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo set_value('start_date'); ?>" />
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="end_date" class="form-control-label">Tanggal Akhir</label>
                      <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo set_value('end_date'); ?>"/>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="kabkota" class="form-control-label">Kabupaten/Kota</label>
                      <input type="text" class="form-control" id="kabkota" name="kabkota" value="<?php echo set_value('kabkota'); ?>"/>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn bg-gradient-primary btn-sm mb-0">Filter</button>
              </form>
            <?php } ?>
            </div>
          <div class="table-responsive">
            <table class="table table-flush" id="devPel-Tables">
              <thead class="thead-light">
                <tr>
                  <th class="text-secondary opacity-7"  hidden></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"  style="position: sticky; left: 0; z-index: 1; background-color: #fff;">Waktu Laporan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"  style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">KABUPATEN/KOTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PC DESKTOP & MONITOR</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PC ALL IN ONE</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >LAPTOP</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >SERVER SIAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PRINTER KK/AKTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PRINTER KIA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PRINTER KTP-EL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PERANGKAT MOBILE KTP-EL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >PERANGKAT MOBILE SIAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >Stabilizer Server</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >UPS SERVER</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >UPS PC</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >KONDISI JARINGAN VPN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >KONDISI JARINGAN M2M</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >JUMLAH OPERATOR SIAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >JUMLAH OPERATOR KTP-EL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" >KETERANGAN</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($row->result() as $key => $data) { ?>
                  <tr>
                    <td style="position: sticky; left: 0; z-index: 1; background-color: #fff;">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?= $data->waktu_pelaporan ?></p>
                    </td>
                    <td style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">
                      <div class="d-flex px-2 py-1 justify-content-centers">
                        <div>
                          <img src="<?php echo base_url('assets/img/kabkota/' . $data->logo); ?>" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs"><?= $data->kabkota ?></h6>
                          <p class="text-xs text-secondary mb-0"><?= $data->kode ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0 text-center"><?= $data->pcmonitor ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->pcallinone ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->laptop ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->server_siak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->printer_kkakta ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->printer_kia ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->printer_ktpel ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->perangkatmobile_ktpel ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->perangkatmobile_siak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->stabilizer_server ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_server ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_pc ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kondisijaringan_vpn ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kondisijaringan_m2m ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlahoperator_siak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlahoperator_ktpel ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keterangan ?></span>
                    </td>
                    <td class="text-sm">
                    <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                      <a href="<?=base_url('laporan/pel_edit/'.$data->id)?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Laporan">
                        <i class="fas fa-user-edit text-secondary"></i>
                      </a>
                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete Laporan" class="btn-delete" data-id="<?php echo $data->id; ?>">
                        <i class="fas fa-trash text-secondary"></i>
                      </a>
                    <?php } ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('assets/js/plugins/datatables.js') ?>"></script>
    <script>
      $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
          $.ajax({
            url: '<?php echo site_url('laporan/delpel'); ?>',
            type: 'POST',
            data: {
              id: id
            },
            success: function() {
              alert('Berhasil dihapus!');
              window.location = '<?php echo site_url('laporan/device_pel'); ?>';
            },
            error: function() {
              alert('Terjadi kesalahan saat menghapus data!');
            }
          });
        }
      });

      if (document.getElementById('devPel-Tables')) {
          const dataTableSearch = new simpleDatatables.DataTable("#devPel-Tables", {
            searchable: true,
            fixedHeight: false,
            perPage: 5
          });

          document.querySelectorAll(".export").forEach(function(el) {
            el.addEventListener("click", function(e) {
              var type = el.dataset.type;

              var data = {
                type: type,
                filename: "soft-ui-" + type,
              };

              if (type === "csv") {
                data.columnDelimiter = ",";
              }

              dataTableSearch.export(data);
            });
          });
        };
      </script>

</html>