<?php ob_start(); ?>
<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المحور</title>

    <link rel="shortcut icon" href="assets/dist/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

    <link rel="stylesheet" href="assets/dist/canvas/style.css">
    <link rel="stylesheet" href="assets/dist/canvas/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="assets/dist/canvas/custom.css" type="text/css" />

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/dist/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/responsive.css">
    <link rel="stylesheet" href="assets/dist/css/carousel.min.css">

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
        #mini-nav>div {
            line-height: 30px;
            direction: ltr;
        }

        #mini-nav #lang-switcher-list {
            overflow-y: scroll;
            max-height: 90vh;
        }

        #mini-nav #lang-switcher:hover {
            background-color: #ddd;
        }

        #selectable_lang {
            color: #D2AA5A !important;
        }

        #selectable_lang:hover {
            color: #0b4932 !important;
            border-bottom: #FFFFFF !important;
        }

        /* Fix Owl Carousel v1 RTL issue */
        .owl-carousel {
            direction: ltr;
        }
        .owl-carousel .owl-item {
            direction: rtl;
        }
    </style>
</head>

<body>

    <?php
    require('administration/includes/db_config.php');
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/dist/images/logo_menu.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#who_we_are">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#what_we_do">ماذا نفعل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">خدمتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients_ar.php">عملائنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partnerships_ar.php">الشراكات</a>
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
                        <a class="nav-link js-scroll-trigger" href="#contact">اتصل بنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#join">انضم لنا</a>
                    </li>

                    <li id="mini_nav" class="nav-item">
                        <div>
                            <div class="dropdown pull-right">
                                <a data-target="#" class="nav-link" href="index_ar.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" previewlistener="true">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language" /> العربية</span>
                                    <span class="caret"></span>
                                </a>

                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="index.php" class="nav-link" previewlistener="true">
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

    <div id="main_content">
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in"><img src="assets/dist/images/2.png" alt=""></div>
                </div>
            </div>
        </header>

        <!-- About -->
        <section class="page-section" id="who_we_are">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">من نحن</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-history fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">تأسست بواسطة اقتصاديين سعوديين ذوي خبرة عالية.</h4>
                        <p class="text-muted">نحن مجموعة من خبراء الاقتصاد السعوديين الذين يجمعون بين المعايير العالمية والخبرة المحلية. نهدف إلى بناء قدرات المعرفة لعملائنا من خلال تقديم قرارات موضوعية وخيارات سياسية مستنيرة استنادًا إلى تحليل حديث ومعقد.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-layer-group fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">خدمة مؤسسات القطاع العام والخاص</h4>
                        <p class="text-muted">صممت خدماتنا لتمكين الحكومات والشركات وصناع القرار من الحصول على تقييمات موثوقة حول الفجوات بين التحديات الحالية والأهداف طويلة المدى.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-check fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">الاستفادة من أهم الخبراء في العالم</h4>
                        <p class="text-muted">يتم تنفيذ خدمتنا بالاعتماد على خبراء عالميين لضمان دمج أفضل الأفكار وتطوير الحلول لعملائنا
                            نحن نضمن حماية المعلومات المميزة والخاصة بعملائنا.
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- What we do -->
        <section class="bg-green page-section" id="what_we_do">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase text-bg-gold">ماذا نفعل</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-member">
                            <h4 class="text-muted">بحوث قوية وتوصيات ملائمة للسياسات</h4>
                            <p class="text-bg-white">نقوم بتنفيذ أبحاث اقتصادية تطبيقية إلى العملاء المحليين والدوليين سواء المؤسسات العامة أو عملاء القطاع الخاص. تهدف خدماتنا إلى تسهيل عمليات اتخاذ القرار لعملائنا. تأسست الشركة بواسطة اقتصاديين سعوديين وتستفيد بشكل فريد من التعهيد الجماعي لتقديم خدمات استشارية مستدامة ذات طابع عالمي.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Services -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">خدمتنا</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">النمذجة الاقتصادية والاقتصاد القياسي</h3>
                                </div>
                                <p class="description">
                                    <strong>نقوم ببناء نماذج اقتصادية مخصصة</strong> تلبي متطلبات العميل على مستوى متكامل، <strong>وتشمل خبرتنا العديد من أدوات التحليل</strong> مثل CGE ، micro-structure، والاقتصاد القياسي الكلي، والمحاكاة الدقيقة، وغيرها من النماذج الأخرى مثل dynamic stochastic، VAR, & FPP.
                                    <br /><br />
                                    <strong>بجانب دعمنا الفني المستمر</strong> الذي يشمل معايرة نماذج العملاء من خلال التقييم الإحصائي لضمان الموثوقية، ونقل المعرفة عبر برامج التدريب مثلEViews, GAMS ،TROLL, R, Python, C++, JAVA, MATLAB مع التحديث المنتظم للمعلومات المستخدمة في نماذج العميل.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">التحليل المالي وإدارة المخاطر</h3>
                                </div>
                                <p class="description">
                                    <strong>نقوم بإجراء التحليلات ونقدم الرؤى</strong> حول اللوائح الاحترازية التي تتطلب من مقدمي الخدمات المالية التحكم في المخاطر والالتزام بالحد الأدنى من متطلبات رأس المال. <strong>بجانب تقديم دراسات مخصصة</strong> تسلط الضوء على تأثير اللوائح على أعمال العميل والتأثيرات الأوسع على المنافسين والأسواق.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">التقارير التحليلية</h3>
                                </div>
                                <p class="description">
                                    تشمل خدماتنا التحليلات الكلية والقطاعية والمؤشرات بجانب دراسات الحالة ودراسات الجدوى. نحن نقدم تحليلات مفصلة بناء على متطلبات كل من القطاعين العام والخاص.
                                    <br /><br />
                                    نقوم ببناء مؤشرات اقتصادية مركبة (CEI) عبر تحديد أولويات البرامج والمشاريع ضمن إطار استراتيجي. حيث يتم إنشاء مؤشر مركب عن طريق تجميع المؤشرات الفردية في مؤشر واحد بناء على نموذج أساسي لمفهوم متعدد الأبعاد يتم قياسه.
                                </p>
                            </div>

                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">تحليل البيانات</h3>
                                </div>
                                <p class="description">
                                    تركز خبرتنا في تصميم استطلاعات الرأي بالاعتماد على المنهجيات التي تضمن جودة البيانات أثناء عملية جمعها، نتخصص أيضا في تحليل البيانات الاستكشافيةEDA) ) لمشاريع علوم البيانات الكبيرة من أجل التأكد أن النتائج المستقبلية ستكون ناجحة بناء على القرارات المتخذة اليوم.
                                    <br /><br />
                                    تمتد خدماتنا في تحليل البيانات إلى الدعم الفني، حيث نساعد عملائنا على تصميم وبناء منصات البيانات التي يمكن الاستفادة منها لإعداد التقارير والمراقبة واتخاذ القرارات المستقبلية.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="bg-light page-section" id="reports">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">التقارير</h2>
                        <h3 class="section-subheading text-muted">تقاريرنا وأبحاثنا الاقتصادية</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="report-card-modern" style="background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); padding: 30px; margin-bottom: 30px;">
                            <div class="report-icon text-center" style="margin-bottom: 20px;">
                                <i class="fas fa-file-pdf" style="font-size: 50px; color: #0b4932;"></i>
                            </div>
                            <h4 style="color: #0b4932; text-align: center; margin-bottom: 20px;">النشرة الاقتصادية ربع السنوية</h4>
                            <div class="report-links">
                                <a target="_blank" href="https://www.dropbox.com/sh/9dbo5s5vbbh0e61/AABu-Rc-th-4qWSCJjs-8SPya?dl=0&preview=MEHWAR+QUARTERLY+ECONOMIC+BULLETIN.pdf" style="display: block; background: #f8f9fa; padding: 15px 20px; border-radius: 10px; margin-bottom: 15px; color: #333; text-decoration: none; transition: all 0.3s ease; border-right: 4px solid #D2AA5A;">
                                    <i class="fas fa-download" style="color: #D2AA5A; margin-left: 10px;"></i>
                                    كيف تمكنت المملكة العربية السعودية بشكل كبير من التخفيف من المخاطر الناجمة عن جائحة كوفيد-19.
                                </a>
                                <a target="_blank" href="https://www.dropbox.com/s/h6jmhdk9ixrso9z/MEHWAR%20ECONOMIC%20PERFPRMANCE%20BULLETIN%20-November%202021.pdf" style="display: block; background: #f8f9fa; padding: 15px 20px; border-radius: 10px; margin-bottom: 15px; color: #333; text-decoration: none; transition: all 0.3s ease; border-right: 4px solid #D2AA5A;">
                                    <i class="fas fa-download" style="color: #D2AA5A; margin-left: 10px;"></i>
                                    من التعافي الاقتصادي إلى القدرة على الصمود: كيف تخفف المملكة العربية السعودية من المخاطر في عالم ما بعد كوفيد-19.
                                </a>
                            </div>
                            <div class="text-center mt-4">
                                <a href="reports_ar.php" class="btn" style="background: #0b4932; color: #fff; padding: 12px 30px; border-radius: 25px;">عرض جميع التقارير</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">اتصل بنا</h2>
                        <ul class="contact_ul">
                            <li>يمكنك الوصول إلينا مباشرة على: Contact@mehwarco.com</li>
                            <li>عنواننا هو: الرياض، المملكة العربية السعودية</li>
                            <li>ساعات عمل مكتبنا من الأحد إلى الخميس من الساعة 8:00 صباحًا حتى 4:00 مساءً</li>
                            <li>أو اترك بياناتك وسنقوم بالتواصل معك</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="your-name" type="text" class="form-control" placeholder="اسمك *" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <input name="your-email" type="email" class="form-control" placeholder="بريدك الإلكتروني*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
                                    <input name="your-mobile" type="text" class="form-control" placeholder="هاتفك المحمول*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                                    <input name="your-message" type="textarea" class="form-control" maxlength="1000" placeholder="رسالتك (لا تتجاوز 1000 حرف)*" required>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="contact-message"></div>
                                <input type="hidden" name="g-recaptcha-response" id="contact-recaptcha-response">
                                <input type="hidden" name="type" value="1">
                                <input type="hidden" name="form_submitted" value="1">
                                <input name="btn_submit_message" type="submit" id="contact-submit-btn" class="btn btn-outline-light btn-xl text-uppercase">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- Join Us -->
        <section class="page-section" id="join">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">انضم لنا</h2>
                        <form role="form" id="frm_join" name="frm_join" enctype="multipart/form-data" method="post" action="forms/application.php" autocomplete="on">
                            <?php
                            //check for any errors
                            if (isset($error)) {
                                foreach ($error as $error) {
                                    echo '<p class="bg-danger">' . $error . '</p>';
                                }
                            }

                            if (isset($_GET['action'])) {

                                //check the action
                                switch ($_GET['action']) {
                                    case 'active':
                                        echo "<h2 class='bg-success'>حسابك الآن نشط ويمكنك تسجيل الدخول الآن.</h2>";
                                        break;
                                    case 'reset':
                                        echo "<h2 class='bg-success'>يرجى التحقق من صندوق الوارد الخاص بك للحصول على رابط إعادة التعيين.</h2>";
                                        break;
                                    case 'resetAccount':
                                        echo "<h2 class='bg-success'>لقد تم تغيير كلمة المرور، يمكنك الآن تسجيل الدخول.</h2>";
                                        break;
                                }
                            }


                            ?>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">عنوان البريد الإلكتروني:</p>
                                    <input type="email" name="user_email" id="user_email" class="form-control" required value="<?php if (isset($error)) {
                                                                                                                            echo htmlspecialchars($_POST['user_email'], ENT_QUOTES);
                                                                                                                        } ?>">
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">صورة شخصية:</p>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <!-- MAX_FILE_SIZE 4 MB -->
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4096000" />
                                            <input type="file" id="image_file" name="image_file" accept="image/jpeg, image/png" class="hidden" required>
                                            <label for="image_file"></label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">الاسم الكامل:</p>
                                    <input type="text" name="full_name" id="full_name" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">التخصص الدراسي:</p>
                                    <input type="text" name="major" id="major" class="form-control" required>
                                </div>


                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">مسمى وظيفي:</p>
                                    <input type="text" name="job" id="job" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">سنوات الخبرة:</p>
                                    <input type="number" name="experience" id="experience" class="form-control" value="0" size="2" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">بلد الإقامة:</p>
                                    <select name="country" id="country" class="selectpicker form-control">
                                        <?php
                                        $stmt = $db->prepare('SELECT country_id, country_name FROM countries order by country_name');
                                        $stmt->execute(array());
                                        $rows = $stmt->fetchall(PDO::FETCH_ASSOC);
                                        //print_r($rows);

                                        if (count($rows) > 0) {
                                            $country;
                                            $country_id;
                                            foreach ($rows as $key => $row) {
                                                $country = $row["country_name"];
                                                $country_id = $row["country_id"];

                                                if ($country == 'Saudi Arabia') {
                                                    echo '<option selected="selected" value=' . $country_id . '>' . $country . '</option>';
                                                } else {
                                                    echo '<option value=' . $country_id . '>' . $country . '</option>';
                                                }
                                            }
                                        }

                                        ?>
                                    </select>
                                </div>


                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">رقم الهاتف المحمول:</p>
                                    <input type="text" name="mobile" id="mobile" class="form-control" required oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>

                            </div>



                            <div class="row">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">التخصص:</p>
                                    <div style="display: inline !important;float:left;">
                                        <select id="select_specialty" class="selectpicker" multiple data-live-search="true" name="select_specialty[]">
                                            <?php
                                            $stmt = $db->prepare('SELECT specialty_name FROM specialties where (`approved` = 1) order by specialty_name');
                                            $stmt->execute(array());
                                            $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

                                            if (count($rows) > 0) {
                                                $specialty;
                                                foreach ($rows as $key => $row) {
                                                    $specialty = $row["specialty_name"];
                                                    echo '<option value = "' . $specialty . '">' . $specialty . '</option>';
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <input id="extra_specialty" class="form-control col-lg-3 col-md-6 col-sm-6 col-xs-6" style="display: inline;" placeholder="Other">
                                    <a id="add-specialty" class="btn btn-light col-lg-3 col-md-6 col-sm-6 col-xs-6" style="float: right;">Add</a>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">مناطق التركيز:</p>
                                    <div style="display: inline !important;float:left;">
                                        <select id="select_regions" class="selectpicker" multiple data-live-search="true" name="select_regions[]">
                                            <?php
                                            $stmt = $db->prepare('SELECT focus_region_name FROM focus_regions where (`approved` = 1) order by focus_region_name');
                                            $stmt->execute(array());
                                            $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

                                            if (count($rows) > 0) {
                                                $focus_region;
                                                foreach ($rows as $key => $row) {
                                                    $focus_region = $row["focus_region_name"];
                                                    echo '<option value = "' . $focus_region . '">' . $focus_region . '</option>';
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <input id="extra_regions" class="form-control col-lg-3 col-md-6 col-sm-6 col-xs-6" style="display: inline;" placeholder="Other">
                                    <a id="add-regions" class="btn btn-light col-lg-3 col-md-6 col-sm-6 col-xs-6" style="float: right;">Add</a>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left" style="display: block;">أنظمة البرمجيات:</p>
                                    <!-- <input type="software" name="software" id="software" class="form-control"> -->

                                    <div style="display: inline !important;float:left;">
                                        <select id="select_software" class="selectpicker" multiple data-live-search="true" name="select_software[]">
                                            <?php
                                            $stmt = $db->prepare('SELECT software_name FROM software_systems where (`approved` = 1) order by software_name');
                                            $stmt->execute(array());
                                            $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

                                            if (count($rows) > 0) {
                                                $software_name;
                                                foreach ($rows as $key => $row) {
                                                    $software_name = $row["software_name"];
                                                    echo '<option value = "' . $software_name . '">' . $software_name . '</option>';
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                    <input id="extra_software" class="form-control col-lg-3 col-md-6 col-sm-6 col-xs-6" style="display: inline;" placeholder="Other">
                                    <a id="add-software" class="btn btn-light col-lg-3 col-md-6 col-sm-6 col-xs-6" style="float: right;">Add</a>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">السعر بالساعة (ريال سعودي):</p>
                                    <input type="text" name="rate" id="rate" class="form-control" value="0" size="5" maxlength="5" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>


                            </div>



                            <div class="row">
                                <div class="form-group col-12">
                                    <p class="text-left">معلومات عني:</p>
                                    <textarea type="text" name="about_me" id="about_me" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">السيرة الذاتية (PDF):</p>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <!-- MAX_FILE_SIZE 4 MB -->
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4096000" />
                                            <input type="file" id="cv_file" name="cv_file" accept=".pdf" class="hidden" required>
                                            <label for="cv_file"></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Captcha:</p>
                    <input type="captcha" name="captcha" id="captcha" class="form-control">
                    </div> -->

                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <input type="hidden" name="g-recaptcha-response" id="join-recaptcha-response">
                                    <br />
                                    <button type="submit" name="submit" id="join-submit-btn" class="btn btn-primary btn-block col-3" style="float: right;">إرسال</button>
                                </div>

                            </div>


                        </form>


                    </div>
                </div>

            </div>
        </section>

        <!-- Blog -->
        <section class="page-section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">المدونة</h2>
                        <h3 class="section-subheading text-muted">أحدث المقالات والأخبار</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="blog-slider" class="owl-carousel">
                            <?php
                            $stmt = $db->prepare('SELECT post_id, post_title, post_image_name, content, created_by, created_at FROM posts ORDER BY created_at DESC LIMIT 6');
                            $stmt->execute();
                            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            if (count($rows) > 0) {
                                $days = [
                                    'Saturday' => 'السبت', 'Sunday' => 'الأحد', 'Monday' => 'الإثنين',
                                    'Tuesday' => 'الثلاثاء', 'Wednesday' => 'الأربعاء', 'Thursday' => 'الخميس', 'Friday' => 'الجمعة'
                                ];
                                $months = [
                                    'January' => 'يناير', 'February' => 'فبراير', 'March' => 'مارس', 'April' => 'أبريل',
                                    'May' => 'مايو', 'June' => 'يونيو', 'July' => 'يوليو', 'August' => 'أغسطس',
                                    'September' => 'سبتمبر', 'October' => 'أكتوبر', 'November' => 'نوفمبر', 'December' => 'ديسمبر'
                                ];

                                foreach ($rows as $row) {
                                    $post_id = $row["post_id"];
                                    $post_title = $row["post_title"];
                                    $post_image_name = $row["post_image_name"];
                                    $content = $row["content"];
                                    $created_by = $row["created_by"];
                                    $timestamp = strtotime($row["created_at"]);
                                    $arabic_day = $days[date("l", $timestamp)];
                                    $arabic_month = $months[date("F", $timestamp)];
                                    $created_at = $arabic_day . ' ' . date("j", $timestamp) . ' ' . $arabic_month . ' ' . date("Y", $timestamp);

                                    echo '<div class="blog-item">
                                        <div class="blog-card-carousel" style="background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); padding: 25px; margin: 10px; min-height: 350px;">
                                            <div class="blog-image-wrapper" style="text-align: center; margin-bottom: 15px;">
                                                <img src="forms/uploads/blog_images/' . $post_image_name . '" alt="' . $post_title . '" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                                            </div>
                                            <h4 style="color: #0b4932; text-align: center; margin-bottom: 10px; font-size: 18px;">' . $post_title . '</h4>
                                            <p style="color: #D2AA5A; text-align: center; font-size: 14px; margin-bottom: 10px;">
                                                <i class="far fa-user"></i> ' . $created_by . ' | <i class="far fa-calendar-alt"></i> ' . $created_at . '
                                            </p>
                                            <p style="color: #666; text-align: center; font-size: 14px; line-height: 1.6;">' . mb_substr(strip_tags($content), 0, 120) . '...</p>
                                            <div style="text-align: center; margin-top: 15px;">
                                                <a href="post.php?id=' . $post_id . '" style="background: #0b4932; color: #fff; padding: 8px 20px; border-radius: 20px; text-decoration: none; font-size: 14px;">اقرأ المزيد</a>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            } else {
                                echo '<div class="text-center"><p class="text-muted">لا توجد مقالات حالياً</p></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="blog_ar.php" class="btn" style="background: #D2AA5A; color: #fff; padding: 12px 30px; border-radius: 25px;">عرض جميع المقالات</a>
                    </div>
                </div>
            </div>
        </section>






        <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><span class="fa fa-arrow-up"></span></a>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://www.google.com/recaptcha/api.js?render=6LfpX3gsAAAAAIuvlUFb6ffPKN-a4qV9BumbvHUP"></script>
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/dist/js/jqBootstrapValidation.js"></script>
        <script src="assets/dist/js/contact_me.js"></script>
        <script src="assets/dist/js/agency.min.js"></script>

        <!-- CANVAS -->
        <script src="assets/dist/canvas/plugins.min.js"></script>
        <script src="assets/dist/canvas/functions.js"></script>

        <script src="custom_selects.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>



        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#testimonial-slider").owlCarousel({
                    items: 1,
                    itemsDesktop: [1000, 1],
                    itemsDesktopSmall: [979, 1],
                    itemsTablet: [768, 2],
                    itemsMobile: [650, 1],
                    pagination: true,
                    autoPlay: true
                });
                
                $("#blog-slider").owlCarousel({
                    items: 3,
                    itemsDesktop: [1000, 3],
                    itemsDesktopSmall: [979, 2],
                    itemsTablet: [768, 2],
                    itemsMobile: [650, 1],
                    pagination: true,
                    autoPlay: true
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function() {
                    $('#back-to-top').tooltip('hide');
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

                $('#back-to-top').tooltip('show');

            });
        </script>

        <script>
            $(document).ready(function() {
                $('#frm_join').submit(function() {

                    if ($.trim($("#user_email").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال عنوان البريد الإلكتروني.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    // Email validation
                    var email = $("#user_email").val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى تقديم عنوان بريد إلكتروني صحيح.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#image_file").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار صورة شخصية.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#full_name").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال الاسم الكامل.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#major").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال التخصص الدراسي.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#job").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال المسمى الوظيفي.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#experience").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال سنوات الخبرة.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#country").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار بلد الإقامة.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#mobile").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال رقم الهاتف المحمول.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#select_specialty").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار تخصص واحد على الأقل.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#select_regions").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار منطقة واحدة على الأقل.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#select_software").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار نظام برمجي واحد على الأقل.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#rate").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال السعر بالساعة بالريال.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#about_me").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى إدخال نص معلومات عني.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }

                    if ($.trim($("#cv_file").val()) === "") {
                        Swal.fire({icon:'error',title:'خطأ',text:'يرجى اختيار ملف السيرة الذاتية بصيغة PDF.',confirmButtonColor:'#D2AA5A'});
                        return false;
                    }
                });

            });
        </script>

        <script>
            // reCAPTCHA v3 for Contact Form
            document.querySelector('#contact form').addEventListener('submit', function(e) {
                e.preventDefault();
                var form = this;
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfpX3gsAAAAAIuvlUFb6ffPKN-a4qV9BumbvHUP', {action: 'contact'}).then(function(token) {
                        document.getElementById('contact-recaptcha-response').value = token;
                        form.submit();
                    });
                });
            });

            // reCAPTCHA v3 for Join Us Form
            document.getElementById('join-submit-btn').addEventListener('click', function(e) {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfpX3gsAAAAAIuvlUFb6ffPKN-a4qV9BumbvHUP', {action: 'join'}).then(function(token) {
                        document.getElementById('join-recaptcha-response').value = token;
                    });
                });
            });
        </script>

        <?php
        $swal_message = '';

        if (isset($_POST['form_submitted'])) {
            sendForm();
        }


        function sendForm()
        {
            // reCAPTCHA verification
            $recaptcha_secret = '6LfpX3gsAAAAAP_yQAToP3KckDF-6pnF9S1X_SBI';
            $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
            
            if (empty($recaptcha_response)) {
                $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"خطأ",text:"يرجى إكمال التحقق من reCAPTCHA.",confirmButtonColor:"#D2AA5A"});';
                return;
            }
            
            $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
            $verify_data = array(
                'secret' => $recaptcha_secret,
                'response' => $recaptcha_response,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );
            
            $options = array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($verify_data)
                )
            );
            $context = stream_context_create($options);
            $verify_result = file_get_contents($verify_url, false, $context);
            $response_data = json_decode($verify_result);
            
            if (!$response_data->success || $response_data->score < 0.5) {
                $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"خطأ",text:"فشل التحقق من reCAPTCHA. يرجى المحاولة مرة أخرى.",confirmButtonColor:"#D2AA5A"});';
                return;
            }

            $strHttp = 'http:';
            $strCom = '.com';
            $strNet = '.net';

            $curl = "index.php#contact";

            if ($_POST['type'] == "1") {
                $curl = "index_ar.php#contact";
            }

            //echo "Alpha 1"; 
            //Prevent sending links from the contact us page
            if (
                preg_match("/{$strHttp}/i", strtolower($_POST['your-mobile'])) ||
                preg_match("/{$strHttp}/i", strtolower($_POST['your-message'])) ||
                preg_match("/{$strCom}/i", strtolower($_POST['your-message'])) ||
                preg_match("/{$strNet}/i", strtolower($_POST['your-message'])) ||
                preg_match("/{$strHttp}/i", strtolower($_POST['your-name'])) ||
                preg_match("/{$strHttp}/i", strtolower($_POST['your-email']))
            ) {
                //Alert the user not to send us links
                //echo("<SCRIPT LANGUAGE='JavaScript'> alert('Links cannot be sent through the contact form'); </SCRIPT>");

                //$curl.="#contact";
                //echo "Alpha 2"; 
                //show_error('Links cannot be sent through the contact form');
                $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"خطأ",text:"لا يمكن إرسال الروابط من خلال نموذج الاتصال.",confirmButtonColor:"#D2AA5A"});';
            } elseif (
                strlen(str_replace(" ", "", strtolower($_POST['your-message']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-mobile']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-name']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-email']))) < 1
            ) {
                //echo "Alpha 3";
                //show_error('All fields must be provided in order to send the message');
                $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"خطأ",text:"يجب ملء جميع الحقول لإرسال الرسالة.",confirmButtonColor:"#D2AA5A"});';
            } elseif (!filter_var($_POST['your-email'], FILTER_VALIDATE_EMAIL)) {
                //echo "Alpha 3.5";
                //show_error('Please provide a valid email address');
                $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"خطأ",text:"يرجى تقديم عنوان بريد إلكتروني صحيح.",confirmButtonColor:"#D2AA5A"});';
            } else {

                //echo "Alpha 3.10";
                $table = "<table border='2'>";
                $table .= "<tr><td>Name</td><td>" . $_POST['your-name'] . "</td></tr>";
                $table .= "<tr><td>Email</td><td>" . $_POST['your-email'] . "</td></tr>";
                $table .= "<tr><td>Mobile</td><td>" . $_POST['your-mobile'] . "</td></tr>";
                $table .= "<tr><td>Message</td><td>" . $_POST['your-message'] . "</td></tr>";
                $table .= "</table border='2'>";
                $subject = "A message from Mehwarco Website";
                $send_result = send_mail("contact@mehwarco.com", $subject, $table);

                if (strpos($send_result, 'Message sent') !== false) {
                    // Send confirmation email to the user (Arabic)
                    $user_name = htmlspecialchars($_POST['your-name']);
                    $confirmation_subject = "شكراً لتواصلك مع محور";
                    $confirmation_body = "
                    <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;padding:20px;direction:rtl;text-align:right;'>
                        <div style='text-align:center;padding:20px 0;'>
                            <h2 style='color:#D2AA5A;'>Mehwarco</h2>
                        </div>
                        <div style='background:#f9f9f9;padding:30px;border-radius:10px;'>
                            <h3 style='color:#333;'>عزيزي {$user_name}،</h3>
                            <p style='color:#555;line-height:1.8;'>شكراً لتواصلك معنا. لقد استلمنا رسالتك وسيقوم فريقنا بمراجعتها قريباً.</p>
                            <p style='color:#555;line-height:1.8;'>سنتواصل معك في أقرب وقت ممكن.</p>
                            <hr style='border:none;border-top:1px solid #eee;margin:20px 0;'>
                            <p style='color:#999;font-size:12px;'>هذا بريد إلكتروني تأكيدي تلقائي. يرجى عدم الرد على هذه الرسالة.</p>
                        </div>
                        <div style='text-align:center;padding:20px 0;'>
                            <p style='color:#999;font-size:12px;'>&copy; " . date('Y') . " Mehwarco. جميع الحقوق محفوظة.</p>
                        </div>
                    </div>";
                    send_mail($_POST['your-email'], $confirmation_subject, $confirmation_body);

                    header('Location: success_ar.php?type=contact');
                    exit;
                } else {
                    $GLOBALS['swal_message'] = 'Swal.fire({icon:"error",title:"فشل",text:"فشل إرسال الرسالة. يرجى المحاولة مرة أخرى لاحقاً.",confirmButtonColor:"#D2AA5A"});';
                }
            }
        }


        function send_mail($email, $subject, $templete, $Data = null, $attach = null)
        {
            $curl = curl_init();

            ////echo "Beta 1";
            curl_setopt_array($curl, array(
                CURLOPT_URL => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/PHPMailer-master/examples/amazon-ses-smtp-sample.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n" . $email . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"subject\"\r\n\r\n" . $subject . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n" . $templete . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                    "postman-token: ac33c276-f4c3-0637-d4ff-5b019cab7b79"
                ),
            ));

            ////echo "Beta 2";

            $response = curl_exec($curl);
            $err = curl_error($curl);

            ////echo "Beta 3";
            ////echo $err;

            curl_close($curl);
            ////echo "Beta 4";
            ////echo $curl;

            if ($err) {
                ////echo "Beta 5";
                return "cURL Error #:" . $err;
            } else {
                //echo "Beta 6";
                //file_put_contents("res.txt", $response);
                return $response;
            }
        }

        ?>

        <?php
        if (isset($_GET['success'])) {
            if ($_GET['success'] == 1) {
                $swal_message = 'Swal.fire({icon:"success",title:"تم بنجاح!",text:"تم إرسال طلبك بنجاح!",confirmButtonColor:"#D2AA5A"});';
            } else {
                $swal_message = 'Swal.fire({icon:"error",title:"فشل",text:"فشل إرسال البيانات. يرجى المحاولة مرة أخرى.",confirmButtonColor:"#D2AA5A"});';
            }
        }
        if (!empty($swal_message)) {
            echo '<script>document.addEventListener("DOMContentLoaded", function(){ ' . $swal_message . ' });</script>';
        }
        ?>

        <script src="assets/dist/canvas/plugins.min.js"></script>
    </div>


</body>

</html>
