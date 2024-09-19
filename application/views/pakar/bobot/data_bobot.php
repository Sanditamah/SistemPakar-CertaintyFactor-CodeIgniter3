<?php $this->load->view('pakar/partials/alert'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9 alert">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data bobot</h5>
                    </div>
                    <div>
                        <a href="<?= site_url('bobot/pakar/insert'); ?>" class="btn btn-sm btn-warning m-1"><i class="ti ti-circle-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th>Nila_MB</th>
                                <th>Nilai_MD</th>
                                <th>CF Rule</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($data)) : ?>
                            <?php else : ?>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->nama_penyakit ?></td>
                                        <td><?= $item->nama_gejala ?></td>
                                        <td><?= $item->nilai_mb ?></td>
                                        <td><?= $item->nilai_md ?></td>
                                        <td><?= $item->cf_rule ?></td>
                                        <td>
                                            <center>
                                                <a href="<?= site_url('bobot/pakar/ubah/' . $item->id_rules) ?>" class="btn btn-sm btn-info" title="Edit"><i class="ti ti-edit"></i></a>
                                                <a href="<?= site_url('bobot/pakar/delete/' . $item->id_rules) ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?');" class="btn btn-sm btn-danger" title="Delete"><i class="ti ti-trash"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>