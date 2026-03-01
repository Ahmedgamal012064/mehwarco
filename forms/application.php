<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('../administration/includes/db_config.php');

// reCAPTCHA verification
$recaptcha_secret = '6LfpX3gsAAAAAP_yQAToP3KckDF-6pnF9S1X_SBI';
$recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

if (empty($recaptcha_response)) {
    header('Location: ../index.php?success=0&error=captcha');
    exit;
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
    header('Location: ../index.php?success=0&error=captcha');
    exit;
}

// Email validation
if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?success=0&error=email');
    exit;
}

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

    // Send notification email to admin about new application
    $applicant_name = htmlspecialchars($_POST['full_name']);
    $applicant_email = $_POST['user_email'];
    $admin_subject = "New Job Application from " . $applicant_name;
    $admin_body = "<table border='2'>";
    $admin_body .= "<tr><td>Name</td><td>" . $applicant_name . "</td></tr>";
    $admin_body .= "<tr><td>Email</td><td>" . $applicant_email . "</td></tr>";
    $admin_body .= "<tr><td>Job Title</td><td>" . htmlspecialchars($_POST['job']) . "</td></tr>";
    $admin_body .= "<tr><td>Country</td><td>" . htmlspecialchars($_POST['country']) . "</td></tr>";
    $admin_body .= "<tr><td>Mobile</td><td>" . htmlspecialchars($_POST['mobile']) . "</td></tr>";
    $admin_body .= "<tr><td>Major</td><td>" . htmlspecialchars($_POST['major']) . "</td></tr>";
    $admin_body .= "<tr><td>Experience</td><td>" . htmlspecialchars($_POST['experience']) . " years</td></tr>";
    $admin_body .= "<tr><td>Hourly Rate (SAR)</td><td>" . htmlspecialchars($_POST['rate']) . "</td></tr>";
    $admin_body .= "</table>";

    $admin_mail_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/PHPMailer-master/examples/amazon-ses-smtp-sample.php';
    $admin_curl = curl_init();
    curl_setopt_array($admin_curl, array(
        CURLOPT_URL => $admin_mail_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\ncontact@mehwarco.com\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"subject\"\r\n\r\n" . $admin_subject . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n" . $admin_body . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        ),
    ));
    curl_exec($admin_curl);
    curl_close($admin_curl);

    // Send confirmation email to the applicant
    $confirmation_subject = "Thank you for applying to Mehwarco";
    $confirmation_body = "
    <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;padding:20px;'>
        <div style='text-align:center;padding:20px 0;'>
            <h2 style='color:#D2AA5A;'>Mehwarco</h2>
        </div>
        <div style='background:#f9f9f9;padding:30px;border-radius:10px;'>
            <h3 style='color:#333;'>Dear {$applicant_name},</h3>
            <p style='color:#555;line-height:1.8;'>Thank you for submitting your application to join the Mehwarco team. We have received your details and our team will review your application carefully.</p>
            <p style='color:#555;line-height:1.8;'>If your profile matches our requirements, we will contact you soon.</p>
            <hr style='border:none;border-top:1px solid #eee;margin:20px 0;'>
            <p style='color:#999;font-size:12px;'>This is an automated confirmation email. Please do not reply to this message.</p>
        </div>
        <div style='text-align:center;padding:20px 0;'>
            <p style='color:#999;font-size:12px;'>&copy; " . date('Y') . " Mehwarco. All rights reserved.</p>
        </div>
    </div>";

    $mail_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/PHPMailer-master/examples/amazon-ses-smtp-sample.php';
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $mail_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"email\"\r\n\r\n" . $applicant_email . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"subject\"\r\n\r\n" . $confirmation_subject . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n" . $confirmation_body . "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        ),
    ));
    curl_exec($curl);
    curl_close($curl);

    //redirect to success page
    $lang = isset($_POST['lang']) ? $_POST['lang'] : 'en';
    if ($lang === 'ar') {
        header('Location: ../success_ar.php?type=join');
    } else {
        header('Location: ../success.php?type=join');
    }
    exit;

//else catch the exception and show the error.
} catch(Exception $e) {
    //$error[] = 
    //echo $e->getMessage() . '\n';
    //echo $stmt_str . '\n';
    $lang = isset($_POST['lang']) ? $_POST['lang'] : 'en';
    if ($lang === 'ar') {
        header('Location: ../index_ar.php?success=0');
    } else {
        header('Location: ../index.php?success=0');
    }
    exit;
}


?>
