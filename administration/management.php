<?php require('includes/config.php'); 

//if not logged in redirect to login page
if (! $user->is_logged_in()){
    header('Location: index.php'); 
    exit(); 
}

//define page title
$title = 'Management Page';

//include header template
require('layout/header.php'); 

?>




<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Mehwarco Dashboard</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <ul class="navbar-nav ml-auto">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Applicants</li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php include 'layout/sidebar.php'; ?>

  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #FFF;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <section class="col-lg-3 col-md-6 col-sm-6 col-xs-6" style="float:left;padding-left:2%;">
      <label>Job:</label>
      <br/>
      <input id="job_filter" name="job_filter" value="<?php if (isset($_GET['job'])) echo $_GET['job']?>"/>
      <br/>
      <label>Country of Residence:</label>
      <br/>
      <input id="country_filter" name="country_filter" value="<?php if (isset($_GET['country'])) echo $_GET['country']?>"/>
      <br/>
      <label>Hourly Rate:</label>
      <br/>
      <div class="slider-green">
        <?php
          $stmt = $db->prepare('SELECT IFNULL(MAX(hourly_rate_sar),100) as max_rate FROM applications');
          $stmt->execute(array());
          $max_rate_row = $stmt->fetch(PDO::FETCH_ASSOC);
          $max_rate_value = $max_rate_row['max_rate'];
          $rate_step = $max_rate_value / 100;
          
          $min_max_rate = '0,500';
          if (isset($_GET['rate'])) $min_max_rate = $_GET['rate'];


          echo '<input id="rate_filter" name="rate_filter" type="text" value="" class="slider form-control" data-slider-min="0" '.
          'data-slider-max="'.$max_rate_value.'"'.
          'data-slider-step="'.$rate_step.'" data-slider-value="['.$min_max_rate.']" data-slider-orientation="horizontal"'.
          'data-slider-selection="before" data-slider-tooltip="show">';
        ?>
              
      </div>
      <!-- <input id="rate_low_filter" name="rate_low_filter" class="col-4"/>
      <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
      <input id="rate_high_filter" name="rate_high_filter" class="col-4"/>
      <br/> -->
      <label>Major:</label>
      <br/>
      <input id="major_filter" name="major_filter" value="<?php if (isset($_GET['major'])) echo $_GET['major']?>" />
      <br/>
      <label>Years of Experience:</label>
      <br/>
      <div class="slider-green">
        <input id="experience_filter" name="experience_filter" type="text" value="" class="slider form-control" data-slider-min="0" data-slider-max="50"
              data-slider-step="1" data-slider-value="[<?php if (isset($_GET['experience'])) echo $_GET['experience']; else echo '0,50';?>]" data-slider-orientation="horizontal"
              data-slider-selection="before" data-slider-tooltip="show">
      </div>
      <br/>
      <label>Specialties:</label>
      <br/>
      <input id="specialties_filter" name="specialties_filter" value="<?php if (isset($_GET['specialties'])) echo $_GET['specialties']?>"/>
      <br/>
      <label>Regions:</label>
      <br/>
      <input id="regions_filter" name="regions_filter" value="<?php if (isset($_GET['regions'])) echo $_GET['regions']?>"/>
      <br/>
      <label>Software Systems:</label>
      <br/>
      <input id="software_filter" name="software_filter" value="<?php if (isset($_GET['software'])) echo $_GET['software']?>"/>
      <br/><br/>
      <button class="btn btn-warning" style="margin-bottom:10px;float:left;" onclick="location.href = 'management.php';"> Reset </button>
      <button class="btn btn-primary" style="margin-bottom:10px;float:right;margin-right:30%;" onclick="filterJS()"> Filter </button>
    </section>
    <!-- Main content -->
    <section class="content col-lg-9 col-md-12 col-sm-12 col-xs-12" style="float: right;">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0 bg-green">
          <div class="row" style="line-height:1 !important;">
            <?php

              //function showAllApplicants(){

              require "classes/applicant.php";
              //require "includes/db_config.php";

              $_SESSION['applicants'] = [];

              $stmt = $db->prepare('SELECT * FROM applications');
              $stmt->execute(array());
              $rows = $stmt->fetchall(PDO::FETCH_ASSOC);

              if (count($rows) > 0){
                $application_id;
                $applicant_name;
                $applicant_email;
                $job_title;
                $image_name;
                $country_ref;
                $mobile_number;
                $hourly_rate_sar;
                $major;
                $about_me;
                $cv_name;
                $experience;
                foreach($rows as $key=>$row){

                    $applicant = new Applicant();

                    $applicant->id = $row["application_id"];//for later queries
                    $applicant->name = $row["applicant_name"];
                    $applicant->email = $row["applicant_email"];
                    $applicant->job_title = $row["job_title"];

                    if (isset($_GET['job']) && !$applicant->jobContains($_GET['job'])) continue;

                    $applicant->img_path = '"../forms/uploads/image_files/'. $row["image_name"] .'"';//for image on the right
                    $applicant->mobile_number = $row["mobile_number"];
                    $applicant->hourly_rate_sar = $row["hourly_rate_sar"];

                    if (isset($_GET['rate']) && !$applicant->isRateBetween($_GET['rate'])) continue;

                    $applicant->major = $row["major"];

                    if (isset($_GET['major']) && !$applicant->majorContains($_GET['major'])) continue;

                    $applicant->about = $row["about_me"];
                    $applicant->cv_path = '"../forms/uploads/cv_documents/'. $row["cv_name"] .'"';;//for the "open cv" link
                    $applicant->experience = $row["experience"];
                    if (isset($_GET['experience']) && !$applicant->isExperienceBetween($_GET['experience'])) continue;
                    
                    $country_ref = $row["country_ref"];//query for country name
                    $stmt = $db->prepare('SELECT country_name FROM countries where country_id = ' . $country_ref);
                    $stmt->execute(array());
                    $country_row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $applicant->country_name = $country_row['country_name'];

                    if (isset($_GET['country']) && !$applicant->countryContains($_GET['country'])) continue;

                    $stmt = $db->prepare('SELECT focus_region_name FROM focus_regions where focus_region_id in (SELECT focus_region_ref '.
                      'FROM applications_focus_regions where application_ref = ' . $applicant->id . ')');
                    $stmt->execute(array());
                    $applicant->regions = $stmt->fetchall(PDO::FETCH_ASSOC);

                    if (isset($_GET['regions']) && !$applicant->regionsContains($_GET['regions'])) continue;

                    //$regions_str = '';

                    // foreach($region_rows as $key=>$region_row){
                    //   $regions_str .= $region_row['focus_region_name'] . ", ";
                    // }

                    $stmt = $db->prepare('SELECT specialty_name FROM specialties where specialty_id in (SELECT specialty_ref '.
                      'FROM applications_specialties where application_ref = ' . $applicant->id . ')');
                    $stmt->execute(array());
                    $applicant->specialties = $stmt->fetchall(PDO::FETCH_ASSOC);

                    if (isset($_GET['specialties']) && !$applicant->specialltiesContains($_GET['specialties'])) continue;
                    // $specialty_str = '';

                    // foreach($specialty_rows as $key=>$specialty_row){
                    //   $specialty_str .= $specialty_row['specialty_name'] . ", ";
                    // }

                    $stmt = $db->prepare('SELECT software_name FROM software_systems where software_id in (SELECT software_ref '.
                      'FROM applications_software_systems where application_ref = ' . $applicant->id . ')');
                    $stmt->execute(array());
                    $applicant->softwares = $stmt->fetchall(PDO::FETCH_ASSOC);

                    if (isset($_GET['software']) && !$applicant->softwaresContains($_GET['software'])) continue;

                    // $software_str = '';

                    // foreach($software_rows as $key=>$software_row){
                    //   $software_str .= $software_row['software_name'] . ", ";
                    // }

                    //Replace the last comma in the string with a semicolon
                    //$specialty_str = substr_replace($specialty_str ,"",-2);
                    //$regions_str = substr_replace($regions_str ,"",-2);
                    //$software_str = substr_replace($software_str ,"",-2);

                    echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">' .
                          '<div class="card">' . 
                          '<div class="card-header text-muted border-bottom-0">' . $applicant->job_title . '</div>' .
                          '<div class="card-header text-muted border-bottom-0" style="align-self: center;">'.
                          '<img src='.$applicant->img_path.' alt="" class="img-circle img-fluid" style="width:150px;"></div>' .
                          '<div class="card-body pt-0"><div class="row"><div>'.
                          '<h2 class="lead"><b>'. $applicant->name .'</b></h2>'.
                          '<p class="text-muted text-sm"><b>Major: </b> ' . $applicant->major .'</p>'.
                          '<p class="text-muted text-sm"><b>Years of Experience: </b> ' . $applicant->experience .'</p>'.
                          '<p class="text-muted text-sm"><b>Rate (SAR): </b> ' . $applicant->hourly_rate_sar .'</p>'.
                          '<p class="text-muted text-sm"><b>Country of Residence: </b> ' . $applicant->country_name .'</p>'.
                          '<p class="text-muted text-sm"><b>Email: </b> ' . $applicant->email .'</p>'.
                          '<p class="text-muted text-sm"><b>Mobile: </b> ' . $applicant->mobile_number .'</p>'.
                          '<p class="text-muted text-sm"><b>Regions of Focus: </b> ' . $applicant->get_regions_str() .'</p>'.
                          '<p class="text-muted text-sm"><b>Specialties: </b> ' . $applicant->get_specialties_str() .'</p>'.
                          '<p class="text-muted text-sm"><b>Software: </b> ' . $applicant->get_softwares_str() .'</p>'.
                          '<p class="text-muted text-sm"><b>About: </b> ' . $applicant->about .'</p>'.
                          '</div>'.
                          '</div></div><div class="card-footer bg-light"><div class="text-right"><a href=' . $applicant->cv_path . ' class="btn btn-sm btn-primary">'.
                          '<i class="fas fa-user"></i> Open CV</a></div></div></div></div>';
                    //SELECT focus_region_name FROM mehwarco_db.focus_regions where focus_region_id in (SELECT focus_region_ref FROM mehwarco_db.applications_focus_regions where application_ref = 42);
                    array_push($_SESSION['applicants'], $applicant);
                  }
              }
            //}

            //showAllApplicants();

            

            ?>
            
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer bg-light">
          <nav aria-label="Contacts Page Navigation">
            <!-- <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul> -->
          </nav>
        </div>
        <!-- /.card-footer bg-light -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>

