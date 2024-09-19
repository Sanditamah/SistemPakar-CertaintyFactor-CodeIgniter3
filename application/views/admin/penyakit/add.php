<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Penyakit Add</h5>
                    </div>
                </div>
                <form action="<?= site_url('penyakit/insert'); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="kodepenyakit" class="form-label">Kode Penyakit</label>
                                <input type="text" placeholder="Kode Penyakit *" class="form-control" name="kd_penyakit" value="<?php $kd_penyakit = $this->m_penyakit->kd_penyakit();
                                                                                                                                echo $kd_penyakit; ?>" aria-describedby="emailHelp" readonly />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kd_penyakit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="namapenyakit" class="form-label">Nama Penyakit</label>
                                <input type="text" placeholder="Nama Penyakit *" class="form-control" name="nama_penyakit" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('nama_penyakit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="ket" class="form-label">Keterangan Penyakit</label>
                                <textarea class="form-control" name="keterangan"></textarea>
                                <input type="hidden" name="level_id" value="<?= $_SESSION['level_id']; ?>">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?php echo form_error('keterangan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Submit
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('penyakit') ?>" class="btn btn-sm btn-danger m-1">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>