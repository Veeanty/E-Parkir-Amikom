  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= route_to('profil'); ?>">
            <i class="fa fa-user"></i> <span>Profil</span>
          </a>
        </li>
        <li>
          <a href="<?= route_to('kendaraan/create'); ?>">
            <i class="fa fa-motorcycle"></i> <span>Manual Parkir</span>
          </a>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= route_to('gerbang1'); ?>"><i class="fa fa-circle-o"></i> Gerbang 1</a></li>
            <li><a href="<?= route_to('gerbang2'); ?>"><i class="fa fa-circle-o"></i> Gerbang 2</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="<?= route_to('parkir'); ?>">
            <i class="fa fa-motorcycle"></i> <span>Parkir</span>
          </a>
        </li> -->
        <li>
          <a href="<?= route_to('kendaraan'); ?>">
            <i class="fa fa-file"></i> <span>Laporan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">