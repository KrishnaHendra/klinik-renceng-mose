<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>404 Error - SB Admin Pro</title>
        <link href="<?= base_url('assets/admin/') ?>css\styles.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/admin/') ?>assets\img\favicon.png">
        <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-white">
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="img-fluid p-4" src="<?= base_url('assets/admin/') ?>assets\img\freepik\404-error-with-a-cute-animal-pana.svg" alt="">
                                    <p class="lead">This requested URL was not found on this server.</p>
                                    <?php if($this->session->userdata('role') == 1){ ?>
                                        <a class="text-arrow-icon" href="<?= base_url('home') ?>">
                                            <i class="ml-0 mr-1" data-feather="arrow-left"></i>
                                            Return to Dashboard
                                        </a>
                                    <?php }else if($this->session->userdata('role') == 2){ ?>
                                        <a class="text-arrow-icon" href="<?= base_url('home') ?>">
                                            <i class="ml-0 mr-1" data-feather="arrow-left"></i>
                                            Return to Dashboard
                                        </a>
                                    <?php }else{ ?>
                                        <a class="text-arrow-icon" href="<?= base_url('home/tampilanApoteker') ?>">
                                            <i class="ml-0 mr-1" data-feather="arrow-left"></i>
                                            Return to Dashboard
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/admin/') ?>js\scripts.js"></script>
    </body>
</html>
