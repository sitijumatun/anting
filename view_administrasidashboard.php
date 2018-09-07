<?php
session_start();
if(empty($_SESSION['Username'])or empty($_SESSION['Password']) or empty($_SESSION['Id_Posisi'])or empty($_SESSION['Id']) or empty($_SESSION['Nama'])
	or empty($_SESSION['Id_Karyawan'])
	or empty($_SESSION['Alamat'])
	or empty($_SESSION['Usia'])
	or empty($_SESSION['Foto'])
	or empty($_SESSION['Hp'])
	){
	header("location:../index.php");
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Anting</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

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
        <li class="active treeview">
          <a href="view_administrasidashboard.php">
            <i class="fa fa-dashboard"></i>
			<span>Dashboard</span>
          </a>       
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-external-link-square"></i>
			<span>Data Pemasukan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
	
	
	
	
	
	
	
	
	

    <!-- Main content -->
    <section class="content">
	<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
				<center>
              <i class="fa fa-edit"></i>
		
              <h3 class="box-title">Selamat Datang</h3>

             </center>
					
            </div>
			<div class="pad margin no-print">
       <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa  fa-android"></i> Selamat Datang , <?php echo $_SESSION['Username'];?></h4>
        Anda masuk dalam halaman Administrasi usaha dalam Aplikasi Akuntansi dan Monitoring Budidaya Jamur  
		<p>Tanggal Sekarang <?php   $tgl=date('d-m-Y'); echo $tgl;?></p>
      </div>
    </div>
            
            
          </div>
		
		
		
		</div>		
		</div>	
		
			<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
				<center>
              <i class="fa fa-edit"></i>
		
              <h3 class="box-title">Ekuitas Usaha </h3>

             </center>
					
            </div>
			<div class="pad margin no-print">
       <div class="callout callout-info" style="margin-bottom: 0!important;">
	   <?php
	   include "../apl_koneksi.php";
		$bulan = date('m');
		if ($bulan=="01"){
	$angka = 'Januari';
}
else if ($bulan=="02"){
	$angka = 'Februari';
}
else if ($bulan=="03"){
	$angka = 'Maret';
}
else if ($bulan=="04"){
	$angka = 'April';
}
else if ($bulan=="05"){
	$angka = 'Mei';
}
else if ($bulan=="06"){
	$angka = 'Juni';
}
else if ($bulan=="07"){
	$angka = 'Juli';
}
else if ($bulan=="08"){
	$angka = 'Agustus';
}
else if ($bulan=="09"){
	$angka = 'September';
}
else if ($bulan=="10"){
	$angka = 'Oktober';
}
else if ($bulan=="11"){
	$angka = 'November';
}
else if ($bulan=="12"){
	$angka = 'December';
}
		$tahun = date('Y');
		//perhitungan penjualan sekarang
		$query3 = "SELECT sum(Total_Pemasukan) as jumlahjual FROM `apl_penjualan`";
		$sql3 = mysqli_query($conn,$query3);
		while($data3 = mysqli_fetch_array($sql3)){
			$jumlah3 = $data3['jumlahjual'];
		}
		
		$query4 = "SELECT sum(Total_Pemasukan) as jumlahjual2 FROM `apl_penjualan` WHERE YEAR(Tanggal_Penjualan)='$tahun' AND MONTH(Tanggal_Penjualan)='$bulan'";
		$sql4 = mysqli_query($conn,$query4);
		while($data4 = mysqli_fetch_array($sql4)){
			$jumlah4 = $data4['jumlahjual2'];
		}
		
		
		
		
		//perhitungan pemasukan lain sekarang
		$query5 = "SELECT sum(Jumlah) as jumlahpl FROM `apl_pemasukanlain`";
		$sql5 = mysqli_query($conn,$query5);
		while($data5 = mysqli_fetch_array($sql5)){
			$jumlah5 = $data5['jumlahpl'];
		}
		
		$query6 = "SELECT sum(Jumlah) as jumlahpl2 FROM `apl_pemasukanlain` WHERE YEAR(Tanggal)='$tahun' AND MONTH(Tanggal)='$bulan'";
		$sql6 = mysqli_query($conn,$query6);
		while($data6 = mysqli_fetch_array($sql6)){
			$jumlah6 = $data6['jumlahpl2'];
		}
		
		$pemasukan = $jumlah4 + $jumlah6;
		
		//perhitungan penggajian sekarang
		$query7 = "SELECT sum(Total_Gaji) as jumlahgaji2 FROM `apl_penggajian` WHERE Tahun='$tahun' AND Bulan='$angka' AND Status_Pengambilan=1";
		$sql7 = mysqli_query($conn,$query7);
		while($data7 = mysqli_fetch_array($sql7)){
			$jumlah7 = $data7['jumlahgaji2'];
		}
		
		$query9 = "SELECT sum(Total_Gaji) as jumlahgaji3 FROM `apl_penggajian` WHERE Tahun='$tahun' AND Bulan='$angka' AND Status_Pengambilan=0";
		$sql9 = mysqli_query($conn,$query9);
		while($data9 = mysqli_fetch_array($sql9)){
			$jumlah9 = $data9['jumlahgaji3'];
		}
		
		$query8 = "SELECT sum(Total_Gaji) as jumlahgaji FROM `apl_penggajian`";
		$sql8 = mysqli_query($conn,$query8);
		while($data8 = mysqli_fetch_array($sql8)){
			$jumlah8 = $data8['jumlahgaji'];
		}
			
		//perhitungan pembelian bahan baku sekarang
		
		$query = "SELECT sum(Total_Pembelian) as jumlahbeli FROM `apl_pembelian`";
		$sql = mysqli_query($conn,$query);
		while($data = mysqli_fetch_array($sql)){
				$jumlah = $data['jumlahbeli'];
		}
		$query2 = "SELECT sum(Total_Pembelian) as jumlahbeli2 FROM `apl_pembelian` WHERE YEAR(Tanggal_Beli)='$tahun' AND MONTH(Tanggal_Beli)='$bulan'";
		$sql2 = mysqli_query($conn,$query2);
		while($data2 = mysqli_fetch_array($sql2)){
				$jumlah2 = $data2['jumlahbeli2'];
		}
		
		$pengeluaran = $jumlah7 + $jumlah2;
		$piutang = $jumlah9;
		$ekuitas = $pemasukan - ($pengeluaran + $piutang);
	   ?>
        <h4><i class="fa  fa-money"></i> Besar Neraca Laba Rugi Sekarang adalah senilai Rp <?php echo $ekuitas;?>,00 </h4>
		 Dengan total pemasukan Rp. <?php echo $pemasukan;?>,00 pengeluaran Rp. <?php echo $pengeluaran;?>,00 piutang usaha Rp. <?php echo $piutang;?> ,00 </br>
		 Apabila neraca bernilai minus (-) artinya usaha dalam kondisi rugi
      </div>
    </div>
            
            
          </div>
		
		
		
		</div>		
		</div>	
		
		
		
		<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
				<center>
              <i class="fa fa-edit"></i>
		
              <h3 class="box-title">Rekapitulasi Data Pemasukan</h3>

             </center>
					
            </div>
            
            
          </div>
		
		
		
		</div>		
		</div>	
		
	<div class="row">
                   
                    <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            REKAP PENJUALAN JAMUR
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a>
                                    <img src="images/penjualan.ico" alt="Now UI Kit" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="view_administrasipenjualan.php" class="btn btn-success btn-sm ad-click-event">
                                            LIHAT DETAIL
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Rp. <?php echo $jumlah3;  ?>,00</h4>
                                        <i class="fa fa-shopping-cart margin-r5"></i> Total Bulan ini Rp. <?php echo $jumlah4;  ?>,00
                                    </p>
									 <p>Silakan klik lihat detail untuk melihat detail pemasukan dari penjualan jamur tiram</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            REKAP PEMASUKAN LAIN
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="" class="ad-click-event">
                                    <img src="images/pemasukanlain.png" alt="Now UI Kit" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="view_administrasipemasukanlain.php" class="btn btn-success btn-sm ad-click-event">
                                            LIHAT DETAIL
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Rp. <?php echo $jumlah5; ?>,00</h4>
                                        <i class="fa fa-shopping-cart margin-r5"></i> Total Bulan ini Rp. <?php echo $jumlah6; ?>,00
                                    </p>
									<p>Silakan klik lihat detail untuk melihat detail pemasukan dari penjualan jamur tiram</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
			
		</div>
		
		
		
		
		
		<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
				<center>
              <i class="fa fa-edit"></i>
		
              <h3 class="box-title">Rekapitulasi Data Pengeluaran</h3>

             </center>
					
            </div>
            
            
          </div>
		
		
		
		</div>		
		</div>	
		
	<div class="row">
                   
                    <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            REKAP PENGGAJIAN
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="" class="ad-click-event">
                                    <img src="images/gaji.png" alt="Now UI Kit" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="view_administrasipenggajian.php" class="btn btn-success btn-sm ad-click-event">
                                            LIHAT DETAIL
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Rp. <?php echo $jumlah8;?>,00</h4>
                                        <i class="fa fa-shopping-cart margin-r5"></i> Total Bulan ini Rp. <?php echo $jumlah7;?>,00
                                    </p>
									<p>Silakan klik lihat detail untuk melihat detail penggajian karyawan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            REKAP PEMBELIAN BAHAN BAKU
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a  class="ad-click-event">
                                    <img src="images/beli.png" alt="Now UI Kit" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="view_administrasipembelian.php" class="btn btn-success btn-sm ad-click-event">
                                            lIHAT DETAIL
                                        </a>
                                    </p>

                                     <h4 style="margin-top: 0">Rp. <?php echo $jumlah;?>,00</h4>
                                        <i class="fa fa-shopping-cart margin-r5"></i> Total Bulan ini Rp. <?php echo $jumlah2;?>,00
                                    </p>
									<p>Silakan klik lihat detail untuk melihat detail pembelian bahan baku produksi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
			
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
