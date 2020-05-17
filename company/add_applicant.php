<?php 
      error_reporting(E_ALL ^ E_NOTICE);
      include 'header.php';
      include 'phpfunction/dbconn.php';
      include '../phpfunction/loginfunction.php';
      session_start(); 
      $username = $_SESSION['username'];   
      // include 'phpfunction/course.php';
      include 'phpfunction/myfunction.php';
      if(isset($_SESSION['company_name'])){
        $company_name = $_SESSION['company_name'];
      }
      
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
            <h1 class="m-0 text-dark">Add Applicant Section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"> --</li>
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        </div>
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>

          <form method="post" action="phpfunction/myfunction.php">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Fullname</label>
                  <input type="text" class="form-control" name="fullname" onkeyup="this.value  = this.value.toUpperCase();" placeholder="Fullname" required="">
                </div>
                  <div class="form-group" style="display: none;">
                  <label>Fullname</label>
                  <input type="text" class="form-control" name="company_name" value="<?php echo $_SESSION['company_name'];?>" placeholder="Fullname" required="">
                </div>

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');
                $quer = "SELECT myref FROM users WHERE username = '$username'";
                $res = $conn->query($quer);
                $sd = mysqli_fetch_array($res);
                $dd = array_shift($sd);
                ?>
                  <div class="form-group" style="display: none;">
                  <label>Fullname</label>
                  <input type="text" class="form-control" name="myref" value="<?php echo $dd;?>" placeholder="Fullname" required="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control select2"  name="gender" required="" >
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Department</label>
                 <input type="text" class="form-control" name="department" onkeyup="this.value  = this.value.toUpperCase();" placeholder="Department" required="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Date Of Birth</label>
                  <input type="date" class="form-control" name="dob">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Age</label>
                  <input type="number" name="age" class="form-control" placeholder="Age">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Position</label>
                  <div class="select2-purple">
                    <input type="text" class="form-control" onkeyup="this.value  = this.value.toUpperCase();" name="position" placeholder="Position">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="form-group">
                  <center>
                  <button class="form-control btn btn-info" type="submit" name="add_applicant">Add</button>
                  </center>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
        </form>
          <!-- /.card-body -->
          <div class="card-footer" style="display: none;">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        <!-- /.card -->

        <!-- /.card -->

        <!-- /.card -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
   

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
<!-- <script src="script/swal.js"></script> -->
<!-- <script src="script/delete-book.js"></script> -->
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
<!-- <script>
$(document).ready(function(){
  $('.triggerd').click(function(){
    Swal.fire(
  'Oops!',
  'Button Will Enable After A Day!',
  'warning'
)

   });
});
</script> -->


