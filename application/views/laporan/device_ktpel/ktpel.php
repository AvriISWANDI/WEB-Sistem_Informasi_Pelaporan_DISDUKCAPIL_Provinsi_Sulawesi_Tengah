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
    <div class="col-12">
      <div class="card">

        <div class="card-header pb-0">
          <div class="d-lg-flex">
            <div>
              <h3 class="mb-0">Device KTP-eL</h3>
              <p class="text-sm mb-0">
                Laporan
              </p>
            </div>
            <div class="ms-auto my-auto mt-lg-0 mt-4">
              <div class="ms-auto my-auto">
                <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                  <a href="<?php echo base_url('ktpel_add') ?>" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Data</a>
                  <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
        <div class="card-body p-4">
            <?php if ($this->session->userdata('access') == 'adminprov') { ?>
              <form action="<?php echo base_url('ktpel_filter') ?>" method="post">
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
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-4" id="ktpel-Tables">
              <thead>
                <tr>
                  <th class="text-secondary opacity-7" hidden></th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" style="position: sticky; left: 0; z-index: 1; background-color: #fff;">Waktu Laporan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder" style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">PROVINSI/KAB/KOTA</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">MONITOR BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">MONITOR KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">MONITOR RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">MONITOR HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Server Avis BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Server Avis KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Server Avis RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Server Avis HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Desktop PC BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Desktop PC KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Desktop PC RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Desktop PC HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">UPS 750VA/ 1000 VA BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">UPS 750VA/ 1000 VA KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">UPS 750VA/ 1000 VA RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">UPS 750VA/ 1000 VA HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fingerprint Scanner BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fingerprint Scanner KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fingerprint Scanner RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Fingerprint Scanner HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Smart Card Reader BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Smart Card Reader KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Smart Card Reader RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Smart Card Reader HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Signature Pad BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Signature Pad KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Signature Pad RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Signature Pad HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kamera Digital BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kamera Digital KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kamera Digital RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Kamera Digital HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Iris Scanner BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Iris Scanner KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Iris Scanner RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Iris Scanner HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tripod BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tripod KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tripod RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tripod HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Switch & Cabling BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Switch & Cabling KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Switch & Cabling RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Switch & Cabling HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk External BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk External KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk External RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk External HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Digital Scanner BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Digital Scanner KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Digital Scanner RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Digital Scanner HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Keyboard BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Keyboard KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Keyboard RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Keyboard HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jarkomdat BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jarkomdat KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jarkomdat RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jarkomdat HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Adaptor Camera BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Adaptor Camera KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Adaptor Camera RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Adaptor Camera HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Client BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Client KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Client RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Client HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Server BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Server KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Server RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">CPU Server HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Antena M2M BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Antena M2M KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Antena M2M RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Antena M2M HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk Internal BAIK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk Internal KURANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk Internal RUSAK</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Hardisk Internal HILANG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">JUMLAH</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Ket</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($row->result() as $key => $data) { ?>
                  <tr>
                    <td style="position: sticky; left: 0; z-index: 1; background-color: #fff;">
                      <p class="text-xs font-weight-bold mb-0 text-center"><?= $data->waktu_pelaporan ?></p>
                    </td>
                    <td style="position: sticky; left: 134px; z-index: 1; background-color: #fff;">
                      <div class="d-flex px-2 py-1 justify-content-center">
                        <div>
                          <img src="<?php echo base_url('assets/img/kabkota/' . $data->logo); ?>" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-xs"><?= $data->kabkota ?></h6>
                          <p class="text-xs text-secondary mb-0"><?= $data->kode ?></p>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->monitor_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->monitor_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->monitor_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->monitor_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_monitor ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->serveravis_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->serveravis_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->serveravis_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->serveravis_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_serveravis ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->desktoppc_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->desktoppc_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->desktoppc_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->desktoppc_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_desktoppc ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->ups_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_ups ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->fp_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->fp_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->fp_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->fp_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_fp ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->scr_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->scr_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->scr_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->scr_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_scr ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sp_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sp_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sp_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sp_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_sp ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kameradigital_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kameradigital_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kameradigital_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->kameradigital_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_kameradigital ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->irisscanner_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->irisscanner_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->irisscanner_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->irisscanner_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_irisscanner ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->tripod_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->tripod_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->tripod_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->tripod_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_tripod ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sc_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sc_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sc_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->sc_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_sc ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardext_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardext_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardext_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardext_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_hardext ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->digitalscanner_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->digitalscanner_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->digitalscanner_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->digitalscanner_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_digitalscanner ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keyboard_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keyboard_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keyboard_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keyboard_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_keyboard ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jarkomdat_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jarkomdat_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jarkomdat_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jarkomdat_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_jarkomdat ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->adaptorcam_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->adaptorcam_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->adaptorcam_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->adaptorcam_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_adaptorcam ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuclient_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuclient_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuclient_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuclient_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_cpuclient ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuserver_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuserver_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuserver_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->cpuserver_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_cpuserver ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->antenam2m_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->antenam2m_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->antenam2m_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->antenam2m_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_antenam2m ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardint_baik ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardint_kurang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardint_rusak ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->hardint_hilang ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->jumlah_hardint ?></span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $data->keterangan ?></span>
                    </td>
                    <td class="text-sm">
                      <?php if ($this->session->userdata('access') == 'adminprov' || $this->session->userdata('access') == 'adminkabkota') { ?>
                        <a href="<?= base_url('laporan/ktpel_edit/' . $data->id) ?>" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit Laporan">
                          <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete Laporan" class="btn-delete" data-id="<?php echo $data->id; ?>">
                          <i class="fas fa-trash text-secondary"></i>
                        </a>
                      <?php } ?>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
              url: '<?php echo site_url('laporan/delktpel'); ?>',
              type: 'POST',
              data: {
                id: id
              },
              success: function() {
                alert('Berhasil dihapus!');
                window.location = '<?php echo site_url('laporan/device_ktpel'); ?>';
              },
              error: function() {
                alert('Terjadi kesalahan saat menghapus data!');
              }
            });
          }
        });

        if (document.getElementById('ktpel-Tables')) {
          const dataTableSearch = new simpleDatatables.DataTable("#ktpel-Tables", {
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