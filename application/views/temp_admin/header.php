<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Aplikasi Kontrakan</title>
    <!-- chartist CSS -->

    <link href="<?php echo base_url('./assets/assets/extra-libs/prism/prism.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('./assets/dist/css/pages/form-page.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('./assets/dist/css/pages/data-table.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('./assets/assets/libs/chartist/dist/chartist.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('./assets/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') ?>" rel="stylesheet">
    <link href=" <?php echo base_url('./assets/dist/css/style.css') ?>" rel="stylesheet">
    <!-- This page CSS -->
    <link href=" <?php echo base_url('./assets/dist/css/pages/dashboard1.css') ?>" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
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
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="<?php echo base_url('assets/assets/images/logo-light-icon.png') ?>">
                            <img class="dark-logo" src="<?php echo base_url('assets/assets/images/logo-icon.png') ?>">
                        </span>
                        <span class="text">
                            <img class="light-logo" src="<?php echo base_url('assets/assets/images/logo-light-text.png') ?>">
                            <img class="dark-logo" src="<?php echo base_url('assets/assets/images/logo-text.png') ?>">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Notification icon scss in header.scss -->
                        <!-- ============================================================== -->
                      <!--   <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="noti_dropdown"><i class="material-icons">notifications</i></a>
                      -->
                      <ul id="noti_dropdown" class="mailbox dropdown-content">

                        <li>
                            <div class="drop-title">Notifications</div>
                        </li>

                        <li>
                            <div class="message-center">
                                <!-- Message -->
                                <a href="#">
                                    <span class="btn-floating btn-large red"><i class="material-icons">link</i></span>
                                    <span class="mail-contnet">
                                        <h5>Launch Admin</h5>
                                        <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                    </span>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <span class="btn-floating btn-large blue"><i class="material-icons">date_range</i></span>
                                    <span class="mail-contnet">
                                        <h5>Event today</h5>
                                        <span class="mail-desc">Just a reminder that you have event</span>
                                        <span class="time">9:10 AM</span>
                                    </span>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <span class="btn-floating btn-large cyan"><i class="material-icons">settings</i></span>
                                    <span class="mail-contnet">
                                        <h5>Settings</h5>
                                        <span class="mail-desc">You can customize this template as you want</span>
                                        <span class="time">9:08 AM</span>
                                    </span>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <span class="btn-floating btn-large green"><i class="material-icons">face</i></span>
                                    <span class="mail-contnet">
                                        <h5>Lily Jordan</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="center-align" href="javascript:void(0);"> <strong>Check all notifications</strong> </a>
                        </li>
                    </ul>
                </li>
                <!-- ============================================================== -->
                <!-- Comment topbar icon scss in header.scss -->
                <!-- ============================================================== -->


            </ul>
            <!-- ============================================================== -->
            <!-- Left topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
            <ul class="right">

                <!-- ============================================================== -->
                <!-- Profile icon scss in header.scss -->
                <!-- ============================================================== -->
                <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="<?php echo base_url('assets/assets/images/users/2.jpg') ?>" alt="user" class="circle profile-pic"></a>
                    <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="<?php echo base_url('assets/assets/images/users/2.jpg') ?>" alt="user"></div>
                                <div class="u-text">
                                    <h4>Steve Harvey</h4>
                                    <p>steve@gmail.com</p>
                                    <a class="waves-effect waves-light btn-small red white-text">View Profile</a>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                        <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
                        <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right topbar icon scss in header.scss -->
            <!-- ============================================================== -->
        </div>
    </nav>
    <!-- ============================================================== -->
    <!-- Navbar scss in header.scss -->
    <!-- ============================================================== -->
</header>
        <!-- ============================================================== -->