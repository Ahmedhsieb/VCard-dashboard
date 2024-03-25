<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= assets("vcard/img/apple-icon.png")?>">
    <link rel="icon" type="image/png" href="<?= assets("vcard/img/favicon.png")?>">
    <title>
        Vcard
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet"  href="<?=assets("fontawesome-free-5.15.4-web/css/all.css")?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?= assets("vcard/css/nucleo-icons.css")?>" rel="stylesheet">
    <link href="<?= assets("vcard/css/nucleo-svg.css")?>" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= assets("vcard/css/nucleo-svg.css")?>" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= assets("vcard/css/soft-ui-dashboard.css?v=1.0.7")?>" rel="stylesheet">
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer="" data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">

<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100 ps ps--active-y">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?= assets("vcard/img/curved-images/curved0.jpg")?>'); background-position-y: 10%;">
            <span class="mask bg-gradient-primary opacity-6" style="background-image: linear-gradient(310deg, #bc8504 0%, #ea0606 100%)"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="<?= assets("user_img/{$user_data['img']}")?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            <?= $user_data['name']?>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            <?= $user_data['job_title']?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h5 class="mb-0">About</h5>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit Profile" data-bs-original-title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <p style="font-size: 1rem">
                            <?= $user_data['title']?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h5 class="mb-0">Profile Information</h5>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit Profile" data-bs-original-title="Edit Profile"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <?= $user_data['name']?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; <?= $user_data['address']?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <?= $user_data['email']?></li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Phone:</strong> &nbsp; <?= $user_data['phone']?></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card">
                    <h5 class="mb-0" style="padding: 14px;">Social Accounts</h5>
                    <div class="card-body"  style="font-size: 0.9rem;padding: 15px;">
                        <!-- Social Accounts -->
                        <?php if ($user_social_data):?>
                        <?php foreach ($user_social_data as $social):?>
                            <div class="d-flex mb-3">
                                <div class="me-3 fab fa-<?=strtolower($social['social_key'])?>">
<!--                                    <img src="--><?php //= assets("admin/img/icons/brands/".strtolower($social['social_key']).".png")?><!--" alt="facebook" class="me-3" height="30">-->
                                </div>
                                <div class="flex-grow-1 row">
                                    <div class="col-8 col-sm-7 mb-sm-0 mb-2"style="font-size: 0.8rem">
                                        <h6 style="font-size: 0.8rem" class="mb-0"><a href="<?=$social['social_value']?>" ><?=$social['social_key']?></a></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <?php endif;?>

                        <!-- /Social Accounts -->
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="ps__rail-x" style="left: 0px; bottom: -485px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 485px; height: 426px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 227px; height: 199px;"></div></div></div>

<!--   Core JS Files   -->
<script src="<?= assets("vcard/js/core/popper.min.js")?>"></script>
<script src="<?= assets("vcard/js/core/bootstrap.min.js")?>"></script>
<script src="<?= assets("vcard/js/plugins/perfect-scrollbar.min.js")?>"></script>
<script src="<?= assets("vcard/js/plugins/smooth-scrollbar.min.js")?>"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= assets("vcard/js/soft-ui-dashboard.min.js?v=1.0.7")?>"></script>


</body></html>