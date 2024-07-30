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
  <div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-header pb-0">
          <div class="d-lg-flex">
            <div>
              <h3 class="mb-0">Daftar perjanjian kerjasama</h3>
              <p class="text-sm mb-0">
                Perjanjian Kerjasama
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                  <a href="<?php echo base_url('pks_add') ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                  <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('pks_filter') ?>" method="post">
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
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-4" id="pks-Tables">
              <thead>
                <tr>
                  <th class="text-secondary opacity-7" rowspan="2" hidden></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2" style="position: sticky; left: 0; z-index: 1; background-color: #fff;">Waktu Laporan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2" style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">PROVINSI/KAB/KOTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">OPD / BHI</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">OPD / BHI YANG TELAH PKS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">NOMOR PKS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">NOMOR JUKNIS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">OPD / BHI AKSES DATA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">OPD / BHI YANG TELAH AKSES DATA KEPENDUDUKAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">DOKUMEN PKS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">DOKUMEN JUKNIS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">DOKUMES PENDUKUNG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">KET</th>
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
                      <div class="d-flex px-2 py-1 justify-content-center">
                        <div>
                          <img src="<?php echo base_url('assets/img/kabkota/' . $data->logo); ?>" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs"><?= $data->kabkota ?></h6>
                          <p class="text-xs text-secondary mb-0"><?= $data->kode ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->opdbhi_total ?></span>
                    </td>
                    </td>
                    <?php
                    // Ambil data opdbhi_pks dari database
                    $opdbhi_pks = $data->opdbhi_pks;

                    // Ubah string menjadi array dengan membaginya berdasarkan karakter koma
                    $opdbhi_pks_array = explode("\n", $opdbhi_pks); ?>
                    <td class="align-middle text-center">
                      <?php if (count($opdbhi_pks_array) > 0) : ?>
                        <ul>
                          <?php foreach ($opdbhi_pks_array as $opdbhi_pks) : ?>
                            <li>
                              <span class="text-secondary text-xs font-weight-bold">
                                <?= trim($opdbhi_pks) ?>
                              </span>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <span class="text-secondary text-xs font-weight-bold">
                          Tidak ada OPD BHI PKS
                        </span>
                      <?php endif; ?>
                    </td>
                    </td>
                    <?php
                    // Ambil data nomor_pks dari database
                    $nomor_pks = $data->nomor_pks;

                    // Ubah string menjadi array dengan membaginya berdasarkan karakter koma
                    $nomor_pks_array = explode("\n", $nomor_pks); ?>
                    <td class="align-middle text-center">
                      <?php if (count($nomor_pks_array) > 0) : ?>
                        <ul>
                          <?php foreach ($nomor_pks_array as $nomor_pks) : ?>
                            <li>
                              <span class="text-secondary text-xs font-weight-bold">
                                <?= trim($nomor_pks) ?>
                              </span>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <span class="text-secondary text-xs font-weight-bold">
                          Tidak ada Nomor PKS
                        </span>
                      <?php endif; ?>
                    </td>
                    </td>
                    <?php
                    // Ambil data nomor_juknis dari database
                    $nomor_juknis = $data->nomor_juknis;

                    // Ubah string menjadi array dengan membaginya berdasarkan karakter koma
                    $nomor_juknis_array = explode("\n", $nomor_juknis); ?>
                    <td class="align-middle text-center">
                      <?php if (count($nomor_juknis_array) > 0) : ?>
                        <ul>
                          <?php foreach ($nomor_juknis_array as $nomor_juknis) : ?>
                            <li>
                              <span class="text-secondary text-xs font-weight-bold">
                                <?= trim($nomor_juknis) ?>
                              </span>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <span class="text-secondary text-xs font-weight-bold">
                          Tidak ada Nomor Juknis
                        </span>
                      <?php endif; ?>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->opdbhi_totalakses ?></span>
                    </td>
                    </td>
                    <?php
                    // Ambil data opdbhi_akses dari database
                    $opdbhi_akses = $data->opdbhi_akses;

                    // Ubah string menjadi array dengan membaginya berdasarkan karakter koma
                    $opdbhi_akses_array = explode("\n", $opdbhi_akses); ?>
                    <td class="align-middle text-center">
                      <?php if (count($opdbhi_akses_array) > 0) : ?>
                        <ul>
                          <?php foreach ($opdbhi_akses_array as $opdbhi_akses) : ?>
                            <li>
                              <span class="text-secondary text-xs font-weight-bold">
                                <?= trim($opdbhi_akses) ?>
                              </span>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <span class="text-secondary text-xs font-weight-bold">
                          Tidak ada OPD BHI Akses
                        </span>
                      <?php endif; ?>
                    </td>
                    <?php if (!is_null($data->dokumen_pks)) { ?>
                      <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-block bg-gradient-primary mb-3" onclick="showModal('<?php echo base_url('assets/img/dokumen/' . $data->dokumen_pks) ?>')">
                          Preview
                        </button>
                        <div class="modal fade" id="modal-preview" tabindex="-1" role="dialog" aria-labelledby="modal-preview" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Dokumen PKS</h6>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <img class="img-fluid" id="modal-image" src="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    <?php } else {
                      echo '<td class="align-middle text-center text-secondary text-xs font-weight-bold">Dokumen Kosong</td>';
                    } ?>

                    <?php if (!is_null($data->dokumen_juknis)) { ?>
                      <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-block bg-gradient-primary mb-3" onclick="showModalJuknis('<?php echo base_url('assets/img/dokumen/' . $data->dokumen_juknis) ?>')">
                          Preview
                        </button>
                        <div class="modal fade" id="modal-preview-juknis" tabindex="-1" role="dialog" aria-labelledby="modal-preview-juknis" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default-juknis">Dokumen Juknis</h6>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <img class="img-fluid" id="modal-image-juknis" src="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    <?php } else {
                      echo '<td class="align-middle text-center text-secondary text-xs font-weight-bold">Dokumen Kosong</td>';
                    } ?>

                    <?php if (!is_null($data->dokumen_pendukung)) { ?>
                      <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-block bg-gradient-primary mb-3" onclick="showModalPendukung('<?php echo base_url('assets/img/dokumen/' . $data->dokumen_pendukung) ?>')">
                          Preview
                        </button>
                        <div class="modal fade" id="modal-preview-pendukung" tabindex="-1" role="dialog" aria-labelledby="modal-preview-pendukung" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default-pendukung">Dokumen Pendukung</h6>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <img class="img-fluid" id="modal-image-pendukung" src="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    <?php } else {
                      echo '<td class="align-middle text-center text-secondary text-xs font-weight-bold">Dokumen Kosong</td>';
                    } ?>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keterangan ?></span>
                    </td>
                    <td class="text-sm">
                      <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                        <a href="<?= base_url('pks/pks_edit/' . $data->id) ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Laporan">
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

      <script src="<?php echo base_url('assets/js/plugins/datatables.js') ?>"></script>
      <script>
        function showModal(imageUrl) {
          var modalImage = document.getElementById("modal-image");
          modalImage.src = imageUrl;
          $('#modal-preview').modal('show');
        }

        function showModalJuknis(imageUrl) {
          var modalImage = document.getElementById("modal-image-juknis");
          modalImage.src = imageUrl;
          $('#modal-preview-juknis').modal('show');
        }

        function showModalPendukung(imageUrl) {
          var modalImage = document.getElementById("modal-image-pendukung");
          modalImage.src = imageUrl;
          $('#modal-preview-pendukung').modal('show');
        }

        $(document).on('click', '.btn-delete', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            $.ajax({
              url: '<?php echo site_url('pks/delpks'); ?>',
              type: 'POST',
              data: {
                id: id
              },
              success: function() {
                alert('Berhasil dihapus!');
                window.location = '<?php echo site_url('pks/index'); ?>';
              },
              error: function() {
                alert('Terjadi kesalahan saat menghapus data!');
              }
            });
          }
        });

        if (document.getElementById('pks-Tables')) {
          const dataTableSearch = new simpleDatatables.DataTable("#pks-Tables", {
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