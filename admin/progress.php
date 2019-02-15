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
                    <li class="breadcrumb-item active">Progress</li>
                </ol>

                <!-- Icon Cards-->


                <!-- Area Chart Example-->

                <!-- DataTables Example -->
                <div class="card mb-3">

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link text-dark" data-toggle="collapse" href="#collapse1">
                                    Started
                                </a>
                            </div>
                            <div id="collapse1" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2019</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link text-dark" data-toggle="collapse" href="#collapse2">
                                    Late
                                </a>
                            </div>
                            <div id="collapse2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link text-dark" data-toggle="collapse" href="#collapse3">
                                    Today
                                </a>
                            </div>
                            <div id="collapse3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link text-dark" data-toggle="collapse" href="#collapse4">
                                    Upcoming
                                </a>
                            </div>
                            <div id="collapse4" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link text-dark" data-toggle="collapse" href="#collapse5">
                                    Milestones
                                </a>
                            </div>
                            <div id="collapse5" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>DEO</th>
                                                    <th>Project</th>
                                                    <th>Task</th>
                                                    <th>Start date</th>
                                                    <th>End date</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Abc</td>
                                                    <td>Uplading Data</td>
                                                    <td>15-02-2018</td>
                                                    <td>15-02-2050</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


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


        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/site.js"></script>


</body>

</html>