<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | iPlus</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> iPlus</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user8-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">D K</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  D K - Newbie Web Developer
                  <small>Member since 2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="http://e.pbf.ilkom.unej.ac.id/172410102011/nat/public/login" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user8-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>D K</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Data - Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tanaman"><i class="fa fa-circle-o"></i> Data Tanaman </a></li>
            <li><a href="cuaca"><i class="fa fa-circle-o"></i> Data Cuaca </a></li>
            <li><a href="petani"><i class="fa fa-circle-o"></i> Data User Petani </a></li>
            <li><a href="pemilik"><i class="fa fa-circle-o"></i> Data User Pemilik/Bos </a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <h1 align=center href="#">Data Tanaman </h1>
    <br/>
    <br/>
    <div align="center">
    <a align=right href="tanaman/tambah"> + Tambah Data Baru</a>
    <table width="1200" border="2" bgcolor="#DCDCDC">
    <tr>
    <th width="50px">Nomor</th>
    <th>Nama</th>
    <th width="100px">Curah</th>
    <th width="100px">Kelembapan</th>
    <th width="100px">Suhu</th>
    <th>Gambar</th>
    <th width="100px">Harga</th>
    <th width="100px">Jangka</th>
    <th width="100px">Inflasi1</th>
    <th width="100px">Inflasi2</th>
    <th width="100px">Inflasi3</th>
    <th width="100px">Opsi</th>
    </tr>
    <?php foreach ($Tanaman as $key => $value): ?>
    <tr>
    <td align="center"><?php echo e($value->id_tanam); ?></td>
    <td align="center"><?php echo e($value->nama); ?></td>
    <td align="center"><?php echo e($value->curah); ?></td>
    <td align="center"><?php echo e($value->kelembapan); ?></td>
    <td align="center"><?php echo e($value->suhu); ?></td>
    <td><img class="card-img-top" src="data:image/jpg;base64,<?php echo e(chunk_split(base64_encode($value->Gambar))); ?>" ></td>
    <td align="center"><?php echo e($value->Harga); ?></td>
    <td align="center"><?php echo e($value->jangka); ?></td>
    <td align="center"><?php echo e($value->inflasi1); ?></td>
    <td align="center"><?php echo e($value->inflasi2); ?></td>
    <td align="center"><?php echo e($value->inflasi3); ?></td>
    <td>
      <a href="tanaman/edit/<?php echo e($value->id_tanam); ?>">Edit</a>
      |
      <a href="tanaman/hapus/<?php echo e($value->id_tanam); ?>">Hapus</a>
    </td>
    </tr>
    <?php endforeach; ?>
    </table>

    </div>


  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
<?php /**PATH /home/172410102011/nat/resources/views/coba.blade.php ENDPATH**/ ?>