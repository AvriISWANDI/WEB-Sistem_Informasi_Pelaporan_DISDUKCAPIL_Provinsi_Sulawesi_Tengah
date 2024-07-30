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
    <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-4">
          <form action="" method="post">
            <h2>Edit User</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">KODE KABUPATEN/KOTA</label>
                  <input type="hidden" name="id" value="<?= $row->id ?>">
                  <input type="text" class="form-control" name="kode_kabkota" placeholder="7xxx" value="<?= $this->input->post('kode') ?? $row->kode ?>"/>
                  <?=form_error('kode_kabkota')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">NAMA KABUPATEN/KOTA</label>
                  <input type="text" placeholder="Palu" class="form-control" name="nama_kabkota" value="<?= $this->input->post('kabkota') ?? $row->kabkota ?>" />
                  <?=form_error('nama_kabkota')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">NAMA</label>
                  <input type="text" class="form-control" name="nama" placeholder="Admin Kabupaten Palu" value="<?= $this->input->post('nama') ?? $row->nama ?>">
                  <?=form_error('nama')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">USERNAME</label>
                  <input type="text" placeholder="palu" class="form-control" name="username" value="<?= $this->input->post('username') ?? $row->username ?>"/>
                  <?=form_error('username')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">PASSWORD</label>
                  <input type="password" class="form-control" name="password" placeholder="****" value="<?=$this->input->post('password') ?>"/>
                  <?=form_error('password')?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">KONFIRMASI PASSWORD</label>
                  <input type="password" placeholder="****" class="form-control" name="conf_password" value="<?=$this->input->post('conf_password') ?>"/>
                  <?=form_error('conf_password')?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">AKSES</label>
                  <select name="akses" class="form-control">
                    <?php $akses = $this->input->post('akses') ? $this->input->post('akses') : $row->akses ?>
                    <option value="adminprov">Admin Provinsi</option>
                    <option value="adminkabkota" <?= $akses == 2 ? '"selected"' : null?>>Admin Kab/Kota</option>
                    <option value="monitoring" <?= $akses == 3 ? '"selected"' : null?>>Monitoring</option>
                  </select>
                  <?=form_error('akses')?>
                </div>
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="example-text-input" class="form-control-label">STATUS LOGIN</label>
                  <select name="status" class="form-control">
                    <option value="">Pilih Akses</option>
                    <option value="1" <?=set_value('status') == 1 ? "selected" : null?>>Diberi Izin</option>
                    <option value="0"<?=set_value('status') == 2 ? "selected" : null?>>Terblokir</option>
                  </select>
                  <?=form_error('status')?>
                  </div>
                </div>
              </div>
              <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
              <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>