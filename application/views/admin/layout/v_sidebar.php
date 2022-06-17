<script src="https://kit.fontawesome.com/03fd47a180.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ranchers&family=Spicy+Rice&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Economica&family=Kalam:wght@300&family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Pompiere&family=Ranchers&family=Spicy+Rice&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style type="text/css">
  @font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 450;
    src: url(https://example.com/MaterialIcons-Regular.eot);
    /* For IE6-8 */
    src: local('Material Icons'),
      local('MaterialIcons-Regular'),
      url(https://example.com/MaterialIcons-Regular.woff2) format('woff2'),
      url(https://example.com/MaterialIcons-Regular.woff) format('woff'),
      url(https://example.com/MaterialIcons-Regular.ttf) format('truetype');
  }

  .logo {
    animation: rubberBand;
    /* referring directly to the animation's @keyframe declaration */
    animation-duration: 5s;
    /* don't forget to set a duration! */
  }

  .scan {
    margin-top: 0 !important;
  }

  .nav-item {
    transition: 0.3s;
  }

  .nav-item:hover {
    background-color: #07575B;
  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color:#003B46; color:white;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link" style="margin-bottom:-10px;">
    <!-- <img src="<?php echo base_url(); ?>assets/img/profil/logoomc.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8"> -->
    <!-- <span class="text-center" style="color:white; font-family: 'Pompiere', cursive;s">e-ticket</span> -->
    <center>
      <img class="logo animate__rubberBand" height="auto" max-width="100px" width="70%" src="<?php echo base_url(); ?>assets/nova/images/logo1.png" alt="" />
    </center>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
    <div class="user-panel mt-3 d-flex mx-auto">
      <div class="image">
        <img class="img-circle " alt="User Image" height="auto" max-width="600px" width="100%" src="<?= base_url('assets/img/profil/') . $user['image']; ?>">
      </div>
      <div class="info">
        <h4><a href="#" style="color: aliceblue; font-family: 'Cookie', cursive;" class="d-block"><?= $user['name']; ?></a></h4>
      </div>
    </div>
    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header" style="color: darkgrey; font-family: 'Patrick Hand', cursive; margin-top: -3%">DASHBOARD KASIR</li>
        <li class="nav-item">
          <a style="color: aliceblue;" href="<?= base_url('admin'); ?>" class="nav-link">
            <i class="nav-icon fa fa-fw fa-dashboard fa-lg"></i>
            <p class="text-active">
              Dashboard
            </p>
          </a>
        </li>
        <li>
          <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
        </li>
        <li class="nav-header " style="color: darkgrey; font-family: 'Patrick Hand', cursive;">SISTEM</li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" href="<?= base_url('admin/datauser'); ?>" class="nav-link">
            <i class="fa fa-fw fa-users fa-lg"></i>
            <p class=" ml-1 ">
              Data User
            </p>
          </a>
        </li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" href="<?= base_url('wahana'); ?>" class="nav-link">
            <i class="fa-solid fa-person-swimming fa-lg"></i>
            <p class="scan ml-1 ">
              Data Wahana
            </p>
          </a>
        </li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" href="<?= base_url('kuliner'); ?>" class="nav-link">
            <i class="fa-solid fa-burger fa-lg"></i>
            <p class="scan ml-1 ">
              Data Kuliner
            </p>
          </a>
        </li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" href="<?= base_url('admin/pengunjung'); ?>" class="nav-link">
            <i class="fa-solid fa-person-circle-check fa-lg"></i>
            <p class="scan ml-1 ">
              Data Pengunjung
            </p>
          </a>
        </li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" href="<?= base_url('admin/berita'); ?>" class="nav-link">
            <i class="fa-solid fa-newspaper fa-lg"></i>
            <p class="scan ml-1 ">Berita</p>
          </a>
        </li>
        <li>
          <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
        </li>
        <li class="nav-item ml-0">
          <a style="color: aliceblue;" class="nav-link" href="<?= base_url('auth/logout'); ?> ">
            <i class="fas  fa-sign-out-alt fa-lg"></i>
            <p class="scan ml-1 ">Logout</p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->