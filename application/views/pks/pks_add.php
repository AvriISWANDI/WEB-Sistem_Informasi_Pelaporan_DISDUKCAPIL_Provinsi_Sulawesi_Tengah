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
          <form action="" method="post" enctype="multipart/form-data">
            <h2>Tambah Data PKS</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kode_kabkota" class="form-control-label">KODE KABUPATEN/KOTA</label>
                  <input type="text" class="form-control" name="kode_kabkota" value="<?php echo $this->session->userdata('kode'); ?>" readonly>
                  <?= form_error('kode_kabkota') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_kabkota" class="form-control-label">NAMA KABUPATEN/KOTA</label>
                  <input type="text" class="form-control" name="nama_kabkota" value="<?php echo $this->session->userdata('kabkota'); ?>" readonly />
                  <input type="hidden" class="form-control" name="logo" value="<?php echo $this->session->userdata('logo'); ?>" readonly />
                  <?= form_error('nama_kabkota') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="opdbhi_total" class="form-control-label">OPD BHI</label>
              <input class="form-control" placeholder="3" type="text" name="opdbhi_total">
              <?= form_error('opdbhi_total') ?>
            </div>
            <div class="form-group">
              <label for="opdbhi_pks" class="form-control-label">OPD / BHI YANG TELAH PKS</label>
              <textarea style="height: 100px;" class="form-control" placeholder="1. CONTOH&#10;2. CONTOH&#10;3. CONTOH" type="text" name="opdbhi_pks"></textarea>
              <?= form_error('opdbhi_pks') ?>
            </div>
            <div class="form-group">
              <label for="nomor_pks" class="form-control-label">NOMOR PKS</label>
              <textarea style="height: 100px;" class="form-control" placeholder="1. A/B/C/D/2021 - A/B/C/D/2021&#10;2. A/B/C/D/2021 - A/B/C/D/2021&#10;3. A/B/C/D/2021 - A/B/C/D/2021" type="text" name="nomor_pks"></textarea>
              <?= form_error('nomor_pks') ?>
            </div>
            <div class="form-group">
              <label for="nomor_juknis" class="form-control-label">NOMOR JUKNIS</label>
              <textarea style="height: 100px;" class="form-control" placeholder="1. A/B/C/D/2021 - A/B/C/D/2021&#10;2. A/B/C/D/2021 - A/B/C/D/2021&#10;3. A/B/C/D/2021 - A/B/C/D/2021" type="text" name="nomor_juknis"></textarea>
              <?= form_error('nomor_juknis') ?>
            </div>
            <div class="form-group">
              <label for="opdbhi_totalakses" class="form-control-label">OPD BHI AKSES DATA</label>
              <input class="form-control" placeholder="3" type="text" name="opdbhi_totalakses">
              <?= form_error('opdbhi_totalakses') ?>
            </div>
            <div class="form-group">
              <label for="opdbhi_akses" class="form-control-label">OPD / BHI YANG TELAH AKSES DATA KEPENDUDUKAN</label>
              <textarea style="height: 100px;" class="form-control" placeholder="1. AKSES DATA&#10;2. AKSES DATA&#10;3. AKSES DATA" type="text" name="opdbhi_akses"></textarea>
              <?= form_error('opdbhi_akses') ?>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dokumen_pks" class="form-control-label">DOKUMEN PKS</label>
                  <input class="form-control" type="file" name="dokumen_pks">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dokumen_juknis" class="form-control-label">DOKUMEN JUKNIS</label>
                  <input class="form-control" type="file" name="dokumen_juknis">
                </div>
              </div>
              <div class="col-md-4  ">
                <div class="form-group">
                  <label for="dokumen_pendukung" class="form-control-label">DOKUMEN PENDUKUNG</label>
                  <input class="form-control" type="file" name="dokumen_pendukung">
                </div>
              </div>  
            </div>
            <div class="form-group">
              <label for="keterangan" class="form-control-label">KETERANGAN</label>
              <input class="form-control" placeholder="Keterangan" type="text" name="keterangan">
              <?= form_error('keterangan') ?>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>