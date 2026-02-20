<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog - Mehwarco">
    <meta name="author" content="">

    <title>Blog - Mehwarco</title>

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
        .blog-section {
            padding: 100px 0 60px 0;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .blog-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        .blog-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .blog-content {
            padding: 20px;
        }
        .blog-title {
            font-size: 20px;
            font-weight: 600;
            color: #0b4932;
            margin-bottom: 10px;
        }
        .blog-excerpt {
            color: #666;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .blog-meta {
            color: #999;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .btn-read-more {
            background-color: #0b4932;
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-read-more:hover {
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
                            <a class="dropdown-item active" href="blog.php">Blog</a>
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
                                <a data-target="#" class="nav-link" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span id="current-lang"><img src="https://cdn.parcellab.com/img/flags/us.png" class="flag" alt="Flag representing language"> English</span>
                                    <span class="caret"></span>
                                </a>
                                <ul id="lang-switcher-list" class="dropdown-menu">
                                    <li>
                                        <a id="selectable_lang" href="blog_ar.php" class="nav-link">
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

    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Blog</h2>
                    <h3 class="section-subheading text-muted">Latest Articles and News</h3>
                </div>
            </div>
            <div class="row">
                <?php
                $stmt = $db->prepare('SELECT post_id, post_title, post_image_name, content, created_by, created_at FROM posts ORDER BY created_at DESC');
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if (count($rows) > 0) {
                    foreach ($rows as $row) {
                        $post_id = $row["post_id"];
                        $post_title = $row["post_title"];
                        $post_image_name = $row["post_image_name"];
                        $content = $row["content"];
                        $created_by = $row["created_by"];

                        $timestamp = strtotime($row["created_at"]);
                        $created_at = date("l, j F Y", $timestamp);

                        echo '<div class="col-lg-4 col-md-6">
                            <div class="blog-card">
                                <img src="forms/uploads/blog_images/' . $post_image_name . '" alt="' . $post_title . '" class="blog-image">
                                <div class="blog-content">
                                    <h4 class="blog-title">' . $post_title . '</h4>
                                    <p class="blog-meta"><i class="far fa-calendar-alt"></i> ' . $created_at . ' | <i class="far fa-user"></i> ' . $created_by . '</p>
                                    <p class="blog-excerpt">' . mb_substr(strip_tags($content), 0, 150) . '...</p>
                                    <a href="post.php?id=' . $post_id . '" class="btn-read-more">Read More</a>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<div class="col-12 text-center"><p class="text-muted">No articles available</p></div>';
                }
                ?>
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
