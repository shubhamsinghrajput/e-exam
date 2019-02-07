<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> DEO - Wrong Entry List</title>

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
    
    
    <style>
        .modal-full {
            min-width: 80%;
            margin-top: 2%;
        }
    </style>

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
                        <a href="dashboard-deo.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Wrong Entry By DEO</li>
                </ol>


                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Entry for review</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Exam</th>
                                        <th>Subject</th>
                                        <th>Book</th>
                                        <th>Chap</th>
                                        <th>Q.no</th>
                                        <th>Que</th>
                                        <th>Ans</th>
                                        <th>Opt 1</th>
                                        <th>Opt 2</th>
                                        <th>Opt 3</th>
                                        <th>Opt 4</th>
                                        <th>Explanation</th>
                                        <th>Submit</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Exam</th>
                                        <th>Subject</th>
                                        <th>Book</th>
                                        <th>Chap</th>
                                        <th>Q.no</th>
                                        <th>Que</th>
                                        <th>Ans</th>
                                        <th>Opt 1</th>
                                        <th>Opt 2</th>
                                        <th>Opt 3</th>
                                        <th>Opt 4</th>
                                        <th>Explanation</th>
                                        <th>Submit</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Ssc</td>
                                        <td>English</td>
                                        <td>Model Book 1</td>
                                        <td>13</td>
                                        <td>24</td>
                                        <td>Integration Specialist</td>
                                        <td>b</td>
                                        <td>Experience in ECO systems</td>
                                        <td>Experience in melding existing systems</td>
                                        <td>Experience in systems</td>
                                        <td>Experience systems</td>
                                        <td>Web integration specialist. A person with experience in melding existing systems with the Web.</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ssc</td>
                                        <td>English</td>
                                        <td>Model Book 1</td>
                                        <td>13</td>
                                        <td>24</td>
                                        <td>Integration Specialist</td>
                                        <td>b</td>
                                        <td>Experience in ECO systems</td>
                                        <td>Experience in melding existing systems</td>
                                        <td>Experience in systems</td>
                                        <td>Experience systems</td>
                                        <td>Web integration specialist. A person with experience in melding existing systems with the Web.</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                Edit
                                            </button>
                                        </td>
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
    
    <!-- Edit board Modal -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-full modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form autocomplete="off" class="form" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name of the test</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="SSC">
                                                SSC
                                            </option>
                                            <option value="AIIMS">
                                                AIIMS
                                            </option>
                                            <option value="UPSC">
                                                UPSC
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Subject</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="English">
                                                English
                                            </option>
                                            <option value="General Knowledge">
                                                General Knowledge
                                            </option>
                                            <option value="Reasoning">
                                                Reasoning
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Book</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="Book 1">
                                                Book 1
                                            </option>
                                            <option value="General Book 2">
                                                General Book 2
                                            </option>
                                            <option value="Book 3">
                                                Book 3
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Difficulty Level</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="Low">
                                                Low
                                            </option>
                                            <option value="Medium">
                                                Medium
                                            </option>
                                            <option value="High">
                                                High
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr class="my-4">
                    <form autocomplete="off" class="form" role="form">
                        <div class="col-lg-12 row">
                            <div class="col-lg-7">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Chapter</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="Chapter 1">
                                                Chapter 1
                                            </option>
                                            <option value="Chapter 2">
                                                Chapter 2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Type of Question</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" id="" name="" size="0">
                                            <option value="Text">
                                                Text
                                            </option>
                                            <option value="Image">
                                                Image
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-12 col-form-label form-control-label border border-secondary">Question No. : 01</label>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <input class="form-control" type="text" placeholder="Please Enter Question Here" id="" name="">
                                    </div>

                                    <label class="col-1 col-form-label form-control-label">A</label>
                                    <div class="col-11">
                                        <input class="form-control" type="text" placeholder="Option A" id="" name="">
                                    </div>

                                    <label class="col-1 col-form-label form-control-label">B</label>
                                    <div class="col-11">
                                        <input class="form-control" type="text" placeholder="Option B" id="" name="">
                                    </div>

                                    <label class="col-1 col-form-label form-control-label">C</label>
                                    <div class="col-11">
                                        <input class="form-control" type="text" placeholder="Option C" id="" name="">
                                    </div>

                                    <label class="col-1 col-form-label form-control-label">D</label>
                                    <div class="col-11">
                                        <input class="form-control" type="text" placeholder="Option D" id="" name="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Time</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Time" id="" name="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Answer</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Answer" id="" name="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Mark</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" placeholder="Mark" id="" name="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Explanation</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="explanation" name="" rows="5" placeholder="Describe explanation here..."></textarea>
                                    </div>
                                </div>

                                <button class="btn btn-info btn-block" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    </div>

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