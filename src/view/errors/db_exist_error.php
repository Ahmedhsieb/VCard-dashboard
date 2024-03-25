<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="<?= assets("admin/img/favicon.png")?>" data-template="vertical-menu-template-free"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>DB Error</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= assets("admin/img/favicon/favicon.ico")?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= assets("admin/vendor/fonts/boxicons.css")?>">

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= assets("admin/vendor/css/core.css")?>" class="template-customizer-core-css">
    <link rel="stylesheet" href="<?= assets("admin/vendor/css/theme-default.css")?>" class="template-customizer-theme-css">
    <link rel="stylesheet" href="<?= assets("admin/css/demo.css")?>">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= assets("admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css")?>">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= assets("admin/vendor/css/pages/page-misc.css")?>">
    <!-- Helpers -->
    <script src="<?= assets("admin/vendor/js/helpers.js")?>"></script><style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }
        .content-wrapper {
            padding-bottom: 0px !important;
        }</style>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= assets("admin/js/config.js")?>"></script>
</head>

<body>
<!-- Content -->

<!--Under Maintenance -->
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2"><?=$error_title?></h2>
        <p class="mb-4 mx-2"><?=$error?></p>
        <a href="<?=$_SERVER['REQUEST_SCHEME'] . '://'.host_path().'/auth/index'?>" class="btn btn-primary">Back to signup</a>
        <div class="mt-4">
            <img src="<?= assets("admin/img/illustrations/girl-doing-yoga-light.png")?>" alt="girl-doing-yoga-light" width="500" class="img-fluid" data-app-dark-img="illustrations/girl-doing-yoga-dark.png" data-app-light-img="illustrations/girl-doing-yoga-light.png">
        </div>
    </div>
</div>
<!-- /Under Maintenance -->

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= assets("admin/vendor/libs/jquery/jquery.js")?>"></script>
<script src="<?= assets("admin/vendor/libs/popper/popper.js")?>"></script>
<script src="<?= assets("admin/vendor/js/bootstrap.js")?>"></script>
<script src="<?= assets("admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")?>"></script>

<script src="<?= assets("admin/vendor/js/menu.js")?>"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="<?= assets("admin/js/main.js")?>"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>


</body></html>