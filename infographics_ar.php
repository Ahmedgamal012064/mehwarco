<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="الانفوجرافيك - المحور">
    <meta name="author" content="">

    <title>الانفوجرافيك - المحور</title>

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
    <link href="https://fonts.cdnfonts.com/css/sakkal-majalla" rel="stylesheet">

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
        *, h2 {
            font-family: 'Sakkal Majalla', sans-serif;
        }
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
                        <a class="nav-link" href="partnerships_ar.php">الشراكات</a>
                    </li>
                    <li class="nav-item dropdown insights-dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="insightsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الرؤى
                        </a>
                        <div class="dropdown-menu" aria-labelledby="insightsDropdown">
                            <a class="dropdown-item" href="blog_ar.php">المدونة</a>
                            <a class="dropdown-item" href="reports_ar.php">التقارير</a>
                            <a class="dropdown-item active" href="infographics_ar.php">الانفوجرافيك</a>
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
                                <a data-target="#" class="nav-link" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language" /> العربية</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="infographics.php" class="nav-link">
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

    <section class="infographics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">الانفوجرافيك</h2>
                    <h3 class="section-subheading text-muted">رسومات بيانية توضيحية</h3>
                </div>
            </div>
            <div class="row">
                <!-- Infographic 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/1.jpeg" alt="انفوجرافيك 1" class="infographic-image" data-toggle="modal" data-target="#infographicModal1">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الأول</h4> -->
                            <!-- <p class="infographic-date"><i class="far fa-calendar-alt"></i> يناير 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal1"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>
                <!-- Infographic 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/2.jpeg" alt="انفوجرافيك 2" class="infographic-image" data-toggle="modal" data-target="#infographicModal2">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الثاني</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> فبراير 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal2"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>
                <!-- Infographic 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/3.jpeg" alt="انفوجرافيك 3" class="infographic-image" data-toggle="modal" data-target="#infographicModal3">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الثالث</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> مارس 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal3"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>
                <!-- Infographic 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/4.jpeg" alt="انفوجرافيك 4" class="infographic-image" data-toggle="modal" data-target="#infographicModal4">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الرابع</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> أبريل 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal4"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/5.jpeg" alt="انفوجرافيك 5" class="infographic-image" data-toggle="modal" data-target="#infographicModal5">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الخامس</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> مايو 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal5"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/6.jpeg" alt="انفوجرافيك 6" class="infographic-image" data-toggle="modal" data-target="#infographicModal6">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك السادس</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> يونيو 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal6"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/7.jpeg" alt="انفوجرافيك 7" class="infographic-image" data-toggle="modal" data-target="#infographicModal7">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك السابع</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> يوليو 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal7"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/8.jpeg" alt="انفوجرافيك 8" class="infographic-image" data-toggle="modal" data-target="#infographicModal8">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الثامن</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> أغسطس 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal8"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/9.jpeg" alt="انفوجرافيك 9" class="infographic-image" data-toggle="modal" data-target="#infographicModal9">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك التاسع</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> سبتمبر 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal9"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>

                <!-- Infographic 10 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/10.jpeg" alt="انفوجرافيك 10" class="infographic-image" data-toggle="modal" data-target="#infographicModal10">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك العاشر</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> أكتوبر 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal10"><i class="fas fa-eye"></i> عرض</a>
                        </div>
                    </div>
                </div>


                <!-- Infographic 11 -->
                <div class="col-lg-4 col-md-6">
                    <div class="infographic-card">
                        <img src="assets/dist/images/infographics/11.jpeg" alt="انفوجرافيك 11" class="infographic-image" data-toggle="modal" data-target="#infographicModal11">
                        <div class="infographic-content">
                            <!-- <h4 class="infographic-title">عنوان الانفوجرافيك الحادي عشر</h4>
                            <p class="infographic-date"><i class="far fa-calendar-alt"></i> أكتوبر 2026</p> -->
                            <a href="#" class="btn-view" data-toggle="modal" data-target="#infographicModal10"><i class="fas fa-eye"></i> عرض</a>
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
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الأول</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/1.jpeg" alt="انفوجرافيك 1">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الثاني</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/2.jpeg" alt="انفوجرافيك 2">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-infographic" id="infographicModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الثالث</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/3.jpeg" alt="انفوجرافيك 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal fade modal-infographic" id="infographicModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الرابع</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/4.jpeg" alt="انفوجرافيك 4">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade modal-infographic" id="infographicModal5" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الخامس</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/5.jpeg" alt="انفوجرافيك 5">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade modal-infographic" id="infographicModal6" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك السادس</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/6.jpeg" alt="انفوجرافيك 6">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade modal-infographic" id="infographicModal7" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك السابع</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/7.jpeg" alt="انفوجرافيك 7">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 8 -->
    <div class="modal fade modal-infographic" id="infographicModal8" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الثامن</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/8.jpeg" alt="انفوجرافيك 8">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 9 -->
    <div class="modal fade modal-infographic" id="infographicModal9" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك التاسع</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/9.jpeg" alt="انفوجرافيك 9">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 10 -->
    <div class="modal fade modal-infographic" id="infographicModal10" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك العاشر</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/10.jpeg" alt="انفوجرافيك 10">
                </div>
            </div>
        </div>
    </div>

    

    <!-- Modal 11 -->
    <div class="modal fade modal-infographic" id="infographicModal11" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">عنوان الانفوجرافيك الحادي عشر</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/dist/images/infographics/11.jpeg" alt="انفوجرافيك 11">
                </div>
            </div>
        </div>
    </div>

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
