<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin - Review</title>

    <!-- Bootstrap core CSS-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="assets/css/everything.css" rel="stylesheet">


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
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>All Projects</span></a><span class="badge badge-danger">5</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
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

                <!----------------------------------------->

                <ul class="nav nav-tabs bd-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#activeTasks"><span>Active Tasks</span> <span class="badge badge-danger ">1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#currentTasks"><span>Completed Tasks</span> <span class="badge badge-danger">1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#milestones"><span>Milestones</span> <span class="badge badge-danger">1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#files"><span>Files</span> <span class="badge badge-danger">1</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#time"><span>Time</span> <span class="badge badge-danger">1</span></a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="activeTasks" class="tab-pane active ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Active Tasks</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                </div>
                                <span>AIIMS - (Vistasoft) - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                            </div>
                        </div>
                    </div>
                    <div id="currentTasks" class="tab-pane fade ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Current Tasks</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                    <span>AIIMS - (Vistasoft) - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="milestones" class="tab-pane fade ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Milestones</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                    <span>AIIMS - (Vistasoft) - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="files" class="tab-pane fade ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Files</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                    <span>AIIMS - (Vistasoft) - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="time" class="tab-pane fade ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Time</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                    <span>AIIMS - (Vistasoft) - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                                </div>
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

    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="../assets/js/sb-admin.min.js"> </script>
    <script src="assets/js/site.js"></script>


    <script>
        $(document).ready(function() {
            $('.popup-btn').click(function() {
                $(this).next(".popup-content").toggle();
            });
        });
    </script>



</body>

</html>