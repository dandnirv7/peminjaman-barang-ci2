<?php
$query = $this->db->query("SELECT*FROM user WHERE username='".$this->session->userdata('username')."'");
$pemakai = $query->row();
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Dashboard | ATK</title>
  <link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/favicon.ico">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url() ?>global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/site.min.css">
  <!-- Plugins 
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/animsition/animsition.css">-->
  <script src="<?= base_url() ?>assets/js/jquery-1.4.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/chartist/chartist.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/aspieprogress/asPieProgress.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/jquery-selective/jquery-selective.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/dashboard/team.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/widgets/chart.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/formvalidation/formValidation.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/forms/validation.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/charts/chartist.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/morris/morris.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/pages/login-v3.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/c3/c3.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/datatables-buttons/dataTables.buttons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/tables/datatable.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/examples/css/uikit/progress-bars.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/blueimp-file-upload/jquery.fileupload.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/vendor/dropify/dropify.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url() ?>global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?= base_url() ?>global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?= base_url() ?>global/vendor/media-match/media.match.min.js"></script>
    <script src="<?= base_url() ?>global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?= base_url() ?>global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>

<body class="animsition site-navbar-small dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand navbar-brand-center" href="<?= base_url() ?>home">
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?= base_url() ?>assets/images/logo.png"
          title="Remark">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="<?= base_url() ?>assets/images/logo.png"
          title="Remark">
        <span class="navbar-brand-text hidden-xs-down"> ATK</span>
      </a>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search" data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Toolbar Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
            <span class="avatar avatar-online">
              <img src="<?= base_url() ?>global/portraits/1.jpg" alt="...">
              <i></i>
            </span>
          </a>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="<?php echo base_url(). 'Profil'; ?>" role="menuitem"><i class="icon wb-user"
                aria-hidden="true"></i> Profile</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment"
                aria-hidden="true"></i> Billing</a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings"
                aria-hidden="true"></i> Settings</a>
            <div class="dropdown-divider" role="presentation"></div>
            <a class="dropdown-item" href="<?php echo base_url().'login/logout'?>" role="menuitem"><i
                class="icon wb-power" aria-hidden="true"></i> Logout</a>
          </div>
        </li>
      </ul>
      <!-- End Navbar Toolbar Right -->
    </div>
    <!-- End Navbar Collapse -->
    <!-- Site Navbar Seach -->
    <div class="collapse navbar-search-overlap" id="site-navbar-search">
      <form role="search">
        <div class="form-group">
          <div class="input-search">
            <i class="input-search-icon wb-search" aria-hidden="true"></i>
            <input type="text" class="form-control" name="site-search" placeholder="Search...">
            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">General</li>
            <?php if($pemakai->level =='administrator'||$pemakai->level =='peminjam'){ ?>
            <li class="dropdown site-menu-item has-sub">
              <a data-toggle="dropdown" href="<?php echo base_url().'Pinjam'?>" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Peminjaman Barang</span>
              </a>
            </li>
            <?php } ?>
            <?php if($pemakai->level =='administrator'||$pemakai->level =='manajemen'){ ?>
            <li class="dropdown site-menu-item has-sub">
              <a data-toggle="dropdown" href="<?php echo base_url().'Barang'?>" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-edit" aria-hidden="true"></i>
                <span class="site-menu-title">Data Barang</span>
              </a>
            </li>
            <li class="dropdown site-menu-item has-sub">
              <a data-toggle="dropdown" href="<?php echo base_url().'Masuk'?>" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-download" aria-hidden="true"></i>
                <span class="site-menu-title">Barang Masuk</span>
              </a>
            </li>
            <li class="dropdown site-menu-item has-sub">
              <a data-toggle="dropdown" href="<?php echo base_url().'Keluar'?>" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-upload" aria-hidden="true"></i>
                <span class="site-menu-title">Barang Keluar</span>
              </a>
            </li>
            <?php } ?>
            <?php if($pemakai->level =='manajemen'){ ?>

            <li class="dropdown site-menu-item has-sub">
              <a data-toggle="dropdown" href="<?php echo base_url().'Lap_pengguna'?>" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-print" aria-hidden="true"></i>
                <span class="site-menu-title">Laporan Pengguna</span>
              </a>
            </li>

            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>