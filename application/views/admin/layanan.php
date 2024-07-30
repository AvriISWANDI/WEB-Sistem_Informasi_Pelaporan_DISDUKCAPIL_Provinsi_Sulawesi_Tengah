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
<div class="container-fluid pt-3">
  <div class="row my-4">
    <div class="col-12">
      <div class="card pb-0">
        <div class="card-header pb-0">
          <div class="d-lg-flex">
            <div>
              <h3 class="mb-0">Daftar Layanan</h3>
              <p class="text-sm mb-0">
                Admin Page
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <a href="<?php echo base_url('layanan_add'); ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Layanan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-0">
          <div class="table-responsive">
            <table class="table align-items-center mb-0" id="layanan-Tables">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">NO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" rowspan="2">Kabupaten / Kota</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" colspan="2">Layanan</th>
                </tr>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Online</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Integritas</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($row->result() as $key => $data) { ?>
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-sm"><?php echo $no++ ?></span>
                    </td>
                    <td style="position: sticky; left: 161px; z-index: 1; background-color: #fff;">
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
                    <td class="align-middle text-center text-sm">
                      <?php if (strpos($data->layanan_online, 'Sudah') !== false) : ?>
                        <span class="badge badge-sm badge-success"><?= $data->layanan_online ?></span>
                      <?php else : ?>
                        <span class="badge badge-sm badge-danger"><?= $data->layanan_online ?></span>
                      <?php endif; ?>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <?php if (strpos($data->layanan_terintegritas, 'Sudah') !== false) : ?>
                        <span class="badge badge-sm badge-success"><?= $data->layanan_terintegritas ?></span>
                      <?php else : ?>
                        <span class="badge badge-sm badge-danger"><?= $data->layanan_terintegritas ?></span>
                      <?php endif; ?>
                    </td>
                    <td class="text-sm">
                      <a href="<?= base_url('layanan/editlayanan/' . $data->id) ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit User">
                        <i class="fas fa-user-edit text-secondary"></i>
                      </a>
                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete User" class="btn-delete" data-id="<?php echo $data->id; ?>">
                        <i class="fas fa-trash text-secondary"></i>
                      </a>
                    </td>
                    </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
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
        url: '<?php echo site_url('layanan/dellayanan'); ?>',
        type: 'POST',
        data: {
          id: id
        },
        success: function() {
          alert('Berhasil dihapus!');
          window.location = '<?php echo site_url('layanan'); ?>';
        },
        error: function() {
          alert('Terjadi kesalahan saat menghapus data!');
        }
      });
    }
  });

  if (document.getElementById('layanan-Tables')) {
    const dataTableSearch = new simpleDatatables.DataTable("#layanan-Tables", {
      searchable: true,
      fixedHeight: false,
      perPage: 5
    });
  };
</script>

</html>