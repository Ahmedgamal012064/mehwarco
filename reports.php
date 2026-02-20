<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Reports - Mehwarco">
    <meta name="author" content="">

    <title>Reports - Mehwarco</title>

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
        .reports-section {
            padding: 100px 0 60px 0;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .report-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .report-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .report-content {
            padding: 20px;
        }
        .report-title {
            font-size: 20px;
            font-weight: 600;
            color: #0b4932;
            margin-bottom: 10px;
        }
        .report-description {
            color: #666;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .report-date {
            color: #999;
            font-size: 14px;
        }
        .btn-download {
            background-color: #0b4932;
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-download:hover {
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
                            <a class="dropdown-item active" href="reports.php">Reports</a>
                            <a class="dropdown-item" href="infographics.php">Infographics</a>
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
                                        <a id="selectable_lang" href="reports_ar.php" class="nav-link">
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

    <section class="reports-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Reports</h2>
                    <h3 class="section-subheading text-muted">Our Economic Reports and Research</h3>
                </div>
            </div>
            <div class="row">
                <!-- Report 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="report-card">
                        <img src="assets/dist/images/reports/report1.jpg" alt="Report 1" class="report-image">
                        <div class="report-content">
                            <h4 class="report-title">Report Title One</h4>
                            <p class="report-description">A brief description of the report highlighting its main content and key findings.</p>
                            <p class="report-date"><i class="far fa-calendar-alt"></i> January 2026</p>
                            <a href="#" class="btn-download"><i class="fas fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
                <!-- Report 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="report-card">
                        <img src="assets/dist/images/reports/report2.jpg" alt="Report 2" class="report-image">
                        <div class="report-content">
                            <h4 class="report-title">Report Title Two</h4>
                            <p class="report-description">A brief description of the report highlighting its main content and key findings.</p>
                            <p class="report-date"><i class="far fa-calendar-alt"></i> February 2026</p>
                            <a href="#" class="btn-download"><i class="fas fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
                <!-- Report 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="report-card">
                        <img src="assets/dist/images/reports/report3.jpg" alt="Report 3" class="report-image">
                        <div class="report-content">
                            <h4 class="report-title">Report Title Three</h4>
                            <p class="report-description">A brief description of the report highlighting its main content and key findings.</p>
                            <p class="report-date"><i class="far fa-calendar-alt"></i> March 2026</p>
                            <a href="#" class="btn-download"><i class="fas fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
