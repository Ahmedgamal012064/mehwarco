<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="عملاء المحور">
    <meta name="author" content="">

    <title>عملائنا - المحور</title>

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
        .back-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #0b4932;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #D2AA5A;
            color: #fff;
            text-decoration: none;
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
                        <a class="nav-link active" href="clients_ar.php">عملائنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#reports">التقارير</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#contact">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index_ar.php#join">انضم لنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.php">المدونة</a>
                    </li>

                    <li id="mini_nav" class="nav-item">
                        <div>
                            <div class="dropdown pull-right">
                                <a data-target="#" class="nav-link" href="clients_ar.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language" /> العربية</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="clients.php" class="nav-link">
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

    <section class="clients-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">عملائنا</h2>
                    <h3 class="section-subheading text-muted">نفتخر بالعمل مع أفضل الشركات والمؤسسات</h3>
                </div>
            </div>
            <div class="row">
                <!-- Client 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client1.png" alt="عميل 1" class="client-logo">
                        <h4 class="client-name">اسم الشركة 1</h4>
                    </div>
                </div>
                <!-- Client 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client2.png" alt="عميل 2" class="client-logo">
                        <h4 class="client-name">اسم الشركة 2</h4>
                    </div>
                </div>
                <!-- Client 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client3.png" alt="عميل 3" class="client-logo">
                        <h4 class="client-name">اسم الشركة 3</h4>
                    </div>
                </div>
                <!-- Client 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client4.png" alt="عميل 4" class="client-logo">
                        <h4 class="client-name">اسم الشركة 4</h4>
                    </div>
                </div>
                <!-- Client 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client5.png" alt="عميل 5" class="client-logo">
                        <h4 class="client-name">اسم الشركة 5</h4>
                    </div>
                </div>
                <!-- Client 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client6.png" alt="عميل 6" class="client-logo">
                        <h4 class="client-name">اسم الشركة 6</h4>
                    </div>
                </div>
                <!-- Client 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client7.png" alt="عميل 7" class="client-logo">
                        <h4 class="client-name">اسم الشركة 7</h4>
                    </div>
                </div>
                <!-- Client 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="client-card">
                        <img src="assets/dist/images/clients/client8.png" alt="عميل 8" class="client-logo">
                        <h4 class="client-name">اسم الشركة 8</h4>
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
