<!doctype html>
<html lang="en">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AnxietyCare | Mental Care</title>
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/asset/img/favicons/logo1.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/asset/img/favicons/logo1.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/asset/img/favicons/logo1.png">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" style="background-image: url(<?= base_url() ?>assets/asset/img/gallery/hero-bg.png);">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-4">
                        <div class="card mb-0">
                            <div class="card-body text-center">
                                <h2 class="text-center text-primary">Login Admin</h2><br>
                                <?php $this->load->view('admin/partials/alert'); ?>
                                <form action="<?= site_url('login/check'); ?>" method="post">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" required>
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Sign In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Back to Dashboard?</p>
                                        <a class="text-primary fw-bold ms-2" href="<?= site_url('welcome'); ?>">Dashboard</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/dashboard/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>