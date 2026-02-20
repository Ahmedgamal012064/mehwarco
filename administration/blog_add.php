<?php require('includes/config.php');

//if not logged in redirect to login page
if (!$user->is_logged_in()) {
  header('Location: index.php');
  exit();
}

//define page title
$title = 'Management Page';

//include header template
require('layout/header.php');

?>

<script src="https://cdn.tiny.cloud/1/lyqv194orhpg7uvlmtopgyccs542s0nvrat4yyu1zezbfbzt/tinymce/5/tinymce.min.js" referrerpolicy="origin" referrerpolicy="origin"></script>

<script>
  tinymce.init({
      selector: "textarea#blog-content",      
      height: "300",
      menubar: 'file edit insert view format table tools help',
      plugins: ['advlist autolink lists link image code charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'],
      toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | image | help',
    
    // without images_upload_url set, Upload tab won't show up
    images_upload_url: 'blog_image_upload.php',
    
    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'blog_image_upload.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },
});
</script>




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

      <!-- New Blog -->
      <section class="page-section content col-lg-12 col-md-12 col-sm-12 col-xs-12" id="blogger" style="float: right;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Add Blog Post</h2>
              <form role="form" id="frm_blog" name="frm_blog" enctype="multipart/form-data" method="post" action="blog_submit.php" autocomplete="on">
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
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Title:</p>
                    <input type="text" name="blog_title" id="blog_title" class="form-control" value="">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Created By:</p>
                    <input type="text" name="blog_creator" id="blog_creator" class="form-control">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Image:</p>
                    <div class="input-group">
                      <div class="custom-file">
                        <!-- MAX_FILE_SIZE 4 MB -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="4096000" />
                        <input type="file" id="blog_image_file" name="blog_image_file" accept="image/jpeg, image/png" class="hidden">
                        <label for="blog_image_file"></label>
                      </div>
                    </div>
                  </div>

                </div>


                <!-- <div class="row">
                              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label style="display: inline;float:left;" >Published:</label>
                                <input type="checkbox" name="blog_published" id="blog_published" class="form-control" style="display: inline;float:right;" checked="true">
                            </div>

                        </div> -->

                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Content:</p>
                    <textarea id="blog-content" name="blog-content">
                                </textarea>

                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block col-3" style="float: right;">Add</button>
                  </div>
                </div>







            </div>





            </form>


          </div>


          
        </div>






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
    $(function() {
      /* BOOTSTRAP SLIDER */
      $('.slider').bootstrapSlider()
    })
  </script>



  <style>
    .slider.slider-horizontal {
      width: 180px;
      /* sample value - set it as you like*/
    }
  </style>


  </script>

  <script>
    $(document).ready(function() {
      document.querySelector('#link_management').classList.remove('active');
      document.querySelector('#link_post_add').classList.add('active');
      //document.querySelector('#link_post_edit').classList.add('active');
    });
  </script>

  <script>
  $(document).ready(function() {
      $('#frm_blog').submit(function() {
  
      if ($.trim($("#blog_title").val()) === "") {
          alert('Please enter a blog title.');
          return false;
      }

      if ($.trim($("#blog_creator").val()) === "") {
          alert('Please enter post creator name.');
          return false;
      }
      
      if ($.trim($("#blog_image_file").val()) === "") {
          alert('Please select a blog image.');
          return false;
      }

      if ($.trim($("#blog-content").val()) === "") {
          alert('Please enter content for the blog post.');
          return false;
      }
  });

});
</script>
</body>

</html>