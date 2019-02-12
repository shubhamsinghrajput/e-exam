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
    
    <style>
        th{
        text-align: left !important;
        }
    </style>


</head>
 
<body id="page-top" class="pd-fix people">
 
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
                        <i class="fas fa-fw fa-users"></i>
                        <span>All DEOs</span></a><span class="badge badge-danger">25</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Working DEOs</span></a><span class="badge badge-danger">10</span>
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
                        <a class="nav-link active" data-toggle="tab" href="#people">people</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#login-history">login history</a>
                    </li>
                    <li class="ml-auto"><button class="btn btn-success" href="#" data-toggle="modal" data-target="#addDAO"><i class="fa fa-plus-circle"></i> Add Project</button>
                    </li>
                </ul>
               

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="people" class="tab-pane active"><br>
                        <div class="row">
                            <div class="col-12">
                                <!--=============DATA TABEL START=============-->
                                <div class="dataTabe-wrapper">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL no.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Ph. no</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>Tiger@yopmail.com</td>
                                                <td>9959857458</td>
                                            </tr>
                                            <tr>
                                              <td>2</td>
                                                <td>Colleen Hurst</td>
                                                <td>Colleen@yopmail.com</td>
                                                <td>9856236547</td>
                                            </tr>

                                            <tr>
                                              <td>3</td>
                                                <td>Michelle House</td>
                                                <td>Michelle@yopmail.com</td>
                                                <td>8869857412</td>
                                            </tr>

                                            <tr>
                                               <td>4</td>
                                                <td>Olivia Liang</td>
                                                <td>Olivia@yopmail.com</td>
                                                <td>8869587412</td>
                                            </tr>
                                            <tr>
                                               <td>5</td>
                                                <td>Bruno Nash</td>
                                                <td>Bruno@yopmail.com</td>
                                                <td>7758956984</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SL no.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Ph. No</th>
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
                                <!--=============DATA TABEL START=============-->
                                <div class="dataTabe-wrapper">
                                    <table class="table table-striped table-bordered" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>SL no.</th>
                                                <th>DEO Name</th>
                                                <th>Login Time</th>
                                                <th>Log Out Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>10:15 am</td>
                                                <td>06:00 pm</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Colleen Hurst</td>
                                                <td>10:15 am</td>
                                                <td>06:00 pm</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Michelle House</td>
                                                <td>10:15 am</td>
                                                <td>06:00 pm</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Olivia Liang</td>
                                                <td>10:15 am</td>
                                                <td>06:00 pm</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Bruno Nash</td>
                                                <td>10:15 am</td>
                                                <td>06:00 pm</td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>SL no.</th>
                                                <th>DEO Name</th>
                                                <th>Login Time</th>
                                                <th>Log Out Time</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!--=============DATA TABEL START=============-->
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
                    <h5 class="modal-title" id="exampleModalLabel">Add People</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="col-12">
                        <form>
                            <div class="form-group">

                                <div class="row">
                                    <label for="deo-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="deo-name">
                                    
                                    <label for="deo-email" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="deo-email">
                                    
                                    <label for="deo-ph" class="col-form-label">Ph. no.</label>
                                    <input type="text" class="form-control" id="deo-ph">
                                </div>
                                <!--------------------------------------------------------------------------------->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer border-top border-secondary">
                    <button class="btn btn-info mr-auto" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="button">Add DEO</button>
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
    <script src="assets/js/site.js"></script> 
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