<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> Admin - Project  </title>

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
            .form-group input, textarea {
                outline: 0;
                border-width: 0 0 2px;
                border-color: #ddd;
            }
            .form-group input,textarea:focus {
                border-color: green;
                outline-style:none;
                box-shadow:none;
                /*            border-color:transparent;*/
            }
        </style>
        <style>
            ::placeholder {
                color: #999 !important;
                opacity: 1; /* Firefox */
            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: #999 !important;
            }

            ::-ms-input-placeholder { /* Microsoft Edge */
                color: #999 !important;
            }
        </style>
        <style>
            #output {
                padding: 20px;
                background: #dadada;
            }

            form {
                margin-top: 20px;
            }

            select {
                width: 100%;
            }
        </style>
        <style>
            #one
            {
                margin-top:0px;
                box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.2);
            }
            .it .btn-orange
            {
                background-color: transparent;
                border-color: #777!important;
                color: #777;
                text-align: left;
                width:100%;
            }
            .it input.form-control
            {
                height: 54px;
                border:none;
                margin-bottom:0px;
                border-radius: 0px;
                border-bottom: 1px solid #ddd;
                box-shadow: none;
            }
            .it .form-control:focus
            {
                border-color: #ff4d0d;
                box-shadow: none;
                outline: none;
            }
            .fileUpload {
                position: relative;
                overflow: hidden;
                margin: 10px;
            }
            .fileUpload input.upload {
                position: absolute;
                top: 0;
                right: 0;
                margin: 0;
                padding: 0;
                font-size: 20px;
                cursor: pointer;
                opacity: 0;
                filter: alpha(opacity=0);
            }
            .it .btn-new, .it .btn-next
            {
                margin: 30px 0px;
                border-radius: 0px;
                background-color: #333;
                color: #f5f5f5;
                font-size: 16px;
                width: 155px;
            }
            .it .btn-next
            {
                background-color: #ff4d0d;
                color: #fff;
            }
            .it .btn-check
            {
                cursor:pointer;
                line-height:54px;
                color:red;
            }
            .it .uploadDoc
            {
                margin-bottom: 20px;
            }
            .it .uploadDoc
            {
                margin-bottom: 20px;
            }
            .it .btn-orange img {
                width: 30px;
            }
            p
            {
                font-size:16px;
                text-align:center;
                margin:30px 0px;
            }
            .it #uploader .docErr
            {
                position: absolute;
                right:auto;
                left: 10px;
                top: -56px;
                padding: 10px;
                font-size: 15px;
                background-color: #fff;
                color: red;
                box-shadow: 0px 0px 7px 2px rgba(0,0,0,0.2);
                display: none;
            }
            .it #uploader .docErr:after
            {
                content: '\f0d7';
                display: inline-block;
                font-family: FontAwesome;
                font-size: 50px;
                color: #fff;
                position: absolute;
                left: 30px;
                bottom: -40px;
                text-shadow: 0px 3px 6px rgba(0,0,0,0.2);
            }
        </style>

    </head>

    <body id="page-top" class="pd-fix project">
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
                        <li class="breadcrumb-item"><a href="projects.php">Projects</a></li>
                        <li class="breadcrumb-item active">Project</li>
                    </ol>
                    <!--------------------------------------------------------------------------------->
                    <ul class="nav nav-tabs bd-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#active"><span>Active</span> <span class="badge badge-danger ">1</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#current"><span>Current</span> <span class="badge badge-danger">1</span></a>
                        <li class="ml-auto"><button class="btn btn-success" href="#" data-toggle="modal" data-target="#addTask"><i class="fa fa-plus-circle"></i> Add Task</button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="active" class="tab-pane active ml-5 mr-5"><br>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="mb-2">Active</h1>
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
                        <div id="current" class="tab-pane fade ml-5 mr-5"><br>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="mb-2">Current</h1>
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
        <!-- Add Project Modal-->
        <div class="modal fade bd-example-modal-lg" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom border-secondary">
                        <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="col-12">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <input type="text" class="form-control" placeholder="What need to be done?" id="task-name" name="task-name">
                                    </div>
                                    <!--------------------------------------------------------------------------------->
                                    <div class="container-fluid mt-3">
                                        <ul class="nav nav-tabs bd-5" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#whowhen"><span><i class="fa fa-user" aria-hidden="true"></i></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#task_description"><span><i class="fa fa-align-left" aria-hidden="true"></i> </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#files"><span>
                                                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                                                    </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#privacy"><span>
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                    </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#priority"><span>
                                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                                    </span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#followers"><span><i class="fa fa-eye" aria-hidden="true"></i></span></a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="whowhen" class="tab-pane active ml-4 mr-4"><br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="col-form-label">Who should do this?</label>
                                                        <input type="text" class="form-control" aria-label="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="col-form-label">Start Date</label>
                                                        <input type="date" class="form-control" aria-label="">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label class="col-form-label">Due Date</label>
                                                        <input type="date" class="form-control" aria-label="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="task_description" class="tab-pane fade ml-4 mr-4"><br>
                                                <div class="row">
                                                    <label for="description" class="col-form-label">Who should be added to this project?</label>
                                                    <div id="output"></div>
                                                    <form method="get">
                                                        <select data-placeholder="Choose tags ..." name="tags[]" multiple class="chosen-select">
                                                            <option value="Engineering">Engineering</option>
                                                            <option value="Carpentry">Carpentry</option>
                                                            <option value="Plumbing">Plumbing</option>
                                                            <option value="Electical">Electrical</option>
                                                            <option value="Mechanical">Mechanical</option>
                                                            <option value="HVAC">HVAC</option>
                                                        </select>
                                                        <input type="submit">
                                                    </form>
                                                    <div class="input-group">
                                                        <select class="selectpicker" multiple data-live-search="true">
                                                            <option>Mustard</option>
                                                            <option>Ketchup</option>
                                                            <option>Relish</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div id="files" class="tab-pane fade ml-4 mr-4"><br>
                                               <div class="row">
                                                   <div class="container">
                                                       <div class="row it">
                                                           <div class="col-sm-12" id="one">
                                                               <p>
                                                                   Please upload documents only in 'pdf', 'docx', 'rtf', 'jpg', 'jpeg', 'png' 'doc' & 'text' format.
                                                               </p><br>
                                                               <div class="row">
                                                                   <div class="col-sm-offset-4 col-sm-4 form-group">
                                                                       <h3 class="text-center">My Documents</h3>
                                                                   </div><!--form-group-->
                                                               </div><!--row-->
                                                               <div id="uploader">
                                                                   <div class="row uploadDoc">
                                                                       <div class="col-sm-3">
                                                                           <div class="docErr">Please upload valid file</div><!--error-->
                                                                           <div class="fileUpload btn btn-orange">
                                                                               <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                                               <span class="upl" id="upload">Upload document</span>
                                                                               <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                                                                           </div><!-- btn-orange -->
                                                                       </div><!-- col-3 -->
                                                                       <div class="col-sm-8">
                                                                           <input type="text" class="form-control" name="" placeholder="Note">
                                                                       </div><!--col-8-->
                                                                       <div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                                   </div><!--row-->
                                                               </div><!--uploader-->
                                                               <div class="text-center">
                                                                   <a class="btn btn-new"><i class="fa fa-plus"></i> Add new</a>
                                                                   <a class="btn btn-next"><i class="fa fa-paper-plane"></i> Submit</a>
                                                               </div>
                                                           </div><!--one-->
                                                       </div><!-- row -->
                                                   </div><!-- container -->                                                   
                                               </div>
                                            </div>
                                            <div id="privacy" class="tab-pane fade ml-4 mr-4"><br>
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
                                            <div id="priority" class="tab-pane fade ml-4 mr-4"><br>
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
                                            <div id="followers" class="tab-pane fade ml-4 mr-4"><br>
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
        <script src="assets/js/site.js"></script>

        <script>
            $(document).ready(function() {
                $('.popup-btn').click(function() {
                    $(this).next(".popup-content").toggle();
                });
            });
        </script>
        <script>
            document.getElementById('output').innerHTML = location.search;
            $(".chosen-select").chosen();
        </script>
        
        <script>
            var fileTypes = ['pdf', 'docx', 'rtf', 'jpg', 'jpeg', 'png', 'txt', 'doc'];  //acceptable file types
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var extension = input.files[0].name.split('.').pop().toLowerCase(),  //file extension from input file
                        isSuccess = fileTypes.indexOf(extension) > -1;  //is extension in acceptable types

                    if (isSuccess) { //yes
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            if (extension == 'pdf'){
                                $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/179/179483.svg');
                            }
                            else if (extension == 'docx'){
                                $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/281/281760.svg');
                            }
                            else if (extension == 'rtf'){
                                $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136539.svg');
                            }
                            else if (extension == 'png'){ $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136523.svg'); 
                                                        }
                            else if (extension == 'jpg' || extension == 'jpeg'){
                                $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136524.svg');
                            }
                            else if (extension == 'txt'){
                                $(input).closest('.fileUpload').find(".icon").attr('src','https://image.flaticon.com/icons/svg/136/136538.svg');
                            }
                            else {
                                //console.log('here=>'+$(input).closest('.uploadDoc').length);
                                $(input).closest('.uploadDoc').find(".docErr").slideUp('slow');
                            }
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                    else {
                        //console.log('here=>'+$(input).closest('.uploadDoc').find(".docErr").length);
                        $(input).closest('.uploadDoc').find(".docErr").fadeIn();
                        setTimeout(function() {
                            $('.docErr').fadeOut('slow');
                        }, 9000);
                    }
                }
            }
            $(document).ready(function(){

                $(document).on('change','.up', function(){
                    var id = $(this).attr('id'); /* gets the filepath and filename from the input */
                    var profilePicValue = $(this).val();
                    var fileNameStart = profilePicValue.lastIndexOf('\\'); /* finds the end of the filepath */
                    profilePicValue = profilePicValue.substr(fileNameStart + 1).substring(0,20); /* isolates the filename */
                    //var profilePicLabelText = $(".upl"); /* finds the label text */
                    if (profilePicValue != '') {
                        //console.log($(this).closest('.fileUpload').find('.upl').length);
                        $(this).closest('.fileUpload').find('.upl').html(profilePicValue); /* changes the label text */
                    }
                });

                $(".btn-new").on('click',function(){
                    $("#uploader").append('<div class="row uploadDoc"><div class="col-sm-3"><div class="docErr">Please upload valid file</div><!--error--><div class="fileUpload btn btn-orange"> <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon"><span class="upl" id="upload">Upload document</span><input type="file" class="upload up" id="up" onchange="readURL(this);" /></div></div><div class="col-sm-8"><input type="text" class="form-control" name="" placeholder="Note"></div><div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div></div>');
                });

                $(document).on("click", "a.btn-check" , function() {
                    if($(".uploadDoc").length>1){
                        $(this).closest(".uploadDoc").remove();
                    }else{
                        alert("You have to upload at least one document.");
                    } 
                });
            });
        </script>


    </body>

</html>