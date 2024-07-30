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
            <h2>Edit Data Inovasi</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kode_kabkota" class="form-control-label">KODE KABUPATEN/KOTA</label>
                  <input type="hidden" name="id" value="<?= $row->id ?>">
                  <input type="text" class="form-control" name="kode_kabkota" value="<?= $this->input->post('kode') ?? $row->kode ?>" readonly>
                  <?= form_error('kode_kabkota') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_kabkota" class="form-control-label">NAMA KABUPATEN/KOTA</label>
                  <input type="text" class="form-control" name="nama_kabkota" value="<?= $this->input->post('kabkota') ?? $row->kabkota ?>" readonly />
                  <?= form_error('nama_kabkota') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="singkatan_inovasi" class="form-control-label">SINGKATAN INOVASI</label>
              <input class="form-control" value="<?= $this->input->post('singkatan_inovasi') ?? $row->singkatan_inovasi ?>" type="text" name="singkatan_inovasi">
              <?= form_error('singkatan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="kepanjangan_inovasi" class="form-control-label">KEPANJANGAN INOVASI</label>
              <input class="form-control" value="<?= $this->input->post('kepanjangan_inovasi') ?? $row->pjg_inovasi ?>" type="text" name="kepanjangan_inovasi">
              <?= form_error('kepanjangan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="tahun_penerapan" class="form-control-label">TAHUN PENERAPAN</label>
              <input class="form-control" value="<?= $this->input->post('tahun_penerapan') ?? $row->thn_penerapan ?>" type="text" name="tahun_penerapan">
              <?= form_error('tahun_penerapan') ?>
            </div>
            <div class="form-group">
              <label for="tujuan_inovasi" class="form-control-label">TUJUAN INOVASI</label>
              <textarea class="form-control" name="tujuan_inovasi"><?= $this->input->post('tujuan_inovasi') ?? $row->tujuan_inovasi ?></textarea>
              <?= form_error('tujuan_inovasi') ?>
            </div>
            <div class="form-group">
              <label for="dampak" class="form-control-label">DAMPAK</label>
              <textarea class="form-control" name="dampak"><?= $this->input->post('dampak') ?? $row->dampak ?></textarea>
              <?= form_error('dampak') ?>
            </div>
            <div class="form-group">
              <label for="kendala" class="form-control-label">KENDALA</label>
              <textarea class="form-control" name="kendala" rows="5"><?php
                                                                      $kendala = $this->input->post('kendala') ?? $row->kendala;
                                                                      echo strip_tags($kendala);
                                                                      ?></textarea>
              <?= form_error('kendala') ?>
            </div>
            <div class="form-group">
              <label for="keterangan" class="form-control-label">KETERANGAN</label>
              <input class="form-control" value="<?= $this->input->post('keterangan') ?? $row->keterangan ?>" type="text" name="keterangan">
              <?= form_error('keterangan') ?>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>