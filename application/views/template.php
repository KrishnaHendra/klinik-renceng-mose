<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - SB Admin Pro</title>
    <link href="<?= base_url('assets/admin/') ?>css\styles.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/admin/') ?>assets\img\favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> 
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    <!-- <style>
        .active {
            color: white !important;
            background: blue;
            font-weight: 600;
            width: 200px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
    </style> -->
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="<?= base_url('home') ?>">Renceng Mose</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
        <form class="form-inline mr-auto d-none d-md-block">
        </form>
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-none d-md-inline font-weight-500"><?= $this->session->userdata('name') ?></div>
                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>
            </li>                        
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name"><?= $this->session->userdata('name') ?></div>
                            <div class="dropdown-user-details-email"><?= $this->session->userdata('username') ?></div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Account
                    </a>
                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <!-- <div class="sidenav-menu-heading">Core</div> -->
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            <?php $role = $this->session->userdata('role'); ?>

                            <?php if ($role == 1 || $role == 2) { ?>
                                <!-- Nav Dokter -->
                                <a class="nav-link <?php if ($konten == 'sideBar/dashboard') echo 'active'; ?>" href="<?= base_url('home') ?>">
                                    Dashboard
                                </a>
                                <a class="nav-link <?php if ($konten == 'sideBar/register_pasien') echo 'active'; ?>" href="<?= base_url('home/registerPasien') ?>">
                                    Register
                                </a>
                                <a class="nav-link <?php if ($konten == 'sideBar/inputPemeriksaanKesehatan') echo 'active'; ?>" href="<?= base_url('home/inputPemeriksaanKesehatan') ?>">
                                    Tambah Pemeriksaan Kesehatan
                                </a>
                                <a class="nav-link <?php if ($konten == 'sideBar/inputPerkembanganKondisi') echo 'active'; ?>" href="<?= base_url('home/inputPerkembanganKondisi') ?>">
                                    Tambah Perkembangan Kondisi kesehatan
                                </a>
                                <a class="nav-link <?php if ($konten == 'sideBar/inputTambahObat') echo 'active'; ?>" href="<?= base_url('home/inputTambahObat') ?>">
                                    Tambah Obat
                                </a>
                            <?php } else { ?>
                                <a class="nav-link <?php if ($konten == 'apoteker') echo 'active'; ?>" href="<?= base_url('home/apoteker') ?>">
                                    Apoteker
                                </a>
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title"><?= $this->session->userdata('name') ?></div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php $this->load->view($konten) ?>
            </main>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered Modal</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">...</div>
                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save
                                changes</button></div>
                    </div>
                </div>
            </div>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/admin/') ?>js\scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/admin/') ?>assets\demo\chart-area-demo.js"></script>
    <script src="<?= base_url('assets/admin/') ?>assets\demo\chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/admin/') ?>assets\demo\datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/admin/') ?>assets\demo\date-range-picker-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> 


</body>

</html>