<script src="https://kit.fontawesome.com/03fd47a180.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=League+Gothic&family=Noto+Sans+KR:wght@900&family=Oswald:wght@700&family=Sail&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Economica&family=Kalam:wght@300&family=Sacramento&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Economica&family=Kalam:wght@300&family=Patrick+Hand&family=Sacramento&display=swap" rel="stylesheet">

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" style="background-color:#37536a;">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/img/profil/logoomc.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
    <span class="p" style="color:white; font-family: 'Oswald', sans-serif;">E-Ticketing OMAC</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
    <div class="user-panel d-flex">
      <div class="image">
        <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
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
        <li class="nav-header" style="color: darkgrey; font-family: 'Patrick Hand', cursive;">DASHBOARD Petugas</li>
        <li class="nav-item">
          <a style="color: aliceblue;" href="<?= base_url('petugas'); ?>" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" style="color: aliceblue;" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Sistem
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('scanner'); ?>" style="color: aliceblue;" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Scanner</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="" class="nav-link " style="color: aliceblue;" >
                <i class="far fa-circle nav-icon"></i>
                <p>Data Wahana</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Tiket</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Berita</p>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item">
          <a style="color: aliceblue;" class="nav-link" href="<?= base_url('auth/logout'); ?> ">
            <i class="nav-icon fas  fa-sign-out-alt text-bold" style="margin: right 2px;"></i>
            <p>
              Logout
            </p>
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