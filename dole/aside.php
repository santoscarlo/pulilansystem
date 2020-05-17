<?php
// include '../phpfunction/loginfunction.php';
// $conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');
if(isset($_SESSION['username']) || isset($_SESSION['user_type'])){
  $username = $_SESSION['username'];
  $user_type = $_SESSION['user_type'];
}
?>
<aside class="main-sidebar bg-white elevation-3">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="Tonsberg Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span style="text-transform: full-width;font-weight: bolder;text-decoration-line: line-through;color: black;text-shadow: 0px 0px 5px black;" class="brand-text ml-4">PULILAN BULACAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo strtoupper('DOLE/PESO');?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-uppercase" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-registered"></i>
              <p>
                Manage Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="account_list_company.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company List</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item has-treeview" style="display: none;">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ml-3">
                <a href="enrollment_reports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enrollment Reports</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="payment_reports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Reports</p>
                </a>
              </li>
              <li class="nav-item ml-3">
                <a href="account_list_company.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Reports</p>
                </a>
              </li>
              <!-- <li class="nav-item ml-3">
                <a href="account_list_cashier.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Evaluation Reports</p>
                </a>
              </li> -->
             <!--  <li class="nav-item ml-3">
                <a href="account_list_trainor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assessment Reports</p>
                </a>
              </li> -->
             <!--  <li class="nav-item ml-3">
                <a href="account_list_trainor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificate Reports</p>
                </a>
              </li> -->
            </ul>
          </li>
         
          <li class="nav-item active">
            <a href="phpfunction/logout.php" class="nav-link text-white bg-gradient-danger elevation-3">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
  </aside>