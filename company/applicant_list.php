<?php 
      error_reporting(E_ALL ^ E_NOTICE);
      include 'header.php';
      include 'phpfunction/dbconn.php';
      session_start();
      $username = $_SESSION['username'];    
      // include 'phpfunction/course.php';
      // include 'phpfunction/myfunction.php';
      
?>
<?php
      $conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');
      $ss = "SELECT myref FROM users WHERE username = '$username'";
      $rere = $conn->query($ss);
      $sss = mysqli_fetch_array($rere);
      $klk = array_shift($sss);

?>
<style>
  #myInput {
    display:none
}
</style>
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
            <h1 class="m-0 text-dark">Active Applicant List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Active Applicant List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div><!-- /.content-header -->
    <?php
      if(isset($_GET['success'])){

        $cec = $_GET['success'];
        if($cec == 'inserted'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Added Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
    <?php
      if(isset($_GET['updated'])){

        $cec = $_GET['updated'];
        if($cec == 'success'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Updated Successfully!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
      }
    ?>
     <?php
      if(isset($_GET['edit'])){

        $cec = $_GET['edit'];
        if($cec == 'succ'){
          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Edited Successfully!</strong> 
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
              <h3 class="card-title">Active Applicant List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Fullname</th>
                  <th>Gender</th>
                  <th>Department</th>
                  <th>Age</th>
                  <th>Position</th>
                  <th>Date Added</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                   
                <tbody>
                   <?php
                      $query = "SELECT * FROM applicant WHERE status = 'active' AND myref = '$klk'";
                      $result = $conn->query($query);
                    ?>
                    <?php while($row = $result->fetch_object()):?>
                <tr id="<?php echo $row->id;?>">
                  <td><?php echo $row->fullname;?></td>
                  <td><?php echo $row->gender;?></td>
                  <td><?php echo $row->department;?></td>
                  <td><?php echo $row->age;?></td>
                  <td><?php echo $row->position;?></td>
                  <td><?php echo $row->date_added;?></td>
                  <td><?php echo $row->status;?></td>
                  <td>
                    <button class="btn btn-danger fired_applicant" value="<?php echo $row->id?>">Fired</button>
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

 <script>
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
}
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
<script src="script/fired_applicant.js"></script>
<!-- <script src="script/view-course.js"></script> -->
<!-- <script src="script/approve-book.js"></script> -->
<!-- <script src="script/ass_count.js"></script> -->
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

