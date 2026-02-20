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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

<script src="https://cdn.tiny.cloud/1/lyqv194orhpg7uvlmtopgyccs542s0nvrat4yyu1zezbfbzt/tinymce/5/tinymce.min.js" referrerpolicy="origin" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: "textarea#blog-content",
    height: "300",
    menubar: 'file edit insert view format table tools help',
    plugins: ['advlist autolink lists link image code charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat | image | help',

    // without images_upload_url set, Upload tab won't show up
    images_upload_url: 'blog_image_upload.php',

    // override default upload handler to simulate successful upload
    images_upload_handler: function(blobInfo, success, failure) {
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

      <!-- Existing Blog Posts -->
      <section class="page-section content col-lg-12 col-md-12 col-sm-12 col-xs-12" id="blogger" style="float: right;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Blog Posts</h2>

              <div class="row">
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <?php
                  $table = "<table id=\"blog_table\">";
                  $table .= "<thead><tr><th>N</th><th>Title</th><th>Creator</th><th>Image</th><th>Content</th><th>Actions</th></tr></thead><tbody>";

                  $stmt = $db->prepare('SELECT post_id, post_title, post_image_name, content, created_by FROM posts order by created_at desc');
                  $stmt->execute(array());
                  $rows = $stmt->fetchall(PDO::FETCH_ASSOC);
                  //print_r($rows);

                  if (count($rows) > 0) {
                    $post_id;
                    $post_title;
                    $post_image_name;
                    $content;
                    $created_by;
                    $_POST['curr_post_id'] = NULL;
                    //Set the id to the received id
                    if (isset($_GET['post_id'])) $_POST['curr_post_id'] = $_GET['post_id'];

                    foreach ($rows as $key => $row) {
                      $active_row_style = "";
                      $post_id = $row["post_id"];
                      $post_title = $row["post_title"];
                      $post_image_name = $row["post_image_name"];
                      $content = $row["content"];
                      $created_by = $row["created_by"];

                      if (!isset($_POST['curr_post_id'])) {
                        $_POST['curr_post_id'] = $post_id;
                      }

                      if ($_POST['curr_post_id'] == $post_id) {
                        $active_row_style = ' style="background:yellow;"';
                        $_POST['post_title'] = $row["post_title"];
                        $_POST['post_image_name'] = $row["post_image_name"];
                        $_POST['content'] = $row["content"];
                        $_POST['created_by'] = $row["created_by"];
                      }

                      $table .= "<tr" . $active_row_style . "><td>" . $post_id . "</td><td>" . $post_title . "</td><td>" . $created_by . "</td><td><img class=\"mx-auto\" style=\"width:120px;\" src=\"../forms/uploads/blog_images/" .
                        $post_image_name . "\" ></td><td>" . preg_split('#\r?\n#', $content, 0)[0] . "</td><td>" .
                        "<a class=\"nav-link\" href=\"blog_control.php?post_id=" . $post_id . "\" role=\"button\" style=\"display:inline;\">Edit</a>" .
                        "<a class=\"nav-link\" href=\"blog_submit_delete.php?post_id=" . $post_id . "\" onclick=\"return confirm('Are you sure to delete this blog post.');\" role=\"button\" style=\"display:inline;\">Delete</a></td></tr>";
                    }
                  }
                  else{
                    header('Location:blog_add.php');
                    exit();
                  }
                  // $table .= "<tr><td>Name</td><td>" . $_POST['your-name'] . "</td></tr>";
                  $table .= "</tbody></table>";

                  echo $table;

                  ?>
                </div>
              </div>

              <form role="form" id="frm_blog" name="frm_blog" enctype="multipart/form-data" method="post" action="blog_submit_update.php?post_id=<?php echo $_POST['curr_post_id']; ?>" autocomplete="on">
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
                    <input type="text" name="blog_title" id="blog_title" class="form-control" value="<?php if (isset($_POST['post_title'])) echo $_POST['post_title'] ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Created By:</p>
                    <input type="text" name="blog_creator" id="blog_creator" class="form-control" value="<?php if (isset($_POST['created_by'])) echo $_POST['created_by'] ?>">
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p class="text-left">Updated Image:</p>
                    <div class="input-group">
                      <!-- <img src="<?php //if (isset($_POST['post_image_name'])) echo '../forms/uploads/blog_images/'.$_POST['post_image_name']
                                      ?>" style="width: 400px; height:300px;;"/> -->
                      <div class="custom-file">
                        <!-- MAX_FILE_SIZE 4 MB -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="4096000" />
                        <input type="file" id="blog_image_file" name="blog_image_file" accept="image/jpeg, image/png" class="hidden" value="">
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
                    <textarea id="blog-content" name="blog-content"><?php echo $_POST['content']; ?></textarea>

                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block col-3" style="float: right;">Save</button>
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

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

  <script>
    $(function() {
      /* BOOTSTRAP SLIDER */
      $('.slider').bootstrapSlider()
    })
  </script>

  <script>
    $(document).ready(function() {
      $('#blog_table').DataTable({
        aaSorting: [],
        "lengthChange": false,
        "pageLength": 5,
        "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false
          },
          {
            "targets": [3],
            "searchable": false,
            "orderable": false
          }
        ]
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      document.querySelector('#link_management').classList.remove('active');
      //document.querySelector('#link_post_add.active').classList.remove('active');
      document.querySelector('#link_post_edit').classList.add('active');
    });
  </script>

  <style>
    .slider.slider-horizontal {
      width: 180px;
      /* sample value - set it as you like*/
    }
  </style>


  </script>
</body>

</html>