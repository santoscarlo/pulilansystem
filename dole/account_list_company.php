<?php include 'header.php';
      // include 'phpfunction/dbconn.php';
      $conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');
      // include 'phpfunction/course.php';
      // include 'phpfunction/myfunction.php';
?>

 <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include 'nav.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'aside.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company's List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Company's List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <button  class="btn btn-info"  type="submit" hidden><a href="add_course.php" class="text-white">Add Course</a></button>

    </div><!-- /.content-header -->
    <?php
      if(isset($_GET['successs'])){

        $cec = $_GET['successs'];
        if($cec == 'addexp'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Added Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"><!-- Info boxes -->
        <div class="row">
          <div class="card col-12">
            <div class="card-header">
              <h3 class="card-title">Company's List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Company Name</th>
                  <th style="display: none;">Myref</th>
                  <th>Address</th>
                  <th>Contact Number</th>
                  <th>Action</th>
                </tr>
                </thead>
                   
                <tbody>
                   <?php
                      $query = "SELECT * FROM users WHERE status = 'active' AND user_type = 'company'";
                      $result = $conn->query($query);
                    ?>
                    <?php while($row = $result->fetch_object()):?>
                <tr id="<?php echo $row->user_id;?>">
                  <td><?php echo strtoupper($row->fullname);?></td>
                  <td><?php echo strtoupper($row->company_name);?></td>
                  <td style="display: none;"><?php echo $row->myref;?></td>
                  <td><?php echo strtoupper($row->address);?></td>
                  <td><?php echo $row->mobile_number;?></td>
                  <td>
                    <button class="btn btn-info"><a href="view_applicant.php?user_id=<?php echo $row->user_id;?>&myref=<?php echo $row->myref;?>" class="text-white">View Applicant</a></button>
                    <button class="btn btn-danger"><a href="expertise.php?user_id=<?php echo $row->user_id;?>" class="text-white">Deactivate</a></button>
                  </td>
                  
                </tr>
             <?php endwhile;?>
                </tbody>
                 
              </table>
            </div>
            
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
        </div>
      </div>
    </section><!-- /.content -->

    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" hidden="">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
  </div>
  <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0) 
}, 2000);
  </script>
  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script src="script/swal.js"></script>
<script src="script/delete-course.js"></script>
<script src="script/view-course.js"></script>
<script >
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

