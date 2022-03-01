<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="../../admin-css/style.css" rel="stylesheet" type="text/css">
    <link href="../../admin-css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="../../admin-css/chosen.min.css" rel="stylesheet" type="text/css">




    <!-- Include English language -->
    <script src="js/plugins/datepicker/dist/js/i18n/datepicker.en.js"></script>

    <style>
        .page-link {
            background-color: unset !important;
            padding: 6px 12px 6px 12px !important;
            color:white;
            border: none;
        }
        .page-item {
            padding-bottom:4px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
     <div class ="col-sm-12" style="padding-left:0px;padding-right:0px;">
    <div id="main-container">
            <aside id="left-sidebar">
                <div id="nav-brand-container">
                    <div class = "sidebar-row">
                        <a href="../../course" id="nav-brand"> Car Rental
                        </a>
                        <i id="bars" class="fas fa-bars"></i>
                    </div>
                </div>
                    <div id="profile-pic-container">
                        <div class = "sidebar-row">
                            <img src="../../assets/admin.jpg" height="60px" width="60px">
                            <ul id="button-container">
                                <li><strong><i>Welcome!</i> John Doe</strong><span class="active"></span></li>
                                <li style="color:#4f5967; font-size:10px;font-weight: 800">ADMINISTRATOR</li>
                                <li>
                                    <button class = "btn btn-edit-profile">Edit Profile</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class = "sidebar-row">
                    <div id="sidebar-items">
                        <ul>
                            <li>
                                <a href="../contactlist.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Messages</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a  href="../cars/list-cars.php">
                                    <i class="fas fa-file-video"></i>
                                    <span>Cars</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>

                            </li>
                            <li>
                                <a href="../cars/list-cars.php">
                                    <i class="fas fa-tv"></i>
                                    <span>Rentals</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="../brands/list-brands.php">
                                    <i class="fas fa-tv"></i>
                                    <span>Brands</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li><li>
                                <a href="../category/list-categories.php">
                                    <i class="fas fa-tv"></i>
                                    <span>Category</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                            <span style="color:#2d3e50">EXTRAS</span>                             
                                <li>
                                    <a>
                                        <i class="fas fa-users"></i>
                                        <span>Users</span>
                                        <i class="fas fa-chevron-right"></i>

                                    </a>
                                </li>
                            <li>
                                <a>
                                    <i class="fas fa-users-cog"></i>
                                    <span>User Config</span>
                                    <i class="fas fa-chevron-right"></i>

                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-money-check-alt"></i>
                                    <span>Payment Methods</span>
                                    <i class="fas fa-chevron-right"></i>

                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>Invoices</span>
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        <div style="width:100%;padding-bottom:40px" id="main-panel">
            <div id="notifications-container">
                    <h3>Cars</h3>
                    <ul style="display: flex;margin-left:auto">
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-address-card"></i>
                            </a>

                        </li>
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link">
                                <img src="../../assets/admin.png" height="25px" width="25px">
                            </a>

                        </li>
                        <li>
                            <a class="nav-link">
                                John Doe
                                <i class="fas fa-chevron-down"></i>
                            </a>
                        </li>
                    </ul>
            </div>
            