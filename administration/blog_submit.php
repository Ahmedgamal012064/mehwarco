<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('includes/db_config.php');

$stmt_str = '';
try {

    $target_dir_img = "../forms/uploads/blog_images/";
    $target_file_img = $target_dir_img . basename($_FILES["blog_image_file"]["name"]);
    
    //Get file extension
    $ext_img = explode(".", $_FILES["blog_image_file"]["name"]);
    $newfilename_img = round(microtime(true)) . '.' . end($ext_img);
    $newfilepath_img = $target_dir_img . $newfilename_img;
    
    $uploadOK_img = 1;
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    if (!isset($_FILES["blog_image_file"]["tmp_name"]) || strlen($_FILES["blog_image_file"]["tmp_name"]) < 3){

      $uploadOK_img = 0;
      //redirect to index page
      throw new Exception("Not an image");

    }
    $check = getimagesize($_FILES["blog_image_file"]["tmp_name"]);
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
      if ($_FILES["blog_image_file"]["size"] > 4096000) {
        echo "Sorry, your image file is too large.";
        throw new Exception("Image too large");
        
        //$uploadOK_img = 0;
        //exit;
      }
    }


    //insert into database with a prepared statement
    $stmt = $db->prepare('INSERT INTO `posts`(`post_title`,`post_image_name`,`content`,`created_by`) VALUES (:post_title, :post_image_name, :content, :created_by)');
    $stmt->execute(array(
        ':post_title' => $_POST['blog_title'],
        ':post_image_name' => $newfilename_img,
        ':content' => $_POST['blog-content'],
        ':created_by' => $_POST['blog_creator']
        
    ));

    $post_id = $db->lastInsertId('post_id');

    if (move_uploaded_file($_FILES['blog_image_file']['tmp_name'], $newfilepath_img)){
      echo "Image file is valid, and was successfully uploaded.\n";
  }

    
    //redirect to index page
    header('Location: blog_control.php?success=1');
    exit;

//else catch the exception and show the error.
} catch(Exception $e) {
    //$error[] = 
    
    // echo $e->getMessage() . '\n';
    // echo $stmt_str . '\n';
    // echo $_POST;
    header('Location: blog_control.php?success=0');
    exit;
}


?>
