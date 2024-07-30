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
              <h3 class="mb-0">Laporan Harian</h3>
              <p class="text-sm mb-0">
                Simpan Rindu.
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <?php if ($this->session->userdata('access') == 'adminkabkota') { ?>
                  <a href="<?php echo base_url('harian_add') ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                <?php } ?>
                <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                  <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('harian_filter') ?>" method="post">
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
              <table class="table table-flush" id="Harian-Tables">
                <thead class="thead-light">
                  <tr>
                    <th class="text-secondary opacity-7" hidden></th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" style="position: sticky; left: 0; z-index: 1; background-color: #fff;">Waktu Laporan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">KABUPATEN/KOTA</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" style="position: sticky; left: 304px; z-index: 1; background-color: #fff;">Tanggal Pelayanan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">NIK Baru</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak KK</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Perekaman KTP-EL</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PRR (Hari Ini)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak KTP-EL PRR</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SFE</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Duplicate Record</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SUKET (HARI INI)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SUKET (HARI SEBELUMNYA)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak KTP-EL (SUKET)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak KTP-EL (HILANG/GANTI/RUSAK/PERUBAHAN)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Akta Kelahiran (0 - 17 Tahun)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Akta Kelahiran (> 17 Tahun)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Akta (Perkawinan)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Akta (Perceraian)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Akta (Kematian)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SKPWNI (PINDAH)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">SKPWNI (DATANG)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Kia ( 0 - 5 Tahun)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cetak Kia ( > 5 Tahun)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Sisa Blanko KTP-EL</th>
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
                      <td style="position: sticky; left: 304px; z-index: 1; background-color: #fff;">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?= $data->tgl_pelayanan ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->nik_baru ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_kk ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->rekam_ktpel ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->prr ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_ktpel_prr ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->sfe ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->duplikat_record ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->suket_now ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->suket_before ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_ktpel_suket ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_ktpel_rhgp ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_akta_17 ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_akta_17up ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_akta_kawin ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_akta_cerai ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_akta_kematian ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->skpwni_out ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->skpwni_in ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_kia_5 ?></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->cetak_kia_5up ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data->sisa_blanko ?></span>
                      </td>
                      <td class="text-sm">
                        <?php if ($this->session->userdata('access') == 'adminkabkota') { ?>
                          <a href="<?= base_url('simpanrindu/harian_edit/' . $data->id) ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Laporan">
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
              url: '<?php echo site_url('simpanrindu/delharian'); ?>',
              type: 'POST',
              data: {
                id: id
              },
              success: function() {
                alert('Berhasil dihapus!');
                window.location = '<?php echo site_url('simpanrindu/harian'); ?>';
              },
              error: function() {
                alert('Terjadi kesalahan saat menghapus data!');
              }
            });
          }
        });

        if (document.getElementById('Harian-Tables')) {
          const dataTableSearch = new simpleDatatables.DataTable("#Harian-Tables", {
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