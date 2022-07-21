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
        <a class="navbar-brand" href="<?= base_url('home/tampilanApoteker') ?>">Renceng Mose</a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
        <form class="form-inline mr-auto d-none d-md-block">
        </form>
        <ul class="navbar-nav align-items-center ml-auto">
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
                            <!-- Nav Dokter -->
                            <a class="nav-link <?php if ($konten == 'sideBar/dashboard') echo 'active'; ?>" href="<?= base_url('home/tampilanApoteker') ?>">
                                Dashboard
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
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        Obat Pasien
                                    </h1>
                                    <!-- <div class="page-header-subtitle">A simplified page header for use with the dashboard layout</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>



                <div class="container mt-5">
                    <div class="card">
                        <div class="card-header">Penambahan Obat</div>
                        <div class="card-body">
                            <div class="datatable">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mulai</th>
                                            <th>Berhenti</th>
                                            <th>Nama Obat</th>
                                            <th>Dosis</th>
                                            <th>Jenis</th>
                                            <th>Pagi</th>
                                            <th>Siang</th>
                                            <th>Sore</th>
                                            <th>Malam</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- <script src="<?= base_url('assets/admin/') ?>js/sb-customizer.js"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer> -->


</body>

</html>