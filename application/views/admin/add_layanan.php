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
            <h2>Tambah Layanan</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">KODE KABUPATEN/KOTA</label>
                  <input type="text" class="form-control" name="kode" placeholder="7xxx" />
                  <?= form_error('kode') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">NAMA KABUPATEN/KOTA</label>
                  <input type="text" placeholder="Palu" class="form-control" name="kabkota" />
                  <?= form_error('kabkota') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">LAYANAN ONLINE</label>
                  <input type="text" class="form-control" name="layanan_online" placeholder="Sudah (WA)">
                  <?= form_error('layanan_online') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">LAYANAN TERINTEGRITAS</label>
                  <select name="layanan_terintegritas" class="form-control">
                    <option value="">Pilih Layanan Integritas</option>
                    <option value="Sudah" <?= set_value('layanan_terintegritas') == 1 ? "selected" : null ?>>Sudah</option>
                    <option value="Belum" <?= set_value('layanan_terintegritas') == 2 ? "selected" : null ?>>Belum</option>
                    <?= form_error('layanan_terintegritas') ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="logo" class="form-control-label">LOGO KABUPATEN/KOTA</label>
                <input class="form-control" type="file" name="logo">
              </div>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>