<?php $this->load->view('pakar/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-4">
        <div class="card overflow-hidden" style="background-color: #B2DDED;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3><?= count($penyakit->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center"><a style="color: black;" href="<?= site_url('penyakit/pakar') ?>">Data Penyakit</a></h5>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card overflow-hidden" style="background-color: #B2DDED;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3><?= count($gejala->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center"><a style="color: black;" href="<?= site_url('gejala/pakar') ?>">Data Gejala</a></h5>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card overflow-hidden" style="background-color: #B2DDED;">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3><?= count($bobot->result()); ?></h3>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-9 fw-semibold text-center"><a style="color: black;" href="<?= site_url('bobot/pakar') ?>">Data Bobot</a></h5>
        </div>
    </div>
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body text-center">
                <h2>Selamat datang di Sistem Pakar Diagnosa<br>Penyakit Anxiety dengan Metode Certainty Factor</h2>
            </div>
        </div>
    </div>
</div>