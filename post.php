<!doctype html>
<html lang="en">

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
<link href="https://fonts.cdnfonts.com/css/sakkal-majalla" rel="stylesheet">
                
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

*,h2{
font-family: 'Sakkal Majalla', sans-serif;}
</style>
</head>

<body class="device-xl has-plugin-easing has-plugin-bootstrap has-plugin-flexslider">

    <?php
    require('administration/includes/db_config.php');
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php#page-top"><img src="assets/dist/images/logo_menu.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#who_we_are">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#what_we_do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#reports">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#join">Join Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#slider">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main_content">
        <section class="page-section" id="team">
            <div class="container" style="direction: rtl;">
                <div class="row">
                    <div class="col-lg-12 text-right mt-5">
                        <?php
                        if (isset($_GET['id'])) {
                            $stmt = $db->prepare('SELECT * FROM posts where post_id = ' . $_GET['id']);
                            $stmt->execute(array());
                            $rows = $stmt->fetchall(PDO::FETCH_ASSOC);
                            //print_r($rows);

                            if (count($rows) > 0) {
                                $post_id;
                                $post_title;
                                $post_image_name;
                                $content;
                                $created_by;
				$date;


                                foreach ($rows as $key => $row) {
                                    //echo json_encode($row);
                                    $active_row_style = "";
                                    $post_id = $row["post_id"];
                                    $post_title = $row["post_title"];
                                    $post_image_name = $row["post_image_name"];
                                    $content = $row["content"];
                                    $created_by = $row["created_by"];
				    $date = '';
				    if (!empty($row["created_at"])) {
           			       //$created_at = date("l, j F Y", strtotime($row["created_at"]));

// Your original date
$created_at = $row["created_at"]; // Example: "2025-09-18 15:30:00"
$timestamp = strtotime($created_at);

// English to Arabic translation arrays
$days = [
    'Saturday' => 'السبت',
    'Sunday' => 'الأحد',
    'Monday' => 'الإثنين',
    'Tuesday' => 'الثلاثاء',
    'Wednesday' => 'الأربعاء',
    'Thursday' => 'الخميس',
    'Friday' => 'الجمعة'
];

$months = [
    'January' => 'يناير',
    'February' => 'فبراير',
    'March' => 'مارس',
    'April' => 'أبريل',
    'May' => 'مايو',
    'June' => 'يونيو',
    'July' => 'يوليو',
    'August' => 'أغسطس',
    'September' => 'سبتمبر',
    'October' => 'أكتوبر',
    'November' => 'نوفمبر',
    'December' => 'ديسمبر'
];

// Get English parts
$day_name = date("l", $timestamp);       // e.g., Thursday
$day_number = date("j", $timestamp);     // e.g., 18
$month_name = date("F", $timestamp);     // e.g., September
$year = date("Y", $timestamp);           // e.g., 2025

// Translate
$arabic_day = $days[$day_name];
$arabic_month = $months[$month_name];

// Output
$date = "$arabic_day $day_number $arabic_month $year";

$postTitle = $post_title;
$postURL = "https://mehwarco.com/post.php?id=".$post_id; // Dynamically generate this
$encodedTitle = urlencode($postTitle);
$encodedURL = urlencode($postURL);
$encodedWhatsAppText = urlencode($postTitle . $postURL);
	
				    	}			  
                echo '  <h2 class="article-title text-center" style="margin-top:10px;color:#0b4932">' . $post_title . '</h2>     <div class="article-meta">';
                echo '<div class="author-info">';
                echo  '   <img style="margin-top: 10px;width:80px;border-radius:50%;height:70px" src="forms/uploads/blog_images/'.$post_image_name.'" alt="Author" class="author-img">';
                 echo '   <span class="author-name " style="margin-right: 20px;font-weight: bold;font-size: 25px;margin-bottom: -11px;">' . $created_by . '</span><div style="margin-bottom:-25px;"></div>';
                  echo '  <span class="publish-date" style="margin-right: 100px;font-size:20px">' . $date. '</span>';
              echo '  </div>
                <div class="social-icons" style="margin-right: 2px;margin-top: 30px;margin-bottom: 20px;">
                    <a href="https://wa.me/?text=' . $encodedWhatsAppText . '" style="color:#0b4932;font-size:17px;margin-right: 15px;"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=' . $encodedURL . '" target="_blank" style="color:#0b4932;font-size:17px;margin-right: 15px;"><i class="fab fa-linkedin"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=' . $encodedURL . '&text=' . $encodedTitle . '" target="_blank" style="color:#0b4932;font-size:17px;margin-right: 15px;"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=' . $encodedURL . '" target="_blank" style="color:#0b4932;font-size:17px;margin-right: 15px;"><i class="fab fa-facebook"></i></a>
                </div>
            </div>';
                                 
                                    echo "<div class='text-right' style='font-size: 20px;'>" . str_replace("../forms/", "forms/", $content) . "</div>";



                                    // $slider_start .= '<div class="slide"><a href="post.php?id=' . $post_id . '" class="d-block position-relative">';
                                    // $slider_start .= '<img src="forms/uploads/blog_images/' . $post_image_name . '" alt="Slide 4" style="height:400px;">';
                                    // $slider_start .= '<div class="bg-overlay"><div class="bg-overlay-content justify-content-center align-items-end">';
                                    // $slider_start .= '<div class="h3 fw-light py-2 px-3 bg-color text-light rounded">' . $post_title . '</div></div></div></a></div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>



</body>

</html>
