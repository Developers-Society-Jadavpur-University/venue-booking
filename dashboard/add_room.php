<!DOCTYPE html>
<html lang="en">

<head>
    <title>VBMS</title>
    <!-- Favicon icon -->
    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\j-pro-modern.css">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\switchery\css\switchery.min.css">
    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap-tagsinput\css\bootstrap-tagsinput.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\datedropper\css\datedropper.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery.steps\css\jquery.steps.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- preloader included -->
    <?php require_once 'preloader.php' ?>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <!-- <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Logo"> -->
                            Jadavpur University VBMS
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i
                                                class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i
                                                class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">1</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius"
                                                    src="..\files\assets\images\avatar-4.jpg"
                                                    alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Demo Title</h5>
                                                    <p class="notification-msg">This is a demo description for a
                                                        notification</p>
                                                    <span class="notification-time">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="..\files\assets\images\avatar-4.jpg" class="img-radius"
                                            alt="User-Profile-Image">
                                        <span>Demo User</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!--sidebar file included -->
                    <?php require_once 'sidebar.php'?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                     <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Room Creation</h4>
                                                        <span>Fill the following form to add one(or more) room(s) to existing venue</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="./index.php"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Rooms</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add New Room</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->


                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Post comment card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add New Room</h5>
                                                        <span>Select the venue and add room(s)</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form method="post" class="j-pro" id="j-pro" novalidate="">
                                                                <div class="j-content">
                                                                    <!-- start row -->
                                                                    <div class="j-row">
                                                                        <!-- start venue selection -->
                                                                        <div class="j-unit">
                                                                            <label class="j-input j-select">
                                                                                <select name="position">
                                                                                    <option value="" selected="">Choose Venue</option>
                                                                                    <option value="Gandhi Bhavan">Gandhi Bhavan</option>
                                                                                    <option value="TEQIP Building">TEQIP Building</option>
                                                                                    <option value="K.P. Basu Memorial Hall">K.P. Basu Memorial Hall</option>
                                                                                </select>
                                                                                <i></i>
                                                                            </label>
                                                                        </div>
                                                                    <!-- end venue selection -->
                                                                    </div>
                                                                    <!-- end name -->
                                                                    
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="button" id="getrooms" class="btn btn-primary" onclick = "getRooms();">Get Rooms</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post comment card end -->  
                                               
                                            </div>
                                        </div>
                                        <!-- Edit With Click card start -->
                                        <div id="room-add-card" class="card" style="display:none;">
                                            <div class="card-header">
                                                <h5>Add the room(s) under this venue</h5>
                                                <span>Click on cell to perform edit action then Enter for save</span>
                                                <span>Click on "Add Row" to add an entry and on "Delete Row" to delete the last entry</span>

                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered" id="example-1">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Room</th>
                                                                <th>Capacity</th>
                                                                <th>A/C Installed</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-primary waves-effect waves-light add" onclick="add_row();">Add Row
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light delete" onclick="delete_row();">Delete Row
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Edit With Click card end -->
                                    </div>
                                    <!-- Page body end -->
                                </div>
                                <!-- <div id="styleSelector">
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required Jquery -->
    <!-- <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script> -->
    <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- Editable-table js -->
    <script type="text/javascript" src="..\files\assets\pages\edit-table\jquery.tabledit.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\edit-table\venue-add.js"></script>
    <!-- Switch component js -->
    <script type="text/javascript" src="..\files\bower_components\switchery\js\switchery.min.js"></script>
    <!-- Tags js -->
    <script type="text/javascript" src="..\files\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    <!-- j-pro js -->
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.ui.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.j-pro.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="..\files\bower_components\datedropper\js\datedropper.min.js"></script>
    <!--Forms - Wizard js-->
    <script src="..\files\bower_components\jquery.cookie\js\jquery.cookie.js"></script>
    <script src="..\files\bower_components\jquery.steps\js\jquery.steps.js"></script>
    <script src="..\files\bower_components\jquery-validation\js\jquery.validate.js"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\form-validation\validate.js"></script>
     <!-- Custom js -->
     <script src="..\files\assets\pages\forms-wizard-validation\form-wizard.js"></script>
    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

</body>

</html>