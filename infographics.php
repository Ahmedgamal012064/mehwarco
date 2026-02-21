<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Infographics - Mehwarco">
    <meta name="author" content="">

    <title>Infographics - Mehwarco</title>

    <link rel="shortcut icon" href="assets/dist/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/dist/canvas/style.css">
    <link rel="stylesheet" href="assets/dist/canvas/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="assets/dist/canvas/custom.css" type="text/css" />

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/dist/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/responsive.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QK4XGKYQML"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QK4XGKYQML');
    </script>

    <style>
        .infographics-section {
            padding: 100px 0 60px 0;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .infographic-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .infographic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .infographic-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            cursor: pointer;
        }
        .infographic-content {
            padding: 20px;
            text-align: center;
        }
        .infographic-title {
            font-size: 18px;
            font-weight: 600;
            color: #0b4932;
            margin-bottom: 10px;
        }
        .infographic-date {
            color: #999;
            font-size: 14px;
        }
        .btn-view {
            background-color: #0b4932;
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 10px;
        }
        .btn-view:hover {
            background-color: #D2AA5A;
            color: #fff;
            text-decoration: none;
        }
        .section-heading {
            color: #0b4932;
            margin-bottom: 50px;
        }
        #selectable_lang {
            color: #D2AA5A !important;
        }
        #selectable_lang:hover {
            color: #0b4932 !important;
        }
        .insights-dropdown .dropdown-menu {
            min-width: 150px;
        }
        .insights-dropdown .dropdown-item {
            color: #0b4932;
            padding: 10px 20px;
        }
        .insights-dropdown .dropdown-item:hover {
            background-color: #D2AA5A;
            color: #fff;
        }
        /* Header styling for white pages */
        #mainNav {
            background-color: #0b4932 !important;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #mainNav .navbar-nav .nav-link {
            color: #fff !important;
            font-size: 14px;
        }
        #mainNav .navbar-nav .nav-link:hover {
            color: #D2AA5A !important;
        }
        #mainNav .dropdown-menu {
            background-color: #fff;
        }
        #mainNav .dropdown-item {
            color: #0b4932;
            font-size: 14px;
        }
        #mainNav .dropdown-item:hover {
            background-color: #D2AA5A;
            color: #fff;
        }
        /* Modal styles */
        .modal-infographic .modal-dialog {
            max-width: 90%;
        }
        .modal-infographic .modal-body {
            padding: 0;
        }
        .modal-infographic .modal-body img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <?php
    require('administration/includes/db_config.php');
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/dist/images/logo_menu.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#who_we_are">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#what_we_do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients.php">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partnerships.php">Partnerships</a>
                    </li>
                    <li class="nav-item dropdown insights-dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="insightsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Insights
                        </a>
                        <div class="dropdown-menu" aria-labelledby="insightsDropdown">
                            <a class="dropdown-item" href="blog.php">Blog</a>
                            <a class="dropdown-item" href="reports.php">Reports</a>
                            <a class="dropdown-item active" href="infographics.php">Infographics</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#join">Join Us</a>
                    </li>

                    <li id="mini_nav" class="nav-item">
                        <div>
                            <div class="dropdown pull-right">
                                <a data-target="#" class="nav-link" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/us.png" class="flag" alt="Flag representing language"> English</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="infographics_ar.php" class="nav-link">
                                            <img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language"/> العربية</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="infographics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Infographics</h2>
                    <h3 class="section-subheading text-muted">Visual Data Representations</h3>
                </div>
            </div>
            <div class="row">
                <!-- Infographic 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/1.jpeg" alt="Infographic 1" class="infographic-image" data-toggle="modal" data-target="#infographicModal1">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title One</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> January 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal1"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <!-- Infographic 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/2.jpeg" alt="Infographic 2" class="infographic-image" data-toggle="modal" data-target="#infographicModal2">
                        <div class="infographic-content">
                                <!-- <h4 class="infographic-title">Infographic Title Two</h4> -->
                                <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> February 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal2"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <!-- Infographic 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/3.jpeg" alt="Infographic 3" class="infographic-image" data-toggle="modal" data-target="#infographicModal3">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Three</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> March 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal3"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/4.jpeg" alt="Infographic 4" class="infographic-image" data-toggle="modal" data-target="#infographicModal4">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Four</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> April 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal4"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/5.jpeg" alt="Infographic 5" class="infographic-image" data-toggle="modal" data-target="#infographicModal5">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Five</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> May 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal5"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/6.jpeg" alt="Infographic 6" class="infographic-image" data-toggle="modal" data-target="#infographicModal6">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Six</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> June 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal6"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/7.jpeg" alt="Infographic 7" class="infographic-image" data-toggle="modal" data-target="#infographicModal7">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Seven</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> June 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal6"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                
                <!-- Infographic 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/8.jpeg" alt="Infographic 8" class="infographic-image" data-toggle="modal" data-target="#infographicModal8">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Eight</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> August 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal8"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/9.jpeg" alt="Infographic 9" class="infographic-image" data-toggle="modal" data-target="#infographicModal9">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Nine</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> September 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal9"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 10 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/10.jpeg" alt="Infographic 10" class="infographic-image" data-toggle="modal" data-target="#infographicModal10">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Ten</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> October 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal10"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 11 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/11.jpeg" alt="Infographic 11" class="infographic-image" data-toggle="modal" data-target="#infographicModal11">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">Infographic Title Eleven</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> October 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal10"><i class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals for Infographics -->
    <div class="modal fade modal-infographic" id="infographicModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title One</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/1.jpeg" alt="Infographic 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Two</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/2.jpeg" alt="Infographic 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Three</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/3.jpeg" alt="Infographic 3">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Four</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/4.jpeg" alt="Infographic 4">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal5" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Five</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/5.jpeg" alt="Infographic 5">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal6" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Six</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/6.jpeg" alt="Infographic 6">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-infographic" id="infographicModal7" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Seven</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/7.jpeg" alt="Infographic 7">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal8" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Eight</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/8.jpeg" alt="Infographic 8">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal9" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Nine</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/9.jpeg" alt="Infographic 9">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-infographic" id="infographicModal10" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Ten</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/10.jpeg" alt="Infographic 10">
                </div>
            </div>
        </div>
    </div>

        <div class="modal fade modal-infographic" id="infographicModal11" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">Infographic Title Eleven</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/11.jpeg" alt="Infographic 11">
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <span class="copyright">Copyright &copy; Mehwarco <?php echo date('Y'); ?></span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/dist/js/agency.min.js"></script>

</body>

</html>
