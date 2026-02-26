<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mehwarco</title>

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
            color:#D2AA5A !important;
        }
        #selectable_lang:hover {
            color:#0b4932 !important;
            border-bottom: #FFFFFF !important;
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
                        <a class="nav-link js-scroll-trigger" href="#who_we_are">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#what_we_do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients.php">Our Clients</a>
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
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#join">Join Us</a>
                    </li>

                    <li id="mini_nav" class="nav-item">
                        <div>
                            <div class="dropdown pull-right">
                                <a data-target="#" class="nav-link" href="index.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" previewlistener="true">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/us.png" class="flag" alt="Flag representing language"> English</span>
                                    <span class="caret"></span>
                                </a>

                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="index_ar.php" class="nav-link" previewlistener="true">
                                            <img src="https://cdn.parcellab.com/img/flags/sa.png" class="flag" alt="Flag representing language"/> العربية</a></li>
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
                        <h2 class="section-heading text-uppercase">Who We Are</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-history fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">Established by experienced Saudi economists</h4>
                        <p class="text-muted">We are a group of expert Saudi economists that combine global standards with local experience. We aim to build the knowledge capacity of our clients by providing sound judgments and policy options based on cutting-edge, nuanced and robust analysis.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-layer-group fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">Serving public & private sector entities</h4>
                        <p class="text-muted">Our services are designed to enable governments, businesses & decision-makers with reliable assessments on gaps between their current challenges & long-term objectives.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-bg-green"></i>
                            <i class="fas fa-check fa-stack-1x text-bg-gold"></i>
                        </span>
                        <h4 class="service-heading">Leveraging top experts from around the world</h4>
                        <p class="text-muted">Execution of services are done in tandem with global experts to ensure we incorporate the best thinking & to develop consensus on our customized solutions. We guarantee protection of our clients’ privileged information.</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- What we do -->
        <section class="bg-green page-section" id="what_we_do">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase text-bg-gold">What We do</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-member">
                            <h4 class="text-muted">Solid Research, Sound Policy Recommendations</h4>
                            <p class="text-bg-white">We carry out independent applied economic research on behalf of national and international clients– both public institutions and private sector clients. Our services aim to inform and facilitate the decision-making processes of our clients. Originally founded by Saudi economists and uniquely leveraging crowdsourcing to sustainably deliver world-class consulting services.</p>
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
                        <h2 class="section-heading text-uppercase">Our Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">Economic Analysis</h3>
                                </div>
                                <p class="description">
                                    <strong>We build bespoke economic models</strong> that address client
                                    requirements at an integrated platform level. <strong>Our wide ranging expertise covers
                                        various tools</strong> including CGE, micro-structure, macro-econometric,
                                    micro-simulation, dynamic stochastic, VAR, & FPP.
                                    <br /><br />
                                    <strong>Our on-going technical support</strong> includes calibration of clients’ models
                                    through statistical assessment to ensure robustness & reliability, knowledge transfer via
                                    training programs for EViews, GAMS, TROLL, R, Python, C++, JAVA, MATLAB, & regular updates
                                    of parameters employed in client models.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">Finance & Risk</h3>
                                </div>
                                <p class="description">
                                    <strong>We conduct analyses & provide insights</strong> on prudential regulations that require financial services
                                    providers to control risks & adhere to minimum capital requirements. <strong>We deliver tailored studies</strong> that highlight the
                                    impact of regulations on a client’s business & the broader effects on competitors & individual markets.
                                    <br /><br />
                                    <strong>Our risk management services</strong> focus on key issues that can impact a clients’ high-level corporate strategy. <strong>We enable
                                        decision-making by developing custom risk assessment frameworks, financial model designs, audit methods & data
                                        analysis</strong> to assess an organization’s sensitivity to changing market dynamics.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">Analytical Reports</h3>
                                </div>
                                <p class="description">
                                    <strong>Our products range from macro, sector, & indicator analyses to case studies & feasibility
                                        studies.</strong> We deliver detailed analyses based on the requirements of both public & private sector
                                    institutions.
                                    <br /><br />
                                    <strong>We construct composite economic indicators (CEI)</strong> by prioritizing programs & projects within in a strategic
                                    framework. A composite indicator is constructed by compiling individual indicators into a single index based on an
                                    underlying model of a multi-dimensional concept that is being measured. CEIs have two dimensions; structural
                                    indicators & macroeconomic indicators that both describe economic change. While structural changes in the economy
                                    tend to be permanent, macroeconomic disturbances normalize within shorter timeframes.
                                </p>
                            </div>

                            <div class="testimonial">
                                <div class="testimonial-content">
                                    <h3 class="title">Data Analytics</h3>
                                </div>
                                <p class="description">
                                    <strong>Our expertise in survey design</strong> focuses on methodologies that guarantee data
                                    quality during the collection process. <strong>We also specialize in Exploratory Data Analysis (EDA)</strong> for large data science
                                    projects in order to determine certainty that future outcomes will be successful based on decisions made today.
                                    <br /><br />
                                    <strong>Our data analytics services extend to technical support.</strong> We help our clients design & build data platforms that can
                                    be leveraged for reporting, monitoring & future decision-making.
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
                        <h2 class="section-heading text-uppercase">Reports</h2>
                        <h3 class="section-subheading text-muted">Our Economic Reports and Research</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="report-card-modern" style="background: #fff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); padding: 30px; margin-bottom: 30px;">
                            <div class="report-icon text-center" style="margin-bottom: 20px;">
                                <i class="fas fa-file-pdf" style="font-size: 50px; color: #0b4932;"></i>
                            </div>
                            <h4 style="color: #0b4932; text-align: center; margin-bottom: 20px;">QUARTERLY ECONOMIC BULLETIN</h4>
                            <div class="report-links">
                                <a target="_blank" href="https://www.dropbox.com/sh/9dbo5s5vbbh0e61/AABu-Rc-th-4qWSCJjs-8SPya?dl=0&preview=MEHWAR+QUARTERLY+ECONOMIC+BULLETIN.pdf" style="display: block; background: #f8f9fa; padding: 15px 20px; border-radius: 10px; margin-bottom: 15px; color: #333; text-decoration: none; transition: all 0.3s ease; border-left: 4px solid #D2AA5A;">
                                    <i class="fas fa-download" style="color: #D2AA5A; margin-right: 10px;"></i>
                                    How Saudi Arabia has significantly managed to mitigate risks from Covid-19 pandemic.
                                </a>
                                <a target="_blank" href="https://www.dropbox.com/s/h6jmhdk9ixrso9z/MEHWAR%20ECONOMIC%20PERFPRMANCE%20BULLETIN%20-November%202021.pdf" style="display: block; background: #f8f9fa; padding: 15px 20px; border-radius: 10px; margin-bottom: 15px; color: #333; text-decoration: none; transition: all 0.3s ease; border-left: 4px solid #D2AA5A;">
                                    <i class="fas fa-download" style="color: #D2AA5A; margin-right: 10px;"></i>
                                    From Economic Recovery to Resilience: How Saudi Arabia Alleviate Risks in Post Covid-19 World.
                                </a>
                            </div>
                            <div class="text-center mt-4">
                                <a href="reports.php" class="btn" style="background: #0b4932; color: #fff; padding: 12px 30px; border-radius: 25px;">View All Reports</a>
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
                        <h2 class="section-heading text-uppercase">Contact Us</h2>
                        <ul class="contact_ul">
                            <li>You can reach us directly on: Contact@mehwarco.com</li>
                            <li>Our address is: Riyadh, Saudi Arabia</li>
                            <li>Our office hours are from Sunday To Thursday, 8:00AM - 4:00 PM</li>
                            <li>Or leave your information and we will get back to you</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form method="post">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input name="your-name" type="text" class="form-control" placeholder="Your Name *" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                    <input name="your-email" type="email" class="form-control" placeholder="Your Email*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
                                    <input name="your-mobile" type="text" class="form-control" placeholder="Your Mobile*" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                                    <input name="your-message" type="textarea" class="form-control" maxlength="1000" placeholder="Your Message (not exceed more than 1000 characters)*" required>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="contact-message"></div>
                                <input type="hidden" name="g-recaptcha-response" id="contact-recaptcha-response">
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
                        <h2 class="section-heading text-uppercase">Join Us</h2>
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
                                        echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
                                        break;
                                    case 'reset':
                                        echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
                                        break;
                                    case 'resetAccount':
                                        echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
                                        break;
                                }
                            }


                            ?>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Email address:</p>
                                    <input type="email" name="user_email" id="user_email" class="form-control" required value="<?php if (isset($error)) {
                                                                                                                            echo htmlspecialchars($_POST['user_email'], ENT_QUOTES);
                                                                                                                        } ?>">
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Personal Photo:</p>
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
                                    <p class="text-left">Full Name:</p>
                                    <input type="text" name="full_name" id="full_name" class="form-control" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Major of Study:</p>
                                    <input type="text" name="major" id="major" class="form-control" required>
                                </div>


                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Job Title:</p>
                                    <input type="text" name="job" id="job" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Years of Experience:</p>
                                    <input type="number" name="experience" id="experience" class="form-control" value="0" size="2" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Country of Residence:</p>
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
                                    <p class="text-left">Mobile Number:</p>
                                    <input type="text" name="mobile" id="mobile" class="form-control" required oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>

                            </div>



                            <div class="row">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">Specialty:</p>
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
                                    <p class="text-left">Regions of Focus:</p>
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
                                    <p class="text-left" style="display: block;">Software Systems:</p>
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
                                    <p class="text-left">Hourly Rate (SAR):</p>
                                    <input type="text" name="rate" id="rate" class="form-control" value="0" size="5" maxlength="5" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                </div>


                            </div>



                            <div class="row">
                                <div class="form-group col-12">
                                    <p class="text-left">About Me:</p>
                                    <textarea type="text" name="about_me" id="about_me" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <p class="text-left">CV (PDF):</p>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <!-- MAX_FILE_SIZE 4 MB -->
                                            <input type="hidden" name="MAX_FILE_SIZE" value="4096000" />
                                            <input type="file" id="cv_file" name="cv_file" accept=".pdf" class="hidden">
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
                                    <button type="submit" name="submit" id="join-submit-btn" class="btn btn-primary btn-block col-3" style="float: right;">Submit</button>
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
                        <h2 class="section-heading text-uppercase">Blog</h2>
                        <h3 class="section-subheading text-muted">Latest Articles and News</h3>
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
                                foreach ($rows as $row) {
                                    $post_id = $row["post_id"];
                                    $post_title = $row["post_title"];
                                    $post_image_name = $row["post_image_name"];
                                    $content = $row["content"];
                                    $created_by = $row["created_by"];
                                    $created_at = date("l, j F Y", strtotime($row["created_at"]));

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
                                                <a href="post.php?id=' . $post_id . '" style="background: #0b4932; color: #fff; padding: 8px 20px; border-radius: 20px; text-decoration: none; font-size: 14px;">Read More</a>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            } else {
                                echo '<div class="text-center"><p class="text-muted">No articles available</p></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="blog.php" class="btn" style="background: #D2AA5A; color: #fff; padding: 12px 30px; border-radius: 25px;">View All Articles</a>
                    </div>
                </div>
            </div>
        </section>

        <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top" role="button" data-toggle="tooltip" data-placement="left"><span class="fa fa-arrow-up"></span></a>

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
                        alert('Please enter Email address.');
                        return false;
                    }

                    // Email validation
                    var email = $("#user_email").val();
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        alert('Please provide a valid email address.');
                        return false;
                    }

                    if ($.trim($("#image_file").val()) === "") {
                        alert('Please select a personal image.');
                        return false;
                    }

                    if ($.trim($("#full_name").val()) === "") {
                        alert('Please enter full name.');
                        return false;
                    }

                    if ($.trim($("#major").val()) === "") {
                        alert('Please enter major of study.');
                        return false;
                    }

                    if ($.trim($("#job").val()) === "") {
                        alert('Please enter job.');
                        return false;
                    }

                    if ($.trim($("#experience").val()) === "") {
                        alert('Please enter years of experience.');
                        return false;
                    }

                    if ($.trim($("#country").val()) === "") {
                        alert('Please select country of residence.');
                        return false;
                    }

                    if ($.trim($("#mobile").val()) === "") {
                        alert('Please enter mobile number.');
                        return false;
                    }

                    if ($.trim($("#select_specialty").val()) === "") {
                        alert('Please select at least one specialty.');
                        return false;
                    }

                    if ($.trim($("#select_regions").val()) === "") {
                        alert('Please select at least one region.');
                        return false;
                    }

                    if ($.trim($("#select_software").val()) === "") {
                        alert('Please select at least one software system.');
                        return false;
                    }

                    if ($.trim($("#rate").val()) === "") {
                        alert('Please enter the hourly rate in SAR.');
                        return false;
                    }

                    if ($.trim($("#about_me").val()) === "") {
                        alert('Please enter about me text.');
                        return false;
                    }

                    if ($.trim($("#cv_file").val()) === "") {
                        alert('Please choose a CV file in PDF format.');
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
                var form = document.getElementById('frm_join');
                // Let existing validation run first via jQuery
                // Token will be set before the form actually submits
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfpX3gsAAAAAIuvlUFb6ffPKN-a4qV9BumbvHUP', {action: 'join'}).then(function(token) {
                        document.getElementById('join-recaptcha-response').value = token;
                    });
                });
            });
        </script>

        <?php

        if (isset($_POST['btn_submit_message'])) {
            sendForm();
        }


        function sendForm()
        {
            // reCAPTCHA verification
            $recaptcha_secret = '6LfpX3gsAAAAAP_yQAToP3KckDF-6pnF9S1X_SBI';
            $recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
            
            if (empty($recaptcha_response)) {
                echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;\'>Please complete the reCAPTCHA verification.</div>";</script>';
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
                echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;\'>reCAPTCHA verification failed. Please try again.</div>";</script>';
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
                echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;\'>Links cannot be sent through the contact form.</div>";</script>';
            } elseif (
                strlen(str_replace(" ", "", strtolower($_POST['your-message']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-mobile']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-name']))) < 1 ||
                strlen(str_replace(" ", "", strtolower($_POST['your-email']))) < 1
            ) {
                //echo "Alpha 3";
                //show_error('All fields must be provided in order to send the message');
                echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;\'>All fields must be provided in order to send the message.</div>";</script>';
            } elseif (!filter_var($_POST['your-email'], FILTER_VALIDATE_EMAIL)) {
                //echo "Alpha 3.5";
                //show_error('Please provide a valid email address');
                echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;\'>Please provide a valid email address.</div>";</script>';
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
                    echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-success\' style=\'margin-top:15px;border-radius:10px;font-size:16px;\'><i class=\'fas fa-check-circle\'></i> Your message has been sent successfully! We will get back to you soon.</div>"; document.querySelector(\'#contact form\').reset();</script>';
                } else {
                    echo '<script>document.getElementById("contact-message").innerHTML = "<div class=\'alert alert-danger\' style=\'margin-top:15px;border-radius:10px;font-size:16px;\'><i class=\'fas fa-times-circle\'></i> Failed to send message. Please try again later.</div>";</script>';
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
                CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n" . $email . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"subject\"\r\n\r\n" . $subject . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n" . $templete . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--", CURLOPT_HTTPHEADER => array(
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
                echo '<script>alert("Data submitted successfully")</script>';
            } else {
                echo '<script>alert("Data failed to submit")</script>';
            }
        }
        ?>

        <script src="assets/dist/canvas/plugins.min.js"></script>
    </div>


</body>

</html>
