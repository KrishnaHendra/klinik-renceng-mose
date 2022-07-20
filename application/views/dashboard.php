<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Dashboard
                    </h1>
                    <div class="page-header-subtitle">Klinik Renceng Mose</div>
                </div>
                <div class="col-12 col-xl-auto mt-4">
                    <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
                        <i class="mr-2 text-primary" data-feather="calendar"></i>
                        <span></span>
                        <i class="ml-1" data-feather="chevron-down"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    <!-- Example Colored Cards for Dashboard Demo-->
    <div class="row">
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Jumlah Pasien</div>
                            <div class="text-lg font-weight-bold">20
                            </div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="person"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Report</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Earnings (Annual)</div>
                            <div class="text-lg font-weight-bold">$215,000</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Report</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Task Completion</div>
                            <div class="text-lg font-weight-bold">24</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="check-square"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Tasks</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Pending Requests</div>
                            <div class="text-lg font-weight-bold">17</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Requests</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">Personnel Management</div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Tanggal Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>2440200684</td>
                            <td>Doni Simanjuntak</td>
                            <td>30</td>
                            <td>2011/04/25</td>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter">Hapus</button>
                                <button class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detail</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="data-pasien.html">Data Pasien</a>
                                    <a class="dropdown-item" href="pemeriksaan-kesehatan.html">Pemeriksaan Kesehatan</a>
                                    <a class="dropdown-item" href="perkembangan-kondisi.html">Perkembangan Kondisi
                                        Kesehatan</a>
                                    <a class="dropdown-item" href="pemeriksaan-dokter.html">Pemeriksaan
                                        Oleh Doctor</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2440200684</td>
                            <td>Doni Simanjuntak</td>
                            <td>30</td>
                            <td>2011/04/25</td>
                            <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter">Hapus</button>
                                <button class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detail</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0);">Data Pasien</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan
                                        Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Perkembangan
                                        Kondisi Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan Oleh
                                        Doctor</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2440200684</td>
                            <td>Doni Simanjuntak</td>
                            <td>30</td>
                            <td>2011/04/25</td>
                            <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter">Hapus</button>
                                <button class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detail</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0);">Data Pasien</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan
                                        Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Perkembangan
                                        Kondisi Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan Oleh
                                        Doctor</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2440200684</td>
                            <td>Doni Simanjuntak</td>
                            <td>30</td>
                            <td>2011/04/25</td>
                            <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#exampleModalCenter">Hapus</button>
                                <button class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Detail</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0);">Data Pasien</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan
                                        Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Perkembangan
                                        Kondisi Kesehatan</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Pemeriksaan Oleh
                                        Doctor</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>