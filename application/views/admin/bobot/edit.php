<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data bobot Edit</h5>
                    </div>
                </div>
                <div class="notification-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="alert alert-block alert-warning">
                                    <strong>
                                        <i class="ti ti-alert-triangle"></i> KETERANGAN<br>
                                    </strong>Silahkan pilih gejala yang sesuai dengan penyakit yang ada, dan berikan Nilai Kepastian atau MB (Measure of Increased Belief) dan Nilai Ketidakpastian atau MD (Measure of Increased Disbelief) dengan cakupan sebagai berikut:<br>1.0 (Pasti Ya) <br>0.8 (Hampir Pasti) <br>0.6 (Kemungkinan Besar)<br> 0.4 (Mungkin) <br>0.2 (Hampir Mungkin) <br>0.0 (Tidak Tahu atau Tidak Yakin) <b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="<?= site_url('bobot/ubah/' . $data->id_rules); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Penyakit</label>
                                <input type="hidden" name="level_id" value="<?= $_SESSION['level_id']; ?>">
                                <select class="form-select" id="exampleInputEmail1" name="kd_penyakit">
                                    <option value="">Pilih Penyakit...</option>
                                    <?php foreach ($penyakit as $item) : ?>
                                        <option value="<?= $item->kd_penyakit ?>" <?= ($item->kd_penyakit == $data->kd_penyakit) ? 'selected' : ''; ?>><?= $item->nama_penyakit ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kd_penyakit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Gejala</label>
                                <select class="form-select" id="exampleInputEmail1" name="kd_gejala">
                                    <option value="">Pilih Gejala...</option>
                                    <?php foreach ($gejala as $gj) : ?>
                                        <option value="<?= $gj->kd_gejala ?>" <?= ($gj->kd_gejala == $data->kd_gejala) ? 'selected' : ''; ?>><?= $gj->nama_gejala ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kd_gejala') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nilai_MB</label>
                                <select class="form-select" id="exampleInputEmail1" name="nilai_mb">
                                    <option disabled selected value> --- Tentukan Nilai --- </option>
                                    <option value="1.0" <?= ("1.0" == $data->nilai_mb) ? 'selected' : ''; ?>>1.0 - Pasti Ya</option>
                                    <option value="0.8" <?= ("0.8" == $data->nilai_mb) ? 'selected' : ''; ?>>0.8 - Hampir Pasti</option>
                                    <option value="0.6" <?= ("0.6" == $data->nilai_mb) ? 'selected' : ''; ?>>0.6 - Kemungkinan Besar</option>
                                    <option value="0.4" <?= ("0.4" == $data->nilai_mb) ? 'selected' : ''; ?>>0.4 - Mungkin</option>
                                    <option value="0.2" <?= ("0.2" == $data->nilai_mb) ? 'selected' : ''; ?>>0.2 - Hampir Mungkin</option>
                                    <option value="0" <?= ("0" == $data->nilai_mb) ? 'selected' : ''; ?>>0 - Tidak Tahu atau Tidak Yakin</option>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('nilai_mb') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nilai_MD</label>
                                <select class="form-select" id="exampleInputEmail1" name="nilai_md">
                                    <option disabled selected value> --- Tentukan Nilai --- </option>
                                    <option value="1.0" <?= ("1.0" == $data->nilai_md) ? 'selected' : ''; ?>>1.0 - Pasti Ya</option>
                                    <option value="0.8" <?= ("0.8" == $data->nilai_md) ? 'selected' : ''; ?>>0.8 - Hampir Pasti</option>
                                    <option value="0.6" <?= ("0.6" == $data->nilai_md) ? 'selected' : ''; ?>>0.6 - Kemungkinan Besar</option>
                                    <option value="0.4" <?= ("0.4" == $data->nilai_md) ? 'selected' : ''; ?>>0.4 - Mungkin</option>
                                    <option value="0.2" <?= ("0.2" == $data->nilai_md) ? 'selected' : ''; ?>>0.2 - Hampir Mungkin</option>
                                    <option value="0" <?= ("0" == $data->nilai_md) ? 'selected' : ''; ?>>0 - Tidak Tahu atau Tidak Yakin</option>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('nilai_md') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nilai CF Rule</label>
                                <select class="form-select" id="exampleInputEmail1" name="cf_rule">
                                    <option value="1.0" <?= ("1.0" == $data->cf_rule) ? 'selected' : ''; ?>>1.0 - Pasti Ya</option>
                                    <option value="0.8" <?= ("0.8" == $data->cf_rule) ? 'selected' : ''; ?>>0.8 - Hampir Pasti</option>
                                    <option value="0.6" <?= ("0.6" == $data->cf_rule) ? 'selected' : ''; ?>>0.6 - Kemungkinan Besar</option>
                                    <option value="0.4" <?= ("0.4" == $data->cf_rule) ? 'selected' : ''; ?>>0.4 - Mungkin</option>
                                    <option value="0.2" <?= ("0.2" == $data->cf_rule) ? 'selected' : ''; ?>>0.2 - Hampir Mungkin</option>
                                    <option value="0" <?= ("0" == $data->cf_rule) ? 'selected' : ''; ?>>0 - Tidak Tahu atau Tidak Yakin</option>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('cf_rule') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('bobot') ?>" class="btn btn-sm btn-danger m-1">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>