<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMSWebApp | S | Place Order</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
    <i class="fas fa-tv"></i>
    </div>
    <div class="sidebar-brand-text mx-3">LMS<sup>WebApp</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Functionalities
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="studentBookValidity.php">
      <i class="fas fa-fw fa-calendar"></i>
      <span>Book Validity</span>
    </a>
  </li>
  

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="studentBookSearch.php">
      <i class="fas fa-fw fa-search"></i>
      <span>Book Search</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="studentPlaceOrder.php">
      <i class="fas fa-fw fa-money-bill-alt"></i>
      <span>Place Order</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="studentReturnBook.php">
      <i class="fas fa-fw fa-book-open"></i>
      <span>Return Book</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="index.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['email']; ?></span>
            <img class="img-profile rounded-circle" src="img\admin.png">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="../../../index.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Place Order</h1>
          </div>
          <hr class="sidebar-divider">

            <!-- Content Column -->
            <div class="col-lg-12 mb-8">

            <h1 class="h3 mb-2 text-gray-800">Enter the details:</h1>
            <form method="POST">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Book Title</label>
                  <input type="text" class="form-control" name="booktitle" placeholder="Book Title" required>
                </div>
                <div class="form-group col-md-12">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                
              </div>              
              <div class="form-row">
                
              &nbsp;<button id="button1" type="submit" name="submit" class="btn btn-primary">Search</button>
              </div>
            </form>   

            <hr class="sidebar-divider">
            <div class="col-lg-12 mb-8">

            <h1 class="h3 mb-2 text-gray-800">Check Your Details:</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover text-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Author Name</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Enroll No</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Expiry Date</th>  
                    <th scope="col">Operation</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST['submit'])) {
                    require('connect.php');
                    
                    $email = $_SESSION['email'];
                    $booktitle = strip_tags($_POST['booktitle']);
                    $password = strip_tags($_POST['password']);
                    $query  = "SELECT * FROM `bookdata` WHERE `booktitle` = '$booktitle'";
                    $queryid = "SELECT `studentenrollno`, `studentname` FROM `studentlogindata` WHERE `email` = '$email' AND `password` = '$password'";
                    $result = mysqli_query($conn, $query);
                    $resultid = mysqli_query($conn, $queryid);
                    if(mysqli_num_rows($result) == 1) {
                      while($row = mysqli_fetch_array($result)){
                          ?>
                          <tr>
                            <th scope="row"><?php echo $row['bookid']; ?></th>
                              <td><?php echo $row['booktitle']; ?></td>
                              <td><?php echo $row['bookauthname']; ?></td>
                              <?php
                              if(mysqli_num_rows($resultid) == 1) {
                                  while($rowid = mysqli_fetch_array($resultid)) {
                                      ?>
                                      <td><?php echo $rowid['studentname']; ?></td>
                                      <td><?php echo $rowid['studentenrollno'];  ?></td>
                                      <td><?php echo $email; ?></td>
                                      <td><?php echo date('Y-m-d'); $currentdate = date('Y-m-d'); ?></td>
                                      <td><?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' + 14 days')); $nextdate = date('Y-m-d', strtotime(date('Y-m-d'). ' + 14 days')); ?></td>
                                      <?php
                                      
                                      //STORING VARIABLES VALUE IN SESSION
                                      $_SESSION['bookid']          = $row['bookid'];
                                      $_SESSION['booktitle']       = $row['booktitle'];
                                      $_SESSION['bookauthname']    = $row['bookauthname'];
                                      $_SESSION['studentname']     = $rowid['studentname'];
                                      $_SESSION['studentenrollno'] = $rowid['studentenrollno'];
                                      $_SESSION['issuedate']       = $currentdate;
                                      $_SESSION['expirydate']      = $nextdate;
                                      ?>
                                      <td><a style="color: green;" href="confirmOrder.php?studentenrollno=<?php echo $rowid['studentenrollno']; ?>" data-toggle="tooltip" data-placement="TOP" title="Click Here To Confirm Order"><i class="fas fa-check"></i></a></td>
                                  <?php
                                  }
                                }
                                  else {
                                    echo "<script>alert('Something Wrong With Your Credentials!')</script>";
                                  }
                                }
                              ?>
                          </tr>
                          <?php
                      }
                    else {
                      echo "<script>alert('No Records Found For This Book!')</script>";
                    }                 
                }
                ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
              

            </div>

      <!-- Footer -->
      <hr class="sidebar-divider">
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy; All Rights Reserved | LMSWebApp</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>

</html>
  <?php
}
else {
  echo "<script>
        alert('Email & Password Not Authenticated!');
        window.location.href='../../Login/studentLogin.php';
        </script>";
}
?>



