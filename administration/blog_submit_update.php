<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('includes/db_config.php');

$stmt_str = '';
$update_stmt = '';
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
        //throw new Exception("Not an image");

      }
      else {
      $check = getimagesize($_FILES["blog_image_file"]["tmp_name"]);
      if($check !== false) {
          //echo "File is an image - " . $check["mime"] . ".";
          $uploadOK_img = 1;
        } else {
          //echo "File is not an image.";
          $uploadOK_img = 0;
          //redirect to index page
          //throw new Exception("Not an image");
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
    }

    $update_stmt = '';
    $vals = array(
      ':post_title' => $_POST['blog_title'],
      
      ':content' => $_POST['blog-content'],
      ':created_by' => $_POST['blog_creator']
      
    );
    
    if ($uploadOK_img == 0) {
      $update_stmt = 'Update `posts` set `post_title` = :post_title, `content` = :content,'.
                                            ' `created_by` = :created_by where post_id = ' . $_GET['post_id'];
    }
    else{
      $update_stmt = 'Update `posts` set `post_title` = :post_title, `post_image_name` = :post_image_name,'.
                      ' `content` = :content, `created_by` = :created_by where post_id = ' . $_GET['post_id'];

      $vals[':post_image_name'] = $newfilename_img;
    }

    //insert into database with a prepared statement
    $stmt = $db->prepare($update_stmt);
    $stmt->execute($vals);

    $post_id = $db->lastInsertId('post_id');

    if (move_uploaded_file($_FILES['blog_image_file']['tmp_name'], $newfilepath_img)){
      echo "Image file is valid, and was successfully uploaded.\n";
  }

    
    //redirect to index page
    header('Location: blog_control.php?post_id='.$_GET['post_id']);
    exit;

//else catch the exception and show the error.
} catch(Exception $e) {
    //$error[] = 
    
    // echo $e->getMessage() . '<br>';
    // print_r($_GET);
    // echo $stmt_str . '<br>';
    // echo $update_stmt . '<br>';
    // print_r($_POST);
    header('Location: blog_control.php?success=0');
    exit;
}
