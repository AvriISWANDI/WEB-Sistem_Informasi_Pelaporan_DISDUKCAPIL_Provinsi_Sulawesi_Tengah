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
            <h2>Tambah Laporan Harian</h2>
            <!-- <div class="form-group">
              <label for="waktu_laporan" class="form-control-label">WAKTU LAPORAN</label>
              <input class="form-control" name="waktu_laporan" type="datetime" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
              <?= form_error('waktu_laporan') ?>
            </div> -->
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
              <label for="tgl_pelayanan" class="form-control-label">TANGGAL PELAYANAN</label>
              <input class="form-control" value="0" type="date" name="tgl_pelayanan">
              <?= form_error('tgl_pelayanan') ?>
            </div>
            <div class="form-group">
              <label for="nik_baru" class="form-control-label">NIK BARU</label>
              <input class="form-control" value="0" type="text" name="nik_baru">
              <?= form_error('nik_baru') ?>
            </div>
            <div class="form-group">
              <label for="cetak_kk" class="form-control-label">CETAK KK</label>
              <input class="form-control" value="0" type="text" name="cetak_kk">
              <?= form_error('cetak_kk') ?>
            </div>
            <div class="form-group">
              <label for="rekam_ktpel" class="form-control-label">PEREKAMAN KTP-EL</label>
              <input class="form-control" value="0" type="text" name="rekam_ktpel">
              <?= form_error('rekam_ktpel') ?>
            </div>
            <div class="form-group">
              <label for="prr" class="form-control-label">PRR</label>
              <input class="form-control" value="0" type="text" name="prr">
              <?= form_error('prr') ?>
            </div>
            <div class="form-group">
              <label for="sfe" class="form-control-label">SFE</label>
              <input class="form-control" value="0" type="text" name="sfe">
              <?= form_error('sfe') ?>
            </div>
            <div class="form-group">
              <label for="duplikat_record" class="form-control-label">DUPLICATE RECORD</label>
              <input class="form-control" value="0" type="text" name="duplikat_record">
              <?= form_error('duplikat_record') ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="suket_now" class="form-control-label">SURAT KETERANGAN (HARI INI)</label>
                  <input class="form-control" value="0" type="text" name="suket_now">
                  <?= form_error('suket_now') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="suket_before" class="form-control-label">SURAT KETERANGAN (HARI SEBELUMNYA)</label>
                  <input class="form-control" value="0" type="text" name="suket_before">
                  <?= form_error('suket_before') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_ktpel_suket" class="form-control-label">CETAK KTP-EL SUKET</label>
                  <input class="form-control" value="0" type="text" name="cetak_ktpel_suket">
                  <?= form_error('cetak_ktpel_suket') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cetak_ktpel_prr" class="form-control-label">CETAK KTP-EL PRR</label>
                  <input class="form-control" value="0" type="text" name="cetak_ktpel_prr">
                  <?= form_error('cetak_ktpel_prr') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cetak_ktpel_rhgp" class="form-control-label">CETAK KTP-EL HILANG/ GANTI/ RUSAK/ PERUBAHAN</label>
                  <input class="form-control" value="0" type="text" name="cetak_ktpel_rhgp">
                  <?= form_error('cetak_ktpel_rhgp') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_akta_17" class="form-control-label">CETAK AKTA KELAHIRAN ( 0 - 17 TAHUN )</label>
                  <input class="form-control" value="0" type="text" name="cetak_akta_17">
                  <?= form_error('cetak_akta_17') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_akta_17up" class="form-control-label">CETAK AKTA KELAHIRAN ( > 17 TAHUN )</label>
                  <input class="form-control" value="0" type="text" name="cetak_akta_17up">
                  <?= form_error('cetak_akta_17up') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_akta_kawin" class="form-control-label">CETAK AKTA PERKAWINAN</label>
                  <input class="form-control" value="0" type="text" name="cetak_akta_kawin">
                  <?= form_error('cetak_akta_kawin') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cetak_akta_cerai" class="form-control-label">CETAK AKTA PERCERAIAN</label>
                  <input class="form-control" value="0" type="text" name="cetak_akta_cerai">
                  <?= form_error('cetak_akta_cerai') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cetak_akta_kematian" class="form-control-label">CETAK AKTA KEMATIAN</label>
                  <input class="form-control" value="0" type="text" name="cetak_akta_kematian">
                  <?= form_error('cetak_akta_kematian') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="skpwni_out" class="form-control-label">SKPWNI (PINDAH)</label>
                  <input class="form-control" value="0" type="text" name="skpwni_out">
                  <?= form_error('skpwni_out') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="skpwni_in" class="form-control-label">SKPWNI (DATANG)</label>
                  <input class="form-control" value="0" type="text" name="skpwni_in">
                  <?= form_error('skpwni_in') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_kia_5" class="form-control-label">CETAK KIA ( 0 - 5 TAHUN )</label>
                  <input class="form-control" value="0" type="text" name="cetak_kia_5">
                  <?= form_error('cetak_kia_5') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cetak_kia_5up" class="form-control-label">CETAK KIA ( > 5 TAHUN )</label>
                  <input class="form-control" value="0" type="text" name="cetak_kia_5up">
                  <?= form_error('cetak_kia_5up') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="sisa_blanko" class="form-control-label">SISA BLANGKO</label>
              <input class="form-control" value="0" type="text" name="sisa_blanko">
              <?= form_error('sisa_blanko') ?>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>