<?php $this->load->view('admin/partials/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data gejala Edit</h5>
                    </div>
                </div>
                <form action="<?= site_url('gejala/ubah/' . $data->kd_gejala); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kode Gejala</label>
                                <input type="text" placeholder="Kode gejala *" class="form-control" value="<?= $data->kd_gejala; ?>" name="kd_gejala" id="exampleInputEmail1" aria-describedby="emailHelp" readonly />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kode_gejala') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama gejala</label>
                                <input type="text" placeholder="Nama gejala *" class="form-control" value="<?= $data->nama_gejala; ?>" name="nama_gejala" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <input type="hidden" name="level_id" value="<?= $_SESSION['level_id']; ?>">
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('gejala') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('gejala') ?>" class="btn btn-sm btn-danger m-1">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>