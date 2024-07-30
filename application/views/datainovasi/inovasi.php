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
              <h3 class="mb-0">Data Inovasi</h3>
              <p class="text-sm mb-0">
                Laporan
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                  <a href="<?php echo base_url('inovasi_add') ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                  <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-0">
        <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('inovasi_filter') ?>" method="post">
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
            <table class="table align-items-center justify-content-center mb-4" id="datainovasi-Tables">
              <thead>
                <tr>
                  <th class="text-secondary opacity-7" rowspan="2" hidden></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2" style="position: sticky; left: 0; z-index: 1; background-color: #fff;">WAKTU PELAPORAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2" style="position: sticky; left: 144px; z-index: 1; background-color: #fff;">PROVINSI/KAB/KOTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">NAMA INVOASI</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">TAHUN PENERAPAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">TUJUAN INOVASI</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">DAMPAK/PENGARUH TERHADAP LAYANAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">KENDALA DALAM PENERAPAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">DOKUMEN INOVASI</th>
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
                    <td style="position: sticky; left: 144px; z-index: 1; background-color: #fff;">
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
                    <td>
                      <div class="d-flex px-2 py-1 justify-content-center">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs"><?= $data->singkatan_inovasi ?></h6>
                          <p class="text-xs text-secondary mb-0"><?= $data->pjg_inovasi ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->thn_penerapan ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?php
                                                                            $tujuan_inovasi = $data->tujuan_inovasi;
                                                                            $kata = explode(' ', $tujuan_inovasi); // memisahkan tujuan inovasi menjadi array kata-kata
                                                                            $count = count($kata);
                                                                            $i = 1;

                                                                            foreach ($kata as $k) {
                                                                              echo $k . ' ';
                                                                              if ($i % 7 == 0) {
                                                                                echo '<br>';
                                                                              }
                                                                              $i++;
                                                                            }
                                                                            ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?php
                                                                            $dampak = $data->dampak;
                                                                            $kata = explode(' ', $dampak); // memisahkan dampak menjadi array kata-kata
                                                                            $count = count($kata);
                                                                            $i = 1;

                                                                            foreach ($kata as $k) {
                                                                              echo $k . ' ';
                                                                              if ($i % 7 == 0) {
                                                                                echo '<br>';
                                                                              }
                                                                              $i++;
                                                                            }
                                                                            ?></span>
                    </td>
                    <?php
                          // Ambil data kendala dari database
                          $kendala = $data->kendala;

                          // Ubah string menjadi array dengan membaginya berdasarkan karakter koma
                          $kendala_array = explode("\n", $kendala); ?>
                    <td class="align-middle text-center">
                      <?php if (count($kendala_array) > 0) : ?>
                        <ul>
                          <?php foreach ($kendala_array as $kendala) : ?>
                            <li>
                              <span class="text-secondary text-xs font-weight-bold">
                                <?= trim($kendala) ?>
                              </span>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      <?php else : ?>
                        <span class="text-secondary text-xs font-weight-bold">
                          Tidak ada kendala
                        </span>
                      <?php endif; ?>
                    </td>
                    <?php if (!is_null($data->dokumen_inovasi)) { ?>
                      <td class="align-middle">
                        <button type="button" class="btn btn-sm btn-block bg-gradient-primary mb-3" onclick="showModal('<?php echo base_url('assets/img/dokumen/' . $data->dokumen_inovasi) ?>')">
                          Preview
                        </button>
                        <div class="modal fade" id="modal-preview" tabindex="-1" role="dialog" aria-labelledby="modal-preview" aria-hidden="true">
                          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Dokumen Inovasi</h6>
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
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keterangan ?></span>
                    </td>
                    <td class="text-sm">
                    <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                        <a href="<?= base_url('inovasi/inovasi_edit/' . $data->id) ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Laporan">
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

        $(document).on('click', '.btn-delete', function(e) {
          e.preventDefault();
          var id = $(this).data('id');
          if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            $.ajax({
              url: '<?php echo site_url('inovasi/delinovasi'); ?>',
              type: 'POST',
              data: {
                id: id
              },
              success: function() {
                alert('Berhasil dihapus!');
                window.location = '<?php echo site_url('inovasi/index'); ?>';
              },
              error: function() {
                alert('Terjadi kesalahan saat menghapus data!');
              }
            });
          }
        });

        if (document.getElementById('datainovasi-Tables')) {
          const dataTableSearch = new simpleDatatables.DataTable("#datainovasi-Tables", {
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