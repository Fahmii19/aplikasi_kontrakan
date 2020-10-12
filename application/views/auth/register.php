<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('./assets/assets/images/favicon.png') ?>">
    <title>Materialart Admin Template</title>
    <link href="<?php echo base_url('./assets/dist/css/style.css') ?>" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url('./assets/dist/css/pages/authentication.css') ?>" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url('./assets/assets/images/big/auth-bg.jpg') ?>) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?php echo base_url('./assets/assets/images/logo-icon.png') ?>" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Register to Admin</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <form class="col s12" method="post" action="<?php echo site_url('AuthController/add_register') ?>">
                            <!-- email -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nik" name="nik" type="text" class="validate" required>
                                    <label for="nik">NIK</label>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nama" name="nama" type="text" class="validate" required>
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" name="username" type="text" class="validate" required>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <!-- pwd -->
                           <!--  <div class="row m-t-5">
                                <div class="col s7">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Agree to all Terms</span>
                                    </label>
                                </div>
                            </div> -->
                            <!-- pwd -->
                            <div class="row m-t-40">
                                <div class="col s12">
                                    <button class="btn-large w100 red" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="center-align m-t-20 db">
                        Already have an account? <a href="<?php echo base_url('AuthController') ?>">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('./assets/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('./assets/dist/js/materialize.min.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>
</body>

</html>