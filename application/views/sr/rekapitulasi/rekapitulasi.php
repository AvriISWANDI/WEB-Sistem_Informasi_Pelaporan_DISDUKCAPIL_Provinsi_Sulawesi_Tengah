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
              <h3 class="mb-0">Rekapitulasi</h3>
              <p class="text-sm mb-0">
                Simpan Rindu.
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('rekap_filter') ?>" method="post">
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
            <table class="table table-flush" id="rekapitulasi-Tables">
              <thead class="thead-light">
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">WAKTU PELAPORAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">KABUPATEN/KOTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PEREKAMAN</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SISA SUKET</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SISA PRR</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SISA BLANKO KTP-EL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CETAK KIA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AKTA KELAHIRAN 0-17 TH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PENGGUNAAN KERTAS PUTIH JLH. DOK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LAYANAN ONLINE</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LAYANAN TERINGERITAS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PKS</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AKSES DATA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JUMLAH BUKU POKOK PEMAKAMAN</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($rekap_data as $row) { ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-center mb-0 text-xs"><?php echo $no++; ?></h6>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['waktu_pelaporan']; ?></p>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1 justify-content-center">
                        <div>
                          <img src="<?php echo base_url('assets/img/kabkota/' . $row['logo']); ?>" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs"><?php echo $row['kabkota']; ?></h6>
                          <p class="text-xs text-secondary mb-0"><?php echo $row['kode']; ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['rekam_ktpel']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['suket']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['prr']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['sisa_blanko']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['cetak_kia']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['cetak_akta_17']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center">14</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <?php if (strpos($row['layanan_online'], 'Sudah') !== false) : ?>
                        <span class="badge badge-sm badge-success"><?php echo $row['layanan_online']; ?></span>
                      <?php else : ?>
                        <span class="badge badge-sm badge-danger"><?php echo $row['layanan_online']; ?></span>
                      <?php endif; ?>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <?php if (strpos($row['layanan_terintegritas'], 'Sudah') !== false) : ?>
                        <span class="badge badge-sm badge-success"><?php echo $row['layanan_terintegritas']; ?></span>
                      <?php else : ?>
                        <span class="badge badge-sm badge-danger"><?php echo $row['layanan_terintegritas']; ?></span>
                      <?php endif; ?>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['opdbhi_total']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $row['opdbhi_totalakses']; ?></p>
                    </td>
                    <td class="align-middle text-center">
                      <p class="text-xs font-weight-bold mb-0 text-center">14</p>
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

      if (document.getElementById('rekapitulasi-Tables')) {
        const dataTableSearch = new simpleDatatables.DataTable("#rekapitulasi-Tables", {
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