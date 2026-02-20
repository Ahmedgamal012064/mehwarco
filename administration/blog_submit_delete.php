<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('includes/db_config.php');

$stmt_str = '';
$update_stmt = '';
try {

    $delete_stmt = 'Delete from `posts` where post_id = ' . $_GET['post_id'];

    //insert into database with a prepared statement
    $stmt = $db->prepare($delete_stmt);
    $stmt->execute();

    $post_id = $db->lastInsertId('post_id');

    //redirect to index page
    header('Location: blog_control.php');
    exit;

//else catch the exception and show the error.
} catch(Exception $e) {
    //$error[] = 
    
    // echo $e->getMessage() . '<br>';
    // print_r($_GET);
    // echo $stmt_str . '<br>';
    // echo $update_stmt . '<br>';
    // print_r($_POST);
    header('Location: blog_control.php?post_id='.$_GET['post_id']);
    exit;
}
