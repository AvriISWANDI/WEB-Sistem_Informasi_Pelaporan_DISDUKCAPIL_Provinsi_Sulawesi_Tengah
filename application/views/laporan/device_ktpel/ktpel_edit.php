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
            <h2>Edit Device KTP-eL</h2>
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
              <div class="col-md-3">
                <div class="form-group">
                  <label for="monitor_baik" class="form-control-label">MONITOR BAIK</label>
                  <input class="form-control" type="text" name="monitor_baik" value="<?= $this->input->post('monitor_baik') ?? $row->monitor_baik ?>">
                  <?= form_error('monitor_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="monitor_kurang" class="form-control-label">MONITOR KURANG</label>
                  <input class="form-control" type="text" name="monitor_kurang" value="<?= $this->input->post('monitor_kurang') ?? $row->monitor_kurang ?>">
                  <?= form_error('monitor_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="monitor_rusak" class="form-control-label">MONITOR RUSAK</label>
                  <input class="form-control" type="text" name="monitor_rusak" value="<?= $this->input->post('monitor_rusak') ?? $row->monitor_rusak ?>">
                  <?= form_error('monitor_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="monitor_hilang" class="form-control-label">MONITOR HILANG</label>
                  <input class="form-control" type="text" name="monitor_hilang" value="<?= $this->input->post('monitor_hilang') ?? $row->monitor_hilang ?>">
                  <?= form_error('monitor_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="serveravis_baik" class="form-control-label">SERVER AVIS BAIK</label>
                  <input class="form-control" type="text" name="serveravis_baik" value="<?= $this->input->post('serveravis_baik') ?? $row->serveravis_baik ?>">
                  <?= form_error('serveravis_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="serveravis_kurang" class="form-control-label">SERVER AVIS KURANG</label>
                  <input class="form-control" type="text" name="serveravis_kurang" value="<?= $this->input->post('serveravis_kurang') ?? $row->serveravis_kurang ?>">
                  <?= form_error('serveravis_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="serveravis_rusak" class="form-control-label">SERVER AVIS RUSAK</label>
                  <input class="form-control" type="text" name="serveravis_rusak" value="<?= $this->input->post('serveravis_rusak') ?? $row->serveravis_rusak ?>">
                  <?= form_error('serveravis_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="serveravis_hilang" class="form-control-label">SERVER AVIS HILANG</label>
                  <input class="form-control" type="text" name="serveravis_hilang" value="<?= $this->input->post('serveravis_hilang') ?? $row->serveravis_hilang ?>">
                  <?= form_error('serveravis_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="desktoppc_baik" class="form-control-label">DESKTOP PC BAIK</label>
                  <input class="form-control" type="text" name="desktoppc_baik" value="<?= $this->input->post('desktoppc_baik') ?? $row->desktoppc_baik ?>">
                  <?= form_error('desktoppc_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="desktoppc_kurang" class="form-control-label">DESKTOP PC KURANG</label>
                  <input class="form-control" type="text" name="desktoppc_kurang" value="<?= $this->input->post('desktoppc_kurang') ?? $row->desktoppc_kurang ?>">
                  <?= form_error('desktoppc_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="desktoppc_rusak" class="form-control-label">DESKTOP PC RUSAK</label>
                  <input class="form-control" type="text" name="desktoppc_rusak" value="<?= $this->input->post('desktoppc_rusak') ?? $row->desktoppc_rusak ?>">
                  <?= form_error('desktoppc_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="desktoppc_hilang" class="form-control-label">DESKTOP PC HILANG</label>
                  <input class="form-control" type="text" name="desktoppc_hilang" value="<?= $this->input->post('desktoppc_hilang') ?? $row->desktoppc_hilang ?>">
                  <?= form_error('desktoppc_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="ups_baik" class="form-control-label">UPS 750VA/ 1000 VA BAIK</label>
                  <input class="form-control" type="text" name="ups_baik" value="<?= $this->input->post('ups_baik') ?? $row->ups_baik ?>">
                  <?= form_error('ups_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="ups_kurang" class="form-control-label">UPS 750VA/ 1000 VA KURANG</label>
                  <input class="form-control" type="text" name="ups_kurang" value="<?= $this->input->post('ups_kurang') ?? $row->ups_kurang ?>">
                  <?= form_error('ups_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="ups_rusak" class="form-control-label">UPS 750VA/ 1000 VA RUSAK</label>
                  <input class="form-control" type="text" name="ups_rusak" value="<?= $this->input->post('ups_rusak') ?? $row->ups_rusak ?>">
                  <?= form_error('ups_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="ups_hilang" class="form-control-label">UPS 750VA/ 1000 VA HILANG</label>
                  <input class="form-control" type="text" name="ups_hilang" value="<?= $this->input->post('ups_hilang') ?? $row->ups_hilang ?>">
                  <?= form_error('ups_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="fp_baik" class="form-control-label">FINGERPRINT SCANNER BAIK</label>
                  <input class="form-control" type="text" name="fp_baik" value="<?= $this->input->post('fp_baik') ?? $row->fp_baik ?>">
                  <?= form_error('fp_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="fp_kurang" class="form-control-label">FINGERPRINT SCANNER KURANG</label>
                  <input class="form-control" type="text" name="fp_kurang" value="<?= $this->input->post('fp_kurang') ?? $row->fp_kurang ?>">
                  <?= form_error('fp_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="fp_rusak" class="form-control-label">FINGERPRINT SCANNER RUSAK</label>
                  <input class="form-control" type="text" name="fp_rusak" value="<?= $this->input->post('fp_rusak') ?? $row->fp_rusak ?>">
                  <?= form_error('fp_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="fp_hilang" class="form-control-label">FINGERPRINT SCANNER HILANG</label>
                  <input class="form-control" type="text" name="fp_hilang" value="<?= $this->input->post('fp_hilang') ?? $row->fp_hilang ?>">
                  <?= form_error('fp_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="scr_baik" class="form-control-label">SMART CARD READER BAIK</label>
                  <input class="form-control" type="text" name="scr_baik" value="<?= $this->input->post('scr_baik') ?? $row->scr_baik ?>">
                  <?= form_error('scr_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="scr_kurang" class="form-control-label">SMART CARD READER KURANG</label>
                  <input class="form-control" type="text" name="scr_kurang" value="<?= $this->input->post('scr_kurang') ?? $row->scr_kurang ?>">
                  <?= form_error('scr_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="scr_rusak" class="form-control-label">SMART CARD READER RUSAK</label>
                  <input class="form-control" type="text" name="scr_rusak" value="<?= $this->input->post('scr_rusak') ?? $row->scr_rusak ?>">
                  <?= form_error('scr_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="scr_hilang" class="form-control-label">SMART CARD READER HILANG</label>
                  <input class="form-control" type="text" name="scr_hilang" value="<?= $this->input->post('scr_hilang') ?? $row->scr_hilang ?>">
                  <?= form_error('scr_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sp_baik" class="form-control-label">SIGNATURE PAD BAIK</label>
                  <input class="form-control" type="text" name="sp_baik" value="<?= $this->input->post('sp_baik') ?? $row->sp_baik ?>">
                  <?= form_error('sp_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sp_kurang" class="form-control-label">SIGNATURE PAD KURANG</label>
                  <input class="form-control" type="text" name="sp_kurang" value="<?= $this->input->post('sp_kurang') ?? $row->sp_kurang ?>">
                  <?= form_error('sp_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sp_rusak" class="form-control-label">SIGNATURE PAD RUSAK</label>
                  <input class="form-control" type="text" name="sp_rusak" value="<?= $this->input->post('sp_rusak') ?? $row->sp_rusak ?>">
                  <?= form_error('sp_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sp_hilang" class="form-control-label">SIGNATURE PAD HILANG</label>
                  <input class="form-control" type="text" name="sp_hilang" value="<?= $this->input->post('sp_hilang') ?? $row->sp_hilang ?>">
                  <?= form_error('sp_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="kameradigital_baik" class="form-control-label">KAMERA DIGITAL BAIK</label>
                  <input class="form-control" type="text" name="kameradigital_baik" value="<?= $this->input->post('kameradigital_baik') ?? $row->kameradigital_baik ?>">
                  <?= form_error('kameradigital_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="kameradigital_kurang" class="form-control-label">KAMERA DIGITAL KURANG</label>
                  <input class="form-control" type="text" name="kameradigital_kurang" value="<?= $this->input->post('kameradigital_kurang') ?? $row->kameradigital_kurang ?>">
                  <?= form_error('kameradigital_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="kameradigital_rusak" class="form-control-label">KAMERA DIGITAL RUSAK</label>
                  <input class="form-control" type="text" name="kameradigital_rusak" value="<?= $this->input->post('kameradigital_rusak') ?? $row->kameradigital_rusak ?>">
                  <?= form_error('kameradigital_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="kameradigital_hilang" class="form-control-label">KAMERA DIGITAL HILANG</label>
                  <input class="form-control" type="text" name="kameradigital_hilang" value="<?= $this->input->post('kameradigital_hilang') ?? $row->kameradigital_hilang ?>">
                  <?= form_error('kameradigital_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="irisscanner_baik" class="form-control-label">IRIS SCANNER BAIK</label>
                  <input class="form-control" type="text" name="irisscanner_baik" value="<?= $this->input->post('irisscanner_baik') ?? $row->irisscanner_baik ?>">
                  <?= form_error('irisscanner_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="irisscanner_kurang" class="form-control-label">IRIS SCANNER KURANG</label>
                  <input class="form-control" type="text" name="irisscanner_kurang" value="<?= $this->input->post('irisscanner_kurang') ?? $row->irisscanner_kurang ?>">
                  <?= form_error('irisscanner_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="irisscanner_rusak" class="form-control-label">IRIS SCANNER RUSAK</label>
                  <input class="form-control" type="text" name="irisscanner_rusak" value="<?= $this->input->post('irisscanner_rusak') ?? $row->irisscanner_rusak ?>">
                  <?= form_error('irisscanner_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="irisscanner_hilang" class="form-control-label">IRIS SCANNER HILANG</label>
                  <input class="form-control" type="text" name="irisscanner_hilang" value="<?= $this->input->post('irisscanner_hilang') ?? $row->irisscanner_hilang ?>">
                  <?= form_error('irisscanner_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_baik" class="form-control-label">TRIPOD BAIK</label>
                  <input class="form-control" type="text" name="tripod_baik" value="<?= $this->input->post('tripod_baik') ?? $row->tripod_baik ?>">
                  <?= form_error('tripod_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_kurang" class="form-control-label">TRIPOD KURANG</label>
                  <input class="form-control" type="text" name="tripod_kurang" value="<?= $this->input->post('tripod_kurang') ?? $row->tripod_kurang ?>">
                  <?= form_error('tripod_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_rusak" class="form-control-label">TRIPOD RUSAK</label>
                  <input class="form-control" type="text" name="tripod_rusak" value="<?= $this->input->post('tripod_rusak') ?? $row->tripod_rusak ?>">
                  <?= form_error('tripod_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_hilang" class="form-control-label">TRIPOD HILANG</label>
                  <input class="form-control" type="text" name="tripod_hilang" value="<?= $this->input->post('tripod_hilang') ?? $row->tripod_hilang ?>">
                  <?= form_error('tripod_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sc_baik" class="form-control-label">SWITCH & CABLING BAIK</label>
                  <input class="form-control" type="text" name="sc_baik" value="<?= $this->input->post('sc_baik') ?? $row->sc_baik ?>">
                  <?= form_error('sc_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sc_kurang" class="form-control-label">SWITCH & CABLING KURANG</label>
                  <input class="form-control" type="text" name="sc_kurang" value="<?= $this->input->post('sc_kurang') ?? $row->sc_kurang ?>">
                  <?= form_error('sc_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sc_rusak" class="form-control-label">SWITCH & CABLING RUSAK</label>
                  <input class="form-control" type="text" name="sc_rusak" value="<?= $this->input->post('sc_rusak') ?? $row->sc_rusak ?>">
                  <?= form_error('sc_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sc_hilang" class="form-control-label">SWITCH & CABLING HILANG</label>
                  <input class="form-control" type="text" name="sc_hilang" value="<?= $this->input->post('sc_hilang') ?? $row->sc_hilang ?>">
                  <?= form_error('sc_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardext_baik" class="form-control-label">HARDISK EXTERNAL BAIK</label>
                  <input class="form-control" type="text" name="hardext_baik" value="<?= $this->input->post('hardext_baik') ?? $row->hardext_baik ?>">
                  <?= form_error('hardext_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardext_kurang" class="form-control-label">HARDISK EXTERNAL KURANG</label>
                  <input class="form-control" type="text" name="hardext_kurang" value="<?= $this->input->post('hardext_kurang') ?? $row->hardext_kurang ?>">
                  <?= form_error('hardext_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardext_rusak" class="form-control-label">HARDISK EXTERNAL RUSAK</label>
                  <input class="form-control" type="text" name="hardext_rusak" value="<?= $this->input->post('hardext_rusak') ?? $row->hardext_rusak ?>">
                  <?= form_error('hardext_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardext_hilang" class="form-control-label">HARDISK EXTERNAL HILANG</label>
                  <input class="form-control" type="text" name="hardext_hilang" value="<?= $this->input->post('hardext_hilang') ?? $row->hardext_hilang ?>">
                  <?= form_error('hardext_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="digitalscanner_baik" class="form-control-label">DIGITAL SCANNER BAIK</label>
                  <input class="form-control" type="text" name="digitalscanner_baik" value="<?= $this->input->post('digitalscanner_baik') ?? $row->digitalscanner_baik ?>">
                  <?= form_error('digitalscanner_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="digitalscanner_kurang" class="form-control-label">DIGITAL SCANNER KURANG</label>
                  <input class="form-control" type="text" name="digitalscanner_kurang" value="<?= $this->input->post('digitalscanner_kurang') ?? $row->digitalscanner_kurang ?>">
                  <?= form_error('digitalscanner_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="digitalscanner_rusak" class="form-control-label">DIGITAL SCANNER RUSAK</label>
                  <input class="form-control" type="text" name="digitalscanner_rusak" value="<?= $this->input->post('digitalscanner_rusak') ?? $row->digitalscanner_rusak ?>">
                  <?= form_error('digitalscanner_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="digitalscanner_hilang" class="form-control-label">DIGITAL SCANNER HILANG</label>
                  <input class="form-control" type="text" name="digitalscanner_hilang" value="<?= $this->input->post('digitalscanner_hilang') ?? $row->digitalscanner_hilang ?>">
                  <?= form_error('digitalscanner_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="keyboard_baik" class="form-control-label">KEYBOARD BAIK</label>
                  <input class="form-control" type="text" name="keyboard_baik" value="<?= $this->input->post('keyboard_baik') ?? $row->keyboard_baik ?>">
                  <?= form_error('keyboard_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="keyboard_kurang" class="form-control-label">KEYBOARD KURANG</label>
                  <input class="form-control" type="text" name="keyboard_kurang" value="<?= $this->input->post('keyboard_kurang') ?? $row->keyboard_kurang ?>">
                  <?= form_error('keyboard_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="keyboard_rusak" class="form-control-label">KEYBOARD RUSAK</label>
                  <input class="form-control" type="text" name="keyboard_rusak" value="<?= $this->input->post('keyboard_rusak') ?? $row->keyboard_rusak ?>">
                  <?= form_error('keyboard_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="keyboard_hilang" class="form-control-label">KEYBOARD HILANG</label>
                  <input class="form-control" type="text" name="keyboard_hilang" value="<?= $this->input->post('keyboard_hilang') ?? $row->keyboard_hilang ?>">
                  <?= form_error('keyboard_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jarkomdat_baik" class="form-control-label">JARKOMDAT BAIK</label>
                  <input class="form-control" type="text" name="jarkomdat_baik" value="<?= $this->input->post('jarkomdat_baik') ?? $row->jarkomdat_baik ?>">
                  <?= form_error('jarkomdat_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jarkomdat_kurang" class="form-control-label">JARKOMDAT KURANG</label>
                  <input class="form-control" type="text" name="jarkomdat_kurang" value="<?= $this->input->post('jarkomdat_kurang') ?? $row->jarkomdat_kurang ?>">
                  <?= form_error('jarkomdat_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jarkomdat_rusak" class="form-control-label">JARKOMDAT RUSAK</label>
                  <input class="form-control" type="text" name="jarkomdat_rusak" value="<?= $this->input->post('jarkomdat_rusak') ?? $row->jarkomdat_rusak ?>">
                  <?= form_error('jarkomdat_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jarkomdat_hilang" class="form-control-label">JARKOMDAT HILANG</label>
                  <input class="form-control" type="text" name="jarkomdat_hilang" value="<?= $this->input->post('jarkomdat_hilang') ?? $row->jarkomdat_hilang ?>">
                  <?= form_error('jarkomdat_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="adaptorcam_baik" class="form-control-label">ADAPTOR CAMERA BAIK</label>
                  <input class="form-control" type="text" name="adaptorcam_baik" value="<?= $this->input->post('adaptorcam_baik') ?? $row->adaptorcam_baik ?>">
                  <?= form_error('adaptorcam_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="adaptorcam_kurang" class="form-control-label">CPU CLIENT KURANG</label>
                  <input class="form-control" type="text" name="adaptorcam_kurang" value="<?= $this->input->post('adaptorcam_kurang') ?? $row->adaptorcam_kurang ?>">
                  <?= form_error('adaptorcam_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="adaptorcam_rusak" class="form-control-label">CPU CLIENT RUSAK</label>
                  <input class="form-control" type="text" name="adaptorcam_rusak" value="<?= $this->input->post('adaptorcam_rusak') ?? $row->adaptorcam_rusak ?>">
                  <?= form_error('adaptorcam_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="adaptorcam_hilang" class="form-control-label">CPU CLIENT HILANG</label>
                  <input class="form-control" type="text" name="adaptorcam_hilang" value="<?= $this->input->post('adaptorcam_hilang') ?? $row->adaptorcam_hilang ?>">
                  <?= form_error('adaptorcam_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuclient_baik" class="form-control-label">CPU CLIENT BAIK</label>
                  <input class="form-control" type="text" name="cpuclient_baik" value="<?= $this->input->post('cpuclient_baik') ?? $row->cpuclient_baik ?>">
                  <?= form_error('cpuclient_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuclient_kurang" class="form-control-label">CPU CLIENT KURANG</label>
                  <input class="form-control" type="text" name="cpuclient_kurang" value="<?= $this->input->post('cpuclient_kurang') ?? $row->cpuclient_kurang ?>">
                  <?= form_error('cpuclient_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuclient_rusak" class="form-control-label">CPU CLIENT RUSAK</label>
                  <input class="form-control" type="text" name="cpuclient_rusak" value="<?= $this->input->post('cpuclient_rusak') ?? $row->cpuclient_rusak ?>">
                  <?= form_error('cpuclient_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuclient_hilang" class="form-control-label">CPU CLIENT HILANG</label>
                  <input class="form-control" type="text" name="cpuclient_hilang" value="<?= $this->input->post('cpuclient_hilang') ?? $row->cpuclient_hilang ?>">
                  <?= form_error('cpuclient_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_baik" class="form-control-label">CPU SERVER BAIK</label>
                  <input class="form-control" type="text" name="tripod_baik" value="<?= $this->input->post('tripod_baik') ?? $row->tripod_baik ?>">
                  <?= form_error('tripod_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="tripod_kurang" class="form-control-label">CPU SERVER KURANG</label>
                  <input class="form-control" type="text" name="tripod_kurang" value="<?= $this->input->post('tripod_kurang') ?? $row->tripod_kurang ?>">
                  <?= form_error('tripod_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuserver_rusak" class="form-control-label">CPU SERVER RUSAK</label>
                  <input class="form-control" type="text" name="cpuserver_rusak" value="<?= $this->input->post('cpuserver_rusak') ?? $row->cpuserver_rusak ?>">
                  <?= form_error('cpuserver_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cpuserver_hilang" class="form-control-label">TRIPOD HILANG</label>
                  <input class="form-control" type="text" name="cpuserver_hilang" value="<?= $this->input->post('cpuserver_hilang') ?? $row->cpuserver_hilang ?>">
                  <?= form_error('cpuserver_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="antenam2m_baik" class="form-control-label">ANTENA M2M BAIK</label>
                  <input class="form-control" type="text" name="antenam2m_baik" value="<?= $this->input->post('antenam2m_baik') ?? $row->antenam2m_baik ?>">
                  <?= form_error('antenam2m_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="antenam2m_kurang" class="form-control-label">ANTENA M2M KURANG</label>
                  <input class="form-control" type="text" name="antenam2m_kurang" value="<?= $this->input->post('antenam2m_kurang') ?? $row->antenam2m_kurang ?>">
                  <?= form_error('antenam2m_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="antenam2m_rusak" class="form-control-label">ANTENA M2M RUSAK</label>
                  <input class="form-control" type="text" name="antenam2m_rusak" value="<?= $this->input->post('antenam2m_rusak') ?? $row->antenam2m_rusak ?>">
                  <?= form_error('antenam2m_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="antenam2m_hilang" class="form-control-label">ANTENA M2M HILANG</label>
                  <input class="form-control" type="text" name="antenam2m_hilang" value="<?= $this->input->post('antenam2m_hilang') ?? $row->antenam2m_hilang ?>">
                  <?= form_error('antenam2m_hilang') ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardint_baik" class="form-control-label">HARDISK INTERNAL BAIK</label>
                  <input class="form-control" type="text" name="hardint_baik" value="<?= $this->input->post('hardint_baik') ?? $row->hardint_baik ?>">
                  <?= form_error('hardint_baik') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardint_kurang" class="form-control-label">HARDISK INTERNAL KURANG</label>
                  <input class="form-control" type="text" name="hardint_kurang" value="<?= $this->input->post('hardint_kurang') ?? $row->hardint_kurang ?>">
                  <?= form_error('hardint_kurang') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardint_rusak" class="form-control-label">HARDISK INTERNAL RUSAK</label>
                  <input class="form-control" type="text" name="hardint_rusak" value="<?= $this->input->post('hardint_rusak') ?? $row->hardint_rusak ?>">
                  <?= form_error('hardint_rusak') ?>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="hardint_hilang" class="form-control-label">HARDISK INTERNAL HILANG</label>
                  <input class="form-control" type="text" name="hardint_hilang" value="<?= $this->input->post('hardint_hilang') ?? $row->hardint_hilang ?>">
                  <?= form_error('hardint_hilang') ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="keterangan" class="form-control-label">KETERANGAN</label>
              <input class="form-control" placeholder="Keterangan" type="text" name="keterangan" value="<?= $this->input->post('keterangan') ?? $row->keterangan ?>">
              <?= form_error('keterangan') ?>
            </div>
            <button class="btn btn-outline-primary btn-sm mb-0" type="reset">Reset</button>
            <button class="btn bg-gradient-primary btn-sm mb-0" type="submit">Submit</button>
          </form>
        </div>
      </div>