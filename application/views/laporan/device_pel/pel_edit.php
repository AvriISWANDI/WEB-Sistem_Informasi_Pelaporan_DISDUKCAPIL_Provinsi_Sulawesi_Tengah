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
            <h2>Edit Device Pelayanan SIAK</h2>
            <!-- <div class="form-group">
              <label for="waktu_laporan" class="form-control-label">WAKTU LAPORAN</label>
              <input class="form-control" name="waktu_laporan" type="datetime" placeholder="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
              <?= form_error('waktu_laporan') ?>
            </div> -->
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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pcmonitor" class="form-control-label">PC DEKTOP & MONITOR</label>
                  <input class="form-control" type="text" name="pcmonitor" value="<?= $this->input->post('pcmonitor') ?? $row->pcmonitor ?>">
                  <?= form_error('pcmonitor') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pcallinone" class="form-control-label">PC ALL IN ONE</label>
                  <input class="form-control" type="text" name="pcallinone" value="<?= $this->input->post('pcallinone') ?? $row->pcallinone ?>">
                  <?= form_error('pcallinone') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="laptop" class="form-control-label">LAPTOP</label>
              <input class="form-control" type="text" name="laptop" value="<?= $this->input->post('laptop') ?? $row->laptop ?>">
              <?= form_error('laptop') ?>
            </div>
            <div class="form-group">
              <label for="server_siak" class="form-control-label">SERVER SIAK</label>
              <input class="form-control" type="text" name="server_siak" value="<?= $this->input->post('server_siak') ?? $row->server_siak ?>">
              <?= form_error('server_siak') ?>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="printer_kkakta" class="form-control-label">PRINTER KK/AKTA</label>
                  <input class="form-control" type="text" name="printer_kkakta" value="<?= $this->input->post('printer_kkakta') ?? $row->printer_kkakta ?>">
                  <?= form_error('printer_kkakta') ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="printer_kia" class="form-control-label">PRINTER KIA</label>
                  <input class="form-control" type="text" name="printer_kia" value="<?= $this->input->post('printer_kia') ?? $row->printer_kia ?>">
                  <?= form_error('printer_kia') ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="printer_ktpel" class="form-control-label">PRINTER KTP-EL</label>
                  <input class="form-control" type="text" name="printer_ktpel" value="<?= $this->input->post('printer_ktpel') ?? $row->printer_ktpel ?>">
                  <?= form_error('printer_ktpel') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="perangkatmobile_ktpel" class="form-control-label">PERANGKAT MOBILE KTP-EL</label>
                  <input class="form-control" type="text" name="perangkatmobile_ktpel" value="<?= $this->input->post('perangkatmobile_ktpel') ?? $row->perangkatmobile_ktpel ?>">
                  <?= form_error('perangkatmobile_ktpel') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="perangkatmobile_siak" class="form-control-label">PERANGKAT MOBILE SIAK</label>
                  <input class="form-control" type="text" name="perangkatmobile_siak" value="<?= $this->input->post('perangkatmobile_siak') ?? $row->perangkatmobile_siak ?>">
                  <?= form_error('perangkatmobile_siak') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="stabilizer_server" class="form-control-label">STABILIZER SERVER</label>
              <input class="form-control" type="text" name="stabilizer_server" value="<?= $this->input->post('stabilizer_server') ?? $row->stabilizer_server ?>">
              <?= form_error('stabilizer_server') ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ups_server" class="form-control-label">UPS SERVER</label>
                  <input class="form-control" type="text" name="ups_server" value="<?= $this->input->post('ups_server') ?? $row->ups_server ?>">
                  <?= form_error('ups_server') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ups_pc" class="form-control-label">UPS PC</label>
                  <input class="form-control" type="text" name="ups_pc" value="<?= $this->input->post('ups_pc') ?? $row->ups_pc ?>">
                  <?= form_error('ups_pc') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kondisijaringan_vpn" class="form-control-label">KONDISI JARINGAN VPN</label>
                  <input class="form-control" type="text" name="kondisijaringan_vpn" value="<?= $this->input->post('kondisijaringan_vpn') ?? $row->kondisijaringan_vpn ?>">
                  <?= form_error('kondisijaringan_vpn') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kondisijaringan_m2m" class="form-control-label">KONDISI JARINGAN M2M</label>
                  <input class="form-control" type="text" name="kondisijaringan_m2m" value="<?= $this->input->post('kondisijaringan_m2m') ?? $row->kondisijaringan_m2m ?>">
                  <?= form_error('kondisijaringan_m2m') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jumlahoperator_siak" class="form-control-label">JUMLAH OPERATOR SIAK</label>
                  <input class="form-control" type="text" name="jumlahoperator_siak" value="<?= $this->input->post('jumlahoperator_siak') ?? $row->jumlahoperator_siak ?>">
                  <?= form_error('jumlahoperator_siak') ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jumlahoperator_ktpel" class="form-control-label">JUMLAH OPERATOR KTP-EL</label>
                  <input class="form-control" type="text" name="jumlahoperator_ktpel" value="<?= $this->input->post('jumlahoperator_ktpel') ?? $row->jumlahoperator_ktpel ?>">
                  <?= form_error('jumlahoperator_ktpel') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="keterangan" class="form-control-label">KETERANGAN</label>
              <input class="form-control" type="text" name="keterangan" value="<?= $this->input->post('keterangan') ?? $row->keterangan ?>">
              <?= form_error('keterangan') ?>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>