<script src="assets/js/jquery-extendext.js"></script>
<script src="assets/js/doT.min.js"></script>
<script src="assets/js/query-builder.min.js"></script>

<!-- Bootstrap slider -->
<script src="assets/js/bootstrap-slider.min.js"></script>

<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()
  })
</script>
<style>
  .slider.slider-horizontal{
  width:180px; /* sample value - set it as you like*/
  }  
</style>

<script>
function filterJS() {
  var filter_str = "";
  if (document.getElementById("job_filter").value.length > 0){
    filter_str += "job=" + document.getElementById("job_filter").value; 
  }
  if (document.getElementById("country_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "country=" + document.getElementById("country_filter").value; 
  }
  if (document.getElementById("rate_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "rate=" + document.getElementById("rate_filter").value; 
  }
  if (document.getElementById("experience_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "experience=" + document.getElementById("experience_filter").value; 
  }
  if (document.getElementById("major_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "major=" + document.getElementById("major_filter").value; 
  }
  // if (document.getElementById("experience_low_filter").value.length > 0){
  //   if (filter_str.length > 0) filter_str += "&";
  //   filter_str += "experience_low=" + document.getElementById("experience_low_filter").value; 
  // }
  // if (document.getElementById("experience_high_filter").value.length > 0){
  //   if (filter_str.length > 0) filter_str += "&";
  //   filter_str += "experience_high=" + document.getElementById("experience_high_filter").value; 
  // }
  if (document.getElementById("specialties_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "specialties=" + document.getElementById("specialties_filter").value; 
  }
  if (document.getElementById("regions_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "regions=" + document.getElementById("regions_filter").value; 
  }
  if (document.getElementById("software_filter").value.length > 0){
    if (filter_str.length > 0) filter_str += "&";
    filter_str += "software=" + document.getElementById("software_filter").value; 
  }

  if (filter_str.length > 0) filter_str = "?" + filter_str;

  location.href = location.protocol + '//' + location.host + location.pathname + filter_str;
}

</script>
</body>
</html>
