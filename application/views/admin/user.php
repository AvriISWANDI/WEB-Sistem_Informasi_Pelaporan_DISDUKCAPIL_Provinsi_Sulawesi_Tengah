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
              <h3 class="mb-0">Daftar Pengguna</h3>
              <p class="text-sm mb-0">
                Admin Page
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <a href="<?php echo base_url('users_add'); ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Pengguna</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-0">
          <div class="table-responsive">
            <table class="table align-items-center mb-0" id="pengguna-Table">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kabupaten / Kota</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Action</th>
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
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="<?php echo base_url('assets/img/kabkota/' . $data->logo) ?>" class="avatar avatar-sm me-3" alt="avatar image">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?= $data->nama ?></h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class="text-sm mb-0"><?= $data->kabkota ?></h6>
                      <p class="text-sm text-secondary mb-0"><?= $data->kode ?></p>
                    </td>
                    <td class="text-sm">
                      <a href="<?=base_url('users/edituser/'.$data->id)?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit User">
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
            url: '<?php echo site_url('users/deluser'); ?>',
            type: 'POST',
            data: {
              id: id
            },
            success: function() {
              alert('Berhasil dihapus!');
              window.location = '<?php echo site_url('users'); ?>';
            },
            error: function() {
              alert('Terjadi kesalahan saat menghapus data!');
            }
          });
        }
      });

  if (document.getElementById('pengguna-Table')) {
    const dataTableSearch = new simpleDatatables.DataTable("#pengguna-Table", {
      searchable: true,
      fixedHeight: false,
      perPage: 5
    });
  };
</script>

</html>