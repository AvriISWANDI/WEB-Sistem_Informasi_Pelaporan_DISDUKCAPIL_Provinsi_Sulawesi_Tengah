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
          <form action="" method="post" >
            <h2>Tambah Data Inovasi</h2>
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
              <label for="singkatan_inovasi" class="form-control-label">SINGKATAN INOVASI</label>
              <input class="form-control" placeholder="CUKUR" type="text" name="singkatan_inovasi">
              <?= form_error('singkatan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="kepanjangan_inovasi" class="form-control-label">KEPANJANGAN INOVASI</label>
              <input class="form-control" placeholder="Cukup Umur Kami Rekam KTP anda" type="text" name="kepanjangan_inovasi">
              <?= form_error('kepanjangan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="tahun_penerapan" class="form-control-label">TAHUN PENERAPAN</label>
              <input class="form-control" placeholder="2023" type="text" name="tahun_penerapan">
              <?= form_error('tahun_penerapan') ?>
            </div>
            <div class="form-group">
              <label for="tujuan_inovasi" class="form-control-label">TUJUAN INOVASI</label>
              <textarea class="form-control" placeholder="Tujuan Inovasi" type="text" name="tujuan_inovasi"></textarea>
              <?= form_error('tujuan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="dampak" class="form-control-label">DAMPAK</label>
              <input class="form-control" placeholder="Dampak" type="text" name="dampak">
              <?= form_error('dampak') ?>
            </div>
            <div class="form-group">
              <label for="kendala" class="form-control-label">KENDALA</label>
              <textarea class="form-control" placeholder="1. Contoh&#10;2. Contoh" type="text" name="kendala"></textarea>
              <?= form_error('kendala') ?>
            </div>
            <div class="form-group">
              <label for="dokumen_inovasi" class="form-control-label">DOKUMENTASI INOVASI</label>
              <input class="form-control" type="file" name="dokumen_inovasi">
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