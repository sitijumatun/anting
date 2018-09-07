
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ANTING </b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/<?php echo $_SESSION['Foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $_SESSION['Username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/<?php echo $_SESSION['Foto']; ?>" class="img-circle" alt="User Image">

                <p>
                 <?php echo $_SESSION['Username'];?>
                  <small><?php echo $_SESSION['Id_Posisi'];?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="view_adminupdateprofile.php" class="btn btn-default btn-flat"><i class="fa fa-fw fa-user"></i>Perbaharui Profil</a>
                </div>
                <div class="pull-right">
                  <a href="../controller_logout.php" class="btn btn-default btn-flat"><i class="fa fa-fw fa-reply-all"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/<?php echo $_SESSION['Foto']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $_SESSION['Username'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="view_administrasidashboard.php">
            <i class="fa fa-dashboard"></i>
			<span>Dashboard</span>
          </a>       
        </li>
		<li class="active treeview">
          <a href="#">
            <i class="fa fa-fw fa-external-link-square"></i>
			<span>Data Pemasukan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class=" treeview-menu menu-open" style="display: block;">
            <li><a href="view_administrasipenjualan.php"><i class="fa fa-fw fa-hdd-o"></i></i>Data Penjualan</a></li>
            <li><a href="view_administrasipemasukanlain.php"><i class="fa fa-fw fa-hdd-o"></i>Data Pemasukan Lain</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-external-link"></i>
			<span>Data Pengeluaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li><a href="view_administrasipenggajian.php"><i class="fa fa-fw fa-hdd-o"></i>Data Penggajian</a></li>
            <li><a href="view_administrasipembelianbahanbaku.php"><i class="fa fa-fw fa-hdd-o"></i>Data Pembelian Bahan Baku</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-database"></i>
			<span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li><a href="view_administrasimasterdatakaryawan.php"><i class="fa fa-fw fa-hdd-o"></i>Data Karyawan</a></li>
			<li><a href="view_administrasimasterdataposisi.php"><i class="fa fa-fw fa-hdd-o"></i>Data Jabatan dan Gaji</a></li>
            <li><a href="view_administrasimasterdatajenispembeli.php"><i class="fa fa-fw fa-hdd-o"></i>Data Jenis Pembeli Jamur</a></li>
			<li><a href="view_administrasimasterdatajenisjamur.php"><i class="fa fa-fw fa-hdd-o"></i>Data Jenis dan Harga Jamur</a></li>          
          </ul>
        </li>
		<li class="treeview">
          <a href="view_administrasidatasaya.php">
            <i class="fa fa-fw fa-building-o"></i>
			<span>Data Diri Saya</span>   
          </a>
        </li>		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>