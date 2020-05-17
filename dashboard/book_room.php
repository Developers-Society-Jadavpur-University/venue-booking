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
                                                        <h4>Room Booking</h4>
                                                        <span>The requisition form needs to be filled in order to place a request for booking room</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Room Bookings</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Add New</a>
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
                                                <!-- Form wizard with validation card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Book Now</h5>
                                                        <span>All * marked fields are mandatory</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="wizard">
                                                                    <section>
                                                                        <form class="wizard-form" id="example-advanced-form" action="#">
                                                                            <h3>Applicant Information</h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="userName-2" class="block">Full Name *</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-4">
                                                                                        <input id="userName-2" name="userName" type="text" class="required form-control">
                                                                                    </div>
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email-2" class="block">Email *</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-4">
                                                                                        <input id="email-2" name="email" type="email" class="required form-control">
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="applicant-type" class="block">Applying as *</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-4">
                                                                                        <select name="select" id="applicant-type" class=" required form-control">
                                                                                            <option value="opt1">Select</option>
                                                                                            <option value="opt2">Individual Student Body</option>
                                                                                            <option value="opt3">Club/Society</option>
                                                                                            <option value="opt4">Department</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-2">
                                                                                        <label for="applicant-detail" class="block">Name of Applicant Organisation/Group *</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-4">
                                                                                        <input id="applicant-detail" name="applicant-detail" type="text" class="required form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12 col-lg-2">
                                                                                        <label for="phone" class="block">Phone *</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-4">
                                                                                        <input id="phone" name="phone" type="number" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Venue Details </h3>
                                                                            <fieldset>
                                                                                
                                                                            </fieldset>
                                                                            <h3> Guest Details </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-12 col-xl-6 m-b-30">
                                                                                        <h4 class="sub-title">Select all the categories of guests applicable</h4>
                                                                                        <div class="border-checkbox-section">
                                                                                            
                                                                                            <div class="border-checkbox-group border-checkbox-group-info">
                                                                                                <input class="border-checkbox" type="checkbox" id="checkbox1">
                                                                                                <label class="border-checkbox-label" for="checkbox1">JU students and/or faculty</label>
                                                                                            </div>
                                                                                            <div class="border-checkbox-group border-checkbox-group-info">
                                                                                                <input class="border-checkbox" type="checkbox" id="checkbox2">
                                                                                                <label class="border-checkbox-label" for="checkbox2">Students and/or faculty from other institutions</label>
                                                                                            </div>
                                                                                            <div class="border-checkbox-group border-checkbox-group-info">
                                                                                                <input class="border-checkbox" type="checkbox" id="checkbox3">
                                                                                                <label class="border-checkbox-label" for="checkbox3">Business Professionals</label>
                                                                                            </div>
                                                                                            <div class="border-checkbox-group border-checkbox-group-info">
                                                                                                <input class="border-checkbox" type="checkbox" id="checkbox4">
                                                                                                <label class="border-checkbox-label" for="checkbox4">Authority Personnel</label>
                                                                                            </div>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-3">
                                                                                        <label for="fooding" class="block">Are there any plans for fooding?</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-9">
                                                                                        <select name="select" id="fooding" class=" required form-control">
                                                                                            <option value="opt2">Yes</option>
                                                                                            <option value="opt3">No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-12 col-lg-3">
                                                                                            <label for="number-guests" class="block">Number of guests expected</label>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-lg-9">
                                                                                        <input id="number-guests" name="applicant-detail" type="number" class="required form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Review </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Company-2" class="block">Event:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Company-2" name="Company:" type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="CountryW-2" class="block">Guest</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="CountryW-2" name="Country" type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Position-2" class="block">Venue</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Position-2" name="Position" type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Form wizard with validation card end -->
                                               
                                            </div>
                                        </div>
                                        <!-- Edit With Click card start -->
                                        <div class="card" style="display:block;">
                                            <div class="card-header">
                                                <h5>Add your desired Room(s) and Venue</h5>
                                                <span>Click on cell to perform edit action then Enter for save</span>
                                                <span>Click on "Add Row" to add an entry and on "Delete Row" to delete the last entry</span>

                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered" id="example-1">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Venue</th>
                                                                <th>Room</th>
                                                                <th>Capacity</th>
                                                                <th>A/C Required</th>
                                                                <th>Check-In (e.g. dd/mm/yyyy hh:mm:AM/PM)</th>
                                                                <th>Check-Out (e.g. dd/mm/yyyy hh:mm:AM/PM)</th>
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
    <script type="text/javascript" src="..\files\assets\pages\edit-table\editable2.js"></script>
    <!-- Switch component js -->
    <script type="text/javascript" src="..\files\bower_components\switchery\js\switchery.min.js"></script>
    <!-- Tags js -->
    <script type="text/javascript" src="..\files\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
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