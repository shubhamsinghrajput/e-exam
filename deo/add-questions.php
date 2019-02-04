<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> DEO - Add Questins</title>

    <!-- Bootstrap core CSS-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="assets/css/projects.css" rel="stylesheet">

    <style>
        .right{
           color:green;
            font-size:30px;
            text-align:center;
        }
        .wrong{
            color:red; 
            font-size:30px;
            text-align:center;
        }
        th { 
            text-align:center;
        }    
        hr{
            background: #ccc;
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
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>All Projects</span></a><span class="badge badge-danger">5</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>No Category</span></a><span class="badge badge-danger">10</span>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>

                <!--------------------------------------------------------------------------------->
                <div class="col-lg-6">
                    <form autocomplete="off" class="form" role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name of the test</label>
                            <div class="col-lg-9">
                                <select class="form-control" id="user_time_zone" size="0">
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
                                <select class="form-control" id="user_time_zone" size="0">
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
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Difficulty Level</label>
                            <div class="col-lg-9">
                                <select class="form-control" id="user_time_zone" size="0">
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
                    </form>
                </div>
                <hr class="my-4">
                <form autocomplete="off" class="form" role="form">
                    <div class="col-lg-12 row">
                        <div class="col-lg-7">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Type of Question</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="user_time_zone" size="0">
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
                                    <textarea class="form-control" id="explanation" name=""
                                              rows="3" placeholder="Describe explanation here..."></textarea>
                                </div>
                            </div>
                            
                            <button class="btn btn-info btn-block" type="button">Submit</button>
                        </div>
                    </div>
                </form>
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

    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Add Project Modal-->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.popup-btn').click(function() {
                $(this).next(".popup-content").toggle();
            });
        });
    </script>


</body>

</html>