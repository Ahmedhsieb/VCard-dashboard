<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= assets("auth/img/apple-icon.png")?>">
    <link rel="icon" type="image/png" href="<?= assets("auth/img/favicon.png")?>">
    <title>
        Login
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= assets("auth/css/nucleo-icons.css")?>" rel="stylesheet" />
    <link href="<?= assets("auth/css/nucleo-svg.css")?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= assets("auth/css/nucleo-svg.css")?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= assets("auth/css/soft-ui-dashboard.css?v=1.0.7")?>" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="">
            Vcard
        </a>

    </div>
</nav>
<!-- End Navbar -->
<main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?= assets("auth/img/home-bg.jpg")?>');">
            <span class="mask bg-gradient-dark opacity-6" style="background-image: linear-gradient(310deg, #bc8504 0%, #ea0606 100%)"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Login</h5>
                        </div>
                        <div class="card-body">
                            <form role="form text-left" action="postLogin" method="post">

                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Password" aria-describedby="password-addon">
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Sign in" class="btn bg-gradient-dark w-100 my-4 mb-2" style="background-image: linear-gradient(310deg, #bc8504 0%, #ea0606 100%)">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
<script src="<?= assets("auth/js/core/popper.min.js")?>"></script>
<script src="<?= assets("auth/js/core/bootstrap.min.js")?>"></script>
<script src="<?= assets("auth/js/plugins/perfect-scrollbar.min.js")?>"></script>
<script src="<?= assets("auth/js/plugins/smooth-scrollbar.min.js")?>"></script>
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
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= assets("auth/js/soft-ui-dashboard.min.js?v=1.0.7")?>"></script>
</body>

</html>