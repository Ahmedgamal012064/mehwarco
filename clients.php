<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Our Clients - Mehwarco">
    <meta name="author" content="">

    <title>Our Clients - Mehwarco</title>

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
        .clients-section {
            padding: 100px 0 60px 0;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .client-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .client-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .client-logo {
            width: 100%;
            max-width: 180px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        .client-name {
            font-size: 18px;
            font-weight: 600;
            color: #0b4932;
            margin: 0;
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
                        <a class="nav-link active" href="clients.php">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partnerships.php">Partnerships</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="insightsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Insights
                        </a>
                        <div class="dropdown-menu" aria-labelledby="insightsDropdown">
                            <a class="dropdown-item" href="blog.php">Blog</a>
                            <a class="dropdown-item" href="reports.php">Reports</a>
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
                                <a data-target="#" class="nav-link" href="clients.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/us.png" class="flag" alt="Flag representing language"> English</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="clients_ar.php" class="nav-link">
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

    <section class="clients-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Clients</h2>
                    <h3 class="section-subheading text-muted">We are proud to work with the best companies and institutions</h3>
                </div>
            </div>
            <div class="row">
                <!-- Client 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client1.png" alt="Client 1" class="client-logo">
                        <h4 class="client-name">Company Name 1</h4>
                    </div>
                </div>
                <!-- Client 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client2.png" alt="Client 2" class="client-logo">
                        <h4 class="client-name">Company Name 2</h4>
                    </div>
                </div>
                <!-- Client 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client3.png" alt="Client 3" class="client-logo">
                        <h4 class="client-name">Company Name 3</h4>
                    </div>
                </div>
                <!-- Client 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client4.png" alt="Client 4" class="client-logo">
                        <h4 class="client-name">Company Name 4</h4>
                    </div>
                </div>
                <!-- Client 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client5.png" alt="Client 5" class="client-logo">
                        <h4 class="client-name">Company Name 5</h4>
                    </div>
                </div>
                <!-- Client 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client6.png" alt="Client 6" class="client-logo">
                        <h4 class="client-name">Company Name 6</h4>
                    </div>
                </div>
                <!-- Client 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client7.png" alt="Client 7" class="client-logo">
                        <h4 class="client-name">Company Name 7</h4>
                    </div>
                </div>
                <!-- Client 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client8.png" alt="Client 8" class="client-logo">
                        <h4 class="client-name">Company Name 8</h4>
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
