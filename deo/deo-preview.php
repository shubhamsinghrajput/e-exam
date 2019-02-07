<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top" class="pd-fix">

    <?php include 'nav.php';?>

    <div id="wrapper">

        <!-- Sidebar -->

        <div class="sidebar-wapper ">
            <button class="btn btn-link btn-sm d-none d-md-inline ml-3 text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fa fa-exchange-alt"></i>
            </button>
            <ul class="sidebar navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Login Screens:</h6>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Other Pages:</h6>
                        <a class="dropdown-item" href="404.html">404 Page</a>
                        <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- SELECT BOX WRAP-->
                 <div class="row pb-3">
                     <div class="col">
                         <select name="exam" id="exam">
                             <option>SSc </option>
                             <option>NDA </option>
                         </select>
                     </div>
                     <div class="col">
                         <select name="sebject" id="sebject">
                             <option>English </option>
                             <option>GK </option>
                         </select>
                     </div>
                     <div class="col">
                         <select name="book" id="book">
                             <option>First </option>
                             <option>Second </option>
                         </select>
                     </div>
                 </div>

                <!-- Area Chart Example-->
                

                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Preview Table</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered td-none" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Subject</th>
                                        <th>Book Name</th>
                                        <th>DOE Name</th>
                                        <th class="text-center">Go to Page</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Exam Name</th>
                                        <th>Subject</th>
                                        <th>Book Name</th>
                                        <th>DOE Name</th>
                                        <th class="text-center">Detail Page</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>SSc</td>
                                        <td>English</td>
                                        <td>Simple Set</td>
                                        <td>Rishi</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>NDA</td>
                                        <td>GK</td>
                                        <td>Simple Set</td>
                                        <td>Ram</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>SSc</td>
                                        <td>English</td>
                                        <td>Simple Set</td>
                                        <td>Rishi</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>NDA</td>
                                        <td>GK</td>
                                        <td>Simple Set</td>
                                        <td>Ram</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>SSc</td>
                                        <td>English</td>
                                        <td>Simple Set</td>
                                        <td>Rishi</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>NDA</td>
                                        <td>GK</td>
                                        <td>Simple Set</td>
                                        <td>Ram</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>SSc</td>
                                        <td>English</td>
                                        <td>Simple Set</td>
                                        <td>Rishi</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                    <tr>
                                        <td>NDA</td>
                                        <td>GK</td>
                                        <td>Simple Set</td>
                                        <td>Ram</td>
                                        <td><a href="#" class="d-block text-center">Go</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2018</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script src="../assets/js/demo/chart-area-demo.js"></script>

</body>

</html>