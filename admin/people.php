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
    <link href="assets/css/people.css" rel="stylesheet">


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
                        <a class="nav-link active" data-toggle="tab" href="#compines">compines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#people">people</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#login-history">login history</a>
                    </li>
                    
                    <li class="ml-auto"><button class="btn btn-success" href="#" data-toggle="modal" data-target="#addDAO"><i class="fa fa-plus-circle"></i> Add Project</button>
                    </li>
                </ul>
               

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="compines" class="tab-pane active ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Active Companies</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                </div>
                                <span>AIIMS - (Vistasoft)llllllll - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
                            </div>
                        </div>
                    </div>
                    <div id="people" class="tab-pane fade"><br>
                        <div class="row">
                            <div class="col-12">
                                <!--=============DATA TABEL START=============-->
                                <div class="dataTabe-wrapper">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>

                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>

                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>

                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!--=============DATA TABEL START=============-->
                            </div>
                        </div>
                    </div>
                    <div id="login-history" class="tab-pane fade ml-5 mr-5"><br>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="mb-2">Milestones</h1>
                                <div class="popup-wrapper">
                                    <a class="text-dark popup-btn" href="#"> <i class="fa fa-ellipsis-v mr-2" aria-hidden="true"></i></a>
                                    <div class="popup-content alert alert-secondary alert-dismissible fade show">
                                        <h1>hello World</h1>
                                    </div>
                                    <span>AIIMS - (Vistasoft)hhhhhhhhhhhhhhhh - <small class="text-muted">Updated, Thrusday Jan 24 2019</small></span>
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
    
    <div class="modal fade bd-example-modal-lg" id="addDAO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom border-secondary">
                    <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="col-12">
                        <form>
                            <div class="form-group">

                                <div class="row">
                                    <label for="project-name" class="col-form-label">What's the Project Name?</label>
                                    <input type="text" class="form-control" id="project-name">
                                </div>
                                <!--------------------------------------------------------------------------------->

                                <div class="container-fluid mt-3">
                                    <ul class="nav nav-tabs bd-5" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#description"><span>Description</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#people"><span>People</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#dates"><span>Dates</span></a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane active ml-4 mr-4"><br>
                                            <div class="row">
                                                <label for="description" class="col-form-label">Provide a Description (Optional):</label>
                                                <textarea class="form-control" id="description"></textarea>
                                            </div>
                                        </div>
                                        <div id="people" class="tab-pane fade ml-4 mr-4"><br>
                                            <div class="row">
                                                <label for="description" class="col-form-label">Who should be added to this project?</label>
                                                <div class="input-group">

                                                    <input type="text" class="form-control" placeholder="Search existing users..." aria-label="Search existing users...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dates" class="tab-pane fade ml-4 mr-4"><br>
                                            <div class="row">
                                                <h4 class="text-muted">Project Dates (Optional)</h4>
                                                <label for="description" class="col-form-label text-muted">Adding a start and end date provides your team a useful way to see the duration of this project which helps with planning your tasks and milestones</label>
                                            </div>

                                            <div class="row mt-10">
                                                <div class="col-md-4"><span class="text-muted">Start Date</span>
                                                    <input type="date" class="form-control" aria-label="">
                                                </div>

                                                <div class="col-md-4"><span class="text-muted">End Date</span>
                                                    <input type="date" class="form-control" aria-label="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer border-top border-secondary">
                    <button class="btn btn-info mr-auto" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="button">Add Project</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
   
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="../assets/js/sb-admin.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <script src="assets/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-btn').click(function() {
                $(this).next(".popup-content").toggle();
            });


            /*----------DATA TABLE----------*/

            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');


        });
    </script>



</body>

</html>