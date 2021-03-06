<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="/assets/material_able-main/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="/assets/material_able-main/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/themify-icons/themify-icons.css">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/feather/css/feather.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/profile.scss">
    <!-- Calendar -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assetscalender/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Navbar -->
            <?= $this->include('layouts/navbar'); ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- Sidebar -->
                    <?= $this->include('layouts/sidebar'); ?>

                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10"> Hi, <?= ucfirst(user()->username); ?></h5>
                                            <p class="m-b-0">Welcome to Mastermine</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="/"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!"><?= $title ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->

                        <!-- Main Content -->
                        <div class="pcoded-inner-content">
                            <!-- baris akan diisi konten, section dalam petik di deklarasi nama content untuk dipanggil setiap fitur-->
                            <?= $this->renderSection('content'); ?>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <script type="text/javascript" src="/assets/material_able-main/assetscalender/js/jquery.min.js "></script>
    <script type="text/javascript" src="/assets/material_able-main/assetscalender/js/popper.js "></script>
    <script type="text/javascript" src="/assets/material_able-main/assetscalender/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/material_able-main/assetscalender/js/main.js"></script>
    <!-- Required Jquery -->
    <script type="text/javascript" src="/assets/material_able-main/assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="/assets/material_able-main/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="/assets/material_able-main/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="/assets/material_able-main/assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="/assets/material_able-main/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/assets/material_able-main/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/assets/material_able-main/assets/js/pcoded.min.js"></script>
    <script src="/assets/material_able-main/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="/assets/material_able-main/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="/assets/material_able-main/assets/js/script.min.js"></script>
    <script type="text/javascript" src="/assets/material_able-main/assets/js/profile.js"></script>
    <!-- JS for Textarea -->
    <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"> </script> -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"> </script>
    <!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"> </script> -->

    <script>
        $(document).ready(function() {
            $('table.example').DataTable();
        });
    </script>
</body>

</html>