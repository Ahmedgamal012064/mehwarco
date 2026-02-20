<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="management.php" class="brand-link">
      <img src="assets/img/logo_menu.png" alt="Mehwar Logo" class="img-logo">
      <!-- <span class="brand-text font-weight-light"> </span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a id="link_management" href="management.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Applicants
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            
          </li>
          <li class="nav-header nav-item has-treeview"><p><i class="nav-icon fas fa-tree"></i> Blog Posts</p></li>
          <li class="nav-item">
            <a id="link_post_add" href="blog_add.php" class="nav-link">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon far fa-plus-square"></i>
              Add Post
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a id="link_post_edit" href="blog_control.php" class="nav-link">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon far fa-plus-square"></i>
              Edit Posts
              </p>
            </a>
          </li>
            
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log out
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <style>
      .bg-green{
        background-color:#0A4A32 !important;
      }
      .img-logo{
          width: 60%;
          margin-left: 20%;
      }
  </style>