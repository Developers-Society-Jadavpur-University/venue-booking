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
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\pages\j-pro\css\j-pro-modern.css">
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
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Book Now</h5>
                                                        <span>Room Booking Requisition Form</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="j-pro/php/action.php" method="post" class="j-pro j-multistep" id="j-pro" novalidate="">
                                                                <!-- end /.header-->
                                                                <div class="j-content">
                                                                    <fieldset>
                                                                        <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                                                            <span>Step 1/3 - Personal info</span>
                                                                        </div>
                                                                        <!-- start name -->
                                                                        <div class="j-unit">
                                                                            <label class="j-label">Your name</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-left" for="name">
                                                                                    <i class="icofont icofont-ui-user"></i>
                                                                                </label>
                                                                                <input type="text" id="name" name="name">
                                                                            </div>
                                                                        </div>
                                                                        <!-- end name -->
                                                                        <!-- start email phone -->
                                                                        <div class="j-row">
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Your email</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-left" for="email">
                                                                                        <i class="icofont icofont-envelope"></i>
                                                                                    </label>
                                                                                    <input type="email" id="email" name="email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Phone/Mobile</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-left" for="phone">
                                                                                        <i class="icofont icofont-phone"></i>
                                                                                    </label>
                                                                                    <input type="text" id="phone" name="phone">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end email phone -->
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                                                            <span>Step 2/3 - Booking details</span>
                                                                        </div>
                                                                        
                                                                        <!-- start guests -->
                                                                        <div class="j-row">
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Approximate Number of guests</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-left" for="adults">
                                                                                        <i class="icofont icofont-waiter"></i>
                                                                                    </label>
                                                                                    <input type="text" id="adults" name="adults">
                                                                                    <span class="j-tooltip j-tooltip-right-top">Number of guests</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Select Event Type</label>
                                                                                <div class="j-input">
                                                                                   
                                                                                    <!-- <input type="text" id="children" name="children"> -->
                                                                                    <select name="select" id="children">
                                                                                        <option value="opt2">Fest</option>
                                                                                        <option value="opt3">Official Event</option>
                                                                                        <option value="opt4">Freshers' Welcome</option>
                                                                                        <option value="opt5">Other Departmental Event</option>
                                                                                        <option value="opt6">Others</option>
                                                                                    </select>
                                                                                    <span class="j-tooltip j-tooltip-right-top">Select the type of event</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- end guests -->
                                                                        <!-- start date -->
                                                                        <div class="j-row">
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Check-in date</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-left" for="date_from">
                                                                                        <i class="icofont icofont-ui-calendar"></i>
                                                                                    </label>
                                                                                    <input type="text" id="date_from" name="date_from" readonly="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="j-span6 j-unit">
                                                                                <label class="j-label">Check-out date</label>
                                                                                <div class="j-input">
                                                                                    <label class="j-icon-left" for="date_to">
                                                                                        <i class="icofont icofont-ui-calendar"></i>
                                                                                    </label>
                                                                                    <input type="text" id="date_to" name="date_to" readonly="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end date -->
                                                                        <div class="j-row">
                                                                        <div class="j-span12 j-unit">
                                                                                <label class="j-label">Purpose (in brief)</label>
                                                                                <div class="j-input">
                                                                                    <textarea type="text" id="purpose" name="purpose" rows="10" cols="12" class="form-control" placeholder="Mention your purpose in brief" required></textarea>
                                                                                    <span class="j-tooltip j-tooltip-right-top">Mention your purpose in brief</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                                                                            <span>Step 3/3 - Comments</span>
                                                                        </div>
                                                                        <!-- start message -->
                                                                        <div class="j-unit">
                                                                            <label class="j-label">Comments/Message</label>
                                                                            <div class="j-input">
                                                                                <textarea spellcheck="false" name="message"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end message -->
                                                                    </fieldset>
                                                                    
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit" class="btn btn-primary j-multi-submit-btn">Confirm Booking</button>
                                                                    <button type="button" class="btn btn-primary j-multi-next-btn">Next</button>
                                                                    <button type="button" class="btn btn-default m-r-20 j-multi-prev-btn">Back</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!-- j-pro js -->
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.ui.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\jquery.j-pro.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="..\files\assets\pages\j-pro\js\custom\booking-multistep.js"></script>

    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

</body>

</html>