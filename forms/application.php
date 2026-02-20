<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('../administration/includes/db_config.php');

$stmt_str = '';
try {

    $target_dir_img = "uploads/image_files/";
    $target_file_img = $target_dir_img . basename($_FILES["image_file"]["name"]);
    
    //Get file extension
    $ext_img = explode(".", $_FILES["image_file"]["name"]);
    $newfilename_img = round(microtime(true)) . '.' . end($ext_img);
    $newfilepath_img = $target_dir_img . $newfilename_img;
    
    $uploadOK_img = 1;
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    if (!isset($_FILES["image_file"]["tmp_name"]) || strlen($_FILES["image_file"]["tmp_name"]) < 3){

      $uploadOK_img = 0;
      //redirect to index page
      throw new Exception("Not an image");

    }
    $check = getimagesize($_FILES["image_file"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOK_img = 1;
      } else {
        //echo "File is not an image.";
        $uploadOK_img = 0;
        //redirect to index page
        throw new Exception("Not an image");
        //exit;
      }

      // Check file size
      if ($_FILES["image_file"]["size"] > 4096000) {
        echo "Sorry, your image file is too large.";
        throw new Exception("Image too large");
        
        //$uploadOK_img = 0;
        //exit;
      }
    }

    $target_dir_cv = "uploads/cv_documents/";
    $target_file_cv = $target_dir_cv . basename($_FILES["cv_file"]["name"]);
    
    //Get file extension
    $ext_cv = explode(".", $_FILES["cv_file"]["name"]);
    $newfilename_cv = round(microtime(true)) . '.' . end($ext_cv);
    $newfilepath_cv = $target_dir_cv . $newfilename_cv;
    
    $uploadOK_cv = 1;
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = (strtolower(end($ext_cv)) == "pdf");
    if($check !== false) {
        //echo "File is a PDF.";
        $uploadOK_cv = 1;
      } else {
        throw new Exception("File is not a PDF.");
        $uploadOK_cv = 0;
        //redirect to index page
        exit;
      }

      // Check file size
      if ($_FILES["cv_file"]["size"] > 4096000) {
        throw new Exception("Sorry, your CV file is too large.");
        $uploadOK_cv = 0;
        exit;
      }
    }


    //If not (select_specialty has a value and its contents amount is more than 0)
    if (!(isset($_POST['select_specialty']) && count($_POST['select_specialty']) > 0)){
      throw new Exception("At least one specialty needs to be chosen.\n");
        //echo $_POST['select_specialty'] . "\n";
        //exit;
    }

    //If not (select_software has a value and its contents amount is more than 0)
    if (!(isset($_POST['select_software']) && count($_POST['select_software']) > 0)){
      throw new Exception("At least one software needs to be chosen.");
      //print_r($_POST['select_software']);
      //exit;
    }

    //If not (select_regions has a value and its contents amount is more than 0)
    if (!(isset($_POST['select_regions']) && count($_POST['select_regions']) > 0)){
      throw new Exception("At least one region of focus needs to be chosen.");
      //echo $_POST['select_regions'] . "\n";
      //exit;
    }



    //insert into database with a prepared statement
    $stmt = $db->prepare('INSERT INTO `applications`(`applicant_name`,`applicant_email`,`job_title`,`image_name`,`country_ref`,
    `mobile_number`,`hourly_rate_sar`,`major`,`about_me`,`cv_name`,`experience`) VALUES (:applicant_name, :applicant_email, 
    :job_title, :image_name, :country_ref, :mobile_number, :hourly_rate_sar, :major, :about_me, :cv_name, :experience)');
    $stmt->execute(array(
        ':applicant_name' => $_POST['full_name'],
        ':applicant_email' => $_POST['user_email'],
        ':job_title' => $_POST['job'],
        ':image_name' => $newfilename_img,
        ':country_ref' => $_POST['country'],
        ':mobile_number' => $_POST['mobile'],
        ':hourly_rate_sar' => $_POST['rate'],
        ':major' => $_POST['major'],
        ':about_me' => $_POST['about_me'],
        ':cv_name' => $newfilename_cv,
        ':experience' => $_POST['experience']
        
    ));

    $user_id = $db->lastInsertId('application_id');

    if (move_uploaded_file($_FILES['image_file']['tmp_name'], $newfilepath_img)){
        echo "Image file is valid, and was successfully uploaded.\n";
    }

    if (move_uploaded_file($_FILES['cv_file']['tmp_name'], $newfilepath_cv)){
        echo "CV file is valid, and was successfully uploaded.\n";
    }
    
    $specialties = $_POST['select_specialty'];
    $regions = $_POST['select_regions'];
    $softwares = $_POST['select_software'];

    $specialties_str = 'Insert IGNORE into specialties (specialty_name) values ';
    $regions_str = 'Insert IGNORE into focus_regions (focus_region_name) values ';
    $softwares_str = 'Insert IGNORE into software_systems (software_name) values ';

    $specialties_vals = '';
    $regions_vals = '';
    $softwares_vals = '';

    // print_r($specialties);
    // echo "\n";

    foreach($specialties as $key=>$specialty){
      // echo $specialties_str; 
      // echo "\n";
      $specialties_str .= "('" . $specialty . "'),";
      $specialties_vals .= "'" . $specialty . "',";
      // echo $specialties_str; 
      // echo "\n";
    }
    
    // print_r($regions);
    // echo "\n";
    
    foreach($regions as $key=>$region){
      // echo $regions_str; 
      // echo "\n";
      $regions_str .= "('" . $region . "'),";
      $regions_vals .= "'" . $region . "',";
      // echo $regions_str; 
      // echo "\n";
    }

    // print_r($softwares);
    // echo "\n";
    
    foreach($softwares as $key=>$software){
      // echo $softwares_str; 
      // echo "\n";
      $softwares_str .= "('" . $software . "'),";
      $softwares_vals .= "'" . $software . "',";
      // echo $softwares_str; 
      // echo "\n";
    }

    //Replace the last comma in the string with a semicolon
    $specialties_str = substr_replace($specialties_str ,"",-1);
    $regions_str = substr_replace($regions_str ,"",-1);
    $softwares_str = substr_replace($softwares_str ,"",-1);

    // echo "\n";
    // echo $regions_str; 
    // echo "\n";
    // echo $softwares_str; 
    // echo "\n";

    $specialties_vals = substr_replace($specialties_vals ,"",-1);
    $regions_vals = substr_replace($regions_vals ,"",-1);
    $softwares_vals = substr_replace($softwares_vals ,"",-1);
    // echo $specialties_vals; 
    // echo "\n";
    // echo $regions_vals; 
    // echo "\n";
    // echo $softwares_vals; 
    // echo "\n";

    $stmt_str = $specialties_str;
    $stmt = $db->prepare($specialties_str);
    $stmt->execute(array());

    $stmt_str = $regions_str;
    $stmt = $db->prepare($regions_str);
    $stmt->execute(array());

    $stmt_str = $softwares_str;
    $stmt = $db->prepare($softwares_str);
    $stmt->execute(array());

    $stmt_str = "INSERT INTO `applications_specialties` (`specialty_ref`,`application_ref`)" .
    "(select specialty_id, " . $user_id . " from specialties where specialty_name in (" . $specialties_vals . "))";
    $stmt = $db->prepare($stmt_str);
    $stmt->execute(array());

    $stmt_str = "INSERT INTO `applications_focus_regions` (`focus_region_ref`,`application_ref`)" .
    "(select focus_region_id, " . $user_id . " from focus_regions where focus_region_name in (" . $regions_vals . "))";
    $stmt = $db->prepare($stmt_str);
    $stmt->execute(array());

    $stmt_str = "INSERT INTO `applications_software_systems` (`software_ref`,`application_ref`)" .
    "(select software_id, " . $user_id . " from software_systems where software_name in (" . $softwares_vals . "))";
    $stmt = $db->prepare($stmt_str);
    $stmt->execute(array());

    //redirect to index page
    header('Location: ../index.php?success=1');
    exit;

//else catch the exception and show the error.
} catch(Exception $e) {
    //$error[] = 
    //echo $e->getMessage() . '\n';
    //echo $stmt_str . '\n';
    header('Location: ../index.php?success=0');
    exit;
}


?>
