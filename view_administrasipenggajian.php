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

include "../apl_koneksi.php";
$query = "SELECT sum(Total_Gaji) as jumlah FROM `apl_penggajian` WHERE Status_Pengambilan=1";
$sql = mysqli_query($conn,$query);
while($data = mysqli_fetch_array($sql)){
		$jumlah = $data['jumlah'];
}
?>

<!DOCTYPE html>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

   <?php include "view_administrasimenuheader.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penggajian
        <small>Silakan Administrasi Data Penggajian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Penggajian</a></li>
      </ol>
	  
    </section>
	 <section class="content">
		
		<div class="row">
		
		<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penggajian</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
               <a href="view_administrasipenggajiantambah.php"><button class="btn bg-orange btn-flat margin"><i class="fa fa-fw fa-external-link"></i> Set Penggajian</button></a> <a href="view_administrasipenggajianambil.php"><button class="btn bg-red btn-flat margin"><i class="fa fa-fw fa-external-link"></i> Set Pengambilan</button></a>
			 <button class="btn bg-blue btn-flat margin" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw   fa-file-pdf-o"></i> Convert To Pdf</button>
			 	<button class="btn bg-green btn-flat margin" data-toggle="modal" data-target="#myModal2"><i class="fa fa-fw fa-calendar-check-o" ></i>  Filter Data Berdasarkan Waktu</button>  
			
             	 <div id="myModal2" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Filter Data</h4>
								</div>
									  <div class="modal-body">	
										   <form role="form" class="center" method="post" action="view_administrasipenggajianfilter.php" enctype="multipart/form-data">
										<div class="box-body">		
               <div class="form-group">
                  <label>Pilih Bulan</label>
                  <select class="form-control" name="bulan">
				  <option>Januari</option>
				  <option>Februari</option>
				  <option>Maret</option>
				  <option>April</option>
				  <option>Mei</option>
				  <option>Juni</option>
				  <option>Juli</option>
				  <option>Agustus</option>
				  <option>September</option>
				  <option>Oktober</option>
				  <option>November</option>
				  <option>Desember</option>

                  </select>
                </div> 
				
				
				 <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input class="form-control" id="exampleInputEmail1" placeholder="tahun" name="tahun" type="text">
				   <p class="help-block">Isikan dalam bentuk angka</p>
                </div>
				
				<center>
                <button class="btn bg-orange btn-flat margin"><i class="fa fa-fw fa-external-link"></i>Filter</button>
                </center>
              </div>

            </form>
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
									  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
					</div>
			</div>
			
			
			
			
             	 <div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Pilih Data</h4>
								</div>
									  <div class="modal-body">	
										   <form role="form" class="center" method="post" action="view_administrasipenggajianpdf.php" enctype="multipart/form-data">
										<div class="box-body">		
               <div class="form-group">
                  <label>Pilih Data</label>
                  <select class="form-control" name="gaji">
				  <option>Beban Gaji</option>
				  <option>Gaji yang sudah dibayarkan</option>
				 

                  </select>
                </div> 
				
				
				
				<center>
                <button class="btn bg-orange btn-flat margin"><i class="fa fa-fw  fa-cloud-download"></i> Download PDF</button>
                </center>
              </div>

            </form>
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
									  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
					</div>
			</div>
			 <div class="description-block" style="margin-left:600px">
             <h5 class="description-header">Rp. <?php echo $jumlah;  ?>,00</h5>
              <span class="description-text">JUMLAH (RP. ) Penggajian yang sudah diambil</span>
             </div>
                  <!-- /.description-block -->
                

			 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penggajian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>Kode</center></th>
                  <th><center>Nama Karyawan</center></th>			 		 
					<th><center>Jabatan</center></th>
					<th><center>Bonus</center></th>
					<th><center>Total Gaji</center></th>
					<th><center>Bulan</center></th>
					<th><center>Tahun</center></th>
					<th><center>Status</center></th>		
                  <th style="width:150px"><center>Aksi</center></th>              
                </tr>
                </thead>
                <tbody>
				
				
                    <?php
					include "../apl_koneksi.php";
					$query="select apl_penggajian.kode_akun as kodeak, apl_penggajian.Id_Penggajian as kode, apl_karyawan.Nama as nama , apl_posisi.Posisi as posisi,apl_penggajian.Bonus as bonus, apl_penggajian.Total_Gaji as total,apl_penggajian.Bulan as bulan,apl_penggajian.Tahun as tahun, apl_penggajian.Status_Pengambilan as status FROM apl_penggajian, apl_karyawan, apl_posisi WHERE apl_penggajian.Id_Karyawan = apl_karyawan.Id_Karyawan AND apl_karyawan.Id_Posisi = apl_posisi.Id_Posisi ";
					$sql = mysqli_query($conn,$query);
					while($data = mysqli_fetch_array($sql)){
							echo "<tr>";
							echo "<td>".$data['kodeak']."</td>";
							echo "<td>".$data['nama']."</td>";
							echo "<td>".$data['posisi']."</td>";
							echo "<td>".$data['bonus']."</td>";
							echo "<td>".$data['total']."</td>";
							echo "<td>".$data['bulan']."</td>";
							echo "<td>".$data['tahun']."</td>";
							$status = $data['status'];
							if ($status==0){
								echo "<td><a style='color:#D50000'>Belum diambil</a></td>";
							}
							else
							{
								echo "<td><a style='color:#1B5E20'>Sudah diambil</a></td>";
							}
								
					?>
							<td><?php echo"<center>
								<a href='controller/admin/penggajiandelete.php?kode=".$data['kode']."'><i class='fa fa-fw fa-trash'></i>Delete</a></center>"; ?></td>
							<?php echo "</tr>";
					}
					?>
               
               
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
			  
            </div>
            <!-- /.box-body -->
          </div>
            </div>
			
            <!-- /.box-body -->
          </div>
					
				</div>
	
		
		</div>

    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
