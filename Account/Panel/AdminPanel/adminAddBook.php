<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

    if(isset($_POST['submit'])) {
    require_once('connect.php');
  
  //FILTERING THE VARIABLES ENTERED THROUGH FORM
  //HASHING IMPLEMENTING USING BASE64 ENCODE DECODE FUCNTIONS
  
  // $bookid = base64_encode(strip_tags($_POST['bookid']));
  // $booktitle = base64_encode(strip_tags($_POST['booktitle']));
  // $bookauthname = base64_encode(strip_tags($_POST['bookauthname']));
  // $bookcost = base64_encode(strip_tags($_POST['bookcost']));
  // $bookquantity = base64_encode(strip_tags($_POST['bookquantity']));
  
  $bookid = strip_tags($_POST['bookid']);
  $booktitle = strip_tags($_POST['booktitle']);
  $bookauthname = strip_tags($_POST['bookauthname']);
  $bookcost = strip_tags($_POST['bookcost']);
  $bookquantity = strip_tags($_POST['bookquantity']);

  //INSERTING RECORDS INTO THE DATABASE
  $sql = "INSERT INTO `bookdata` (`id`, `bookid`, `booktitle`, `bookauthname`, `bookcost`, `bookquantity`, `time`) VALUES (NULL, '$bookid', '$booktitle', '$bookauthname', '$bookcost', '$bookquantity', current_timestamp());";
  if(mysqli_query($conn, $sql)) {
    echo "<script>alert('Book Stored Successfully!')</script>";
  } 
  else {
    echo "<script>alert('Error Occured During Inserting Information!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMSWebApp | A | Add Book</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
        <a class="nav-link collapsed" href="adminAddBook.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Add Book</span>
        </a>
      </li>
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="adminBookSearch.php">
          <i class="fas fa-fw fa-search"></i>
          <span>Book Search</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminBookUpdate.php">
          <i class="fas fa-fw fa-pen"></i>
          <span>Book Update</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminViewOrder.php">
          <i class="fas fa-fw fa-street-view"></i>
          <span>View Order</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminViewMessages.php">
          <i class="fas fa-comments fa"></i>
          <span>View Messages</span></a>
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome, <br>
                <u><?php
                 echo $_SESSION['email'];
                ?></u></span>
                <img class="img-profile rounded-circle" src="img\admin.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
            <h1 class="h3 mb-0 text-gray-800">Add Book</h1>
          </div>
          <hr class="sidebar-divider">

            <!-- Content Column -->
            <div class="col-lg-12 mb-8">

            <h1 class="h3 mb-2 text-gray-800">Enter the details:</h1>
            <form method="POST">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Book ID</label>
                  <input type="text" class="form-control" name="bookid" placeholder="Book Id">
                </div>
                <div class="form-group col-md-12">
                  <label>Book Title</label>
                  <input type="text" class="form-control" name="booktitle" placeholder="Book Title">
                </div>
              </div>
              <div class="form-group">
                <label>Author Name</label>
                <input type="text" class="form-control" name="bookauthname" placeholder="Author Name">
              </div>
              <div class="form-group">
                <label>Cost</label>
                <input type="text" class="form-control" name="bookcost" placeholder="Cost">
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Quantity</label>
                  <input type="text" class="form-control" name="bookquantity" placeholder="Quantity">
                </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit Here</button>
              </div>
            </form>
            

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
          <a class="btn btn-primary" href="../../../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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

</body>

</html>
<?php
}
else {
  echo "<script>
        alert('Email & Password Not Authenticated!');
        window.location.href='../../Login/adminLogin.php';
        </script>";
}
?>



