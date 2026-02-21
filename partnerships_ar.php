<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="شراكات المحور">
    <meta name="author" content="">

    <title>الشراكات - المحور</title>

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
        .partnerships-section {
            padding: 100px 0 60px 0;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .partner-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .partner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .partner-logo {
            width: 100%;
            max-width: 180px;
            height: 120px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        .partner-name {
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
            <a class="navbar-brand" href="index_ar.php"><img src="assets/dist/images/logo_menu.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#who_we_are">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#what_we_do">ماذا نفعل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#services">خدمتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients_ar.php">عملائنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="partnerships_ar.php">الشراكات</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="insightsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الرؤى
                        </a>
                        <div class="dropdown-menu" aria-labelledby="insightsDropdown">
                            <a class="dropdown-item" href="blog_ar.php">المدونة</a>
                            <a class="dropdown-item" href="reports_ar.php">التقارير</a>
                            <a class="dropdown-item" href="infographics_ar.php">الانفوجرافيك</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#contact">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#join">انضم لنا</a>
                    </li>

                    <li id="mini_nav" class="nav-item">
                        <div>
                            <div class="dropdown pull-right">
                                <a data-target="#" class="nav-link" href="partnerships_ar.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language" /> العربية</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="partnerships.php" class="nav-link">
                                            <img src="https://cdn.parcellab.com/img/flags/us.png" class="flag" alt="Flag representing language"> English</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="partnerships-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">الشراكات</h2>
                    <h3 class="section-subheading text-muted">شركاؤنا في النجاح</h3>
                </div>
            </div>
            <div class="row">
                <!-- Partner 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner1.png" alt="شريك 1" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 1</h4>
                    </div>
                </div>
                <!-- Partner 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner2.png" alt="شريك 2" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 2</h4>
                    </div>
                </div>
                <!-- Partner 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner3.png" alt="شريك 3" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 3</h4>
                    </div>
                </div>
                <!-- Partner 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner4.png" alt="شريك 4" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 4</h4>
                    </div>
                </div>
                <!-- Partner 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner5.png" alt="شريك 5" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 5</h4>
                    </div>
                </div>
                <!-- Partner 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner6.png" alt="شريك 6" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 6</h4>
                    </div>
                </div>
                <!-- Partner 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner7.png" alt="شريك 7" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 7</h4>
                    </div>
                </div>
                <!-- Partner 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <img src="assets/dist/images/partnerships/partner8.png" alt="شريك 8" class="partner-logo">
                        <h4 class="partner-name">اسم الشريك 8</h4>
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
                    <span class="copyright">حقوق النشر &copy; المحور <?php echo date('Y'); ?></span>
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
