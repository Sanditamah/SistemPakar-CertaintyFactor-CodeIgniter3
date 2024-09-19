<aside class="left-sidebar" style="background-image: url(<?= base_url() ?>assets/asset/img/gallery/hero-bg.png);">
    <div>
        <div class="justify-content-center navbar">
            <ul class="navbar-nav align-items-center justify-content-center">
                <h3>ANXIETYCARE</h3>
            </ul>
        </div>
        <div class="justify-content-center navbar">
            <ul class="navbar-nav align-items-center justify-content-center">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo base_url() ?>assets/dashboard/images/profile/user-1.jpg" alt="" width="50" height="50" class="rounded-circle">
                    </a>
                </li>
                <h4><?= $this->session->userdata('nama'); ?></h4>
                <p><span class="round-8 bg-success rounded-circle me-2 d-inline-block"></span> Online</p>
            </ul>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('dashboard/pakar') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Beranda</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('penyakit/pakar') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Data Penyakit</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('gejala/pakar') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Gejala</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('bobot/pakar') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-ruler-off"></i>
                        </span>
                        <span class="hide-menu">Data Bobot</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('pasien/pakar') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">Riwayat Pasien</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>