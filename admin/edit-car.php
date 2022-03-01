<?php 
    include_once "./config/Session.php";

    Session::start();
    include_once "./config/CarController.php";

    $carController = new CarController();

    $car = $carController->getCar($_GET['id']);
    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
        $carController->editCar($_GET['id']);

        // $carController->addCar();
         
    }



?>

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

    <link href="../admin-css/style.css" rel="stylesheet" type="text/css">
    <link href="../admin-css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="../admin-css/chosen.min.css" rel="stylesheet" type="text/css">




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
                            <a id="nav-brand"> GoodMovies
                            </a>
                            <i id="bars" class="fas fa-bars"></i>
                        </div>
                    </div>
                        <div id="profile-pic-container">
                            <div class = "sidebar-row">
                                <img src="../assets/images/admin.jpg" height="60px" width="60px">
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
                                    <a href="admin.php">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a  href="admin.php">
                                        <i class="fas fa-file-video"></i>
                                        <span>Movies</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                </li>
                                <li>
                                    <a>
                                        <i class="fas fa-tv"></i>
                                        <span>Genres</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="far fa-images"></i>
                                        <span>Movie Icons</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <span style="color:#2d3e50">EXTRAS</span>
                                    <li>
                                        <a>
                                            <i class="fas fa-tachometer-alt"></i>
                                            <span>Dashboard</span>
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fas fa-users"></i>
                                            <span>Users</span>
                                        </a>
                                    </li>
                                <li>
                                    <a>
                                        <i class="fas fa-users-cog"></i>
                                        <span>User Config</span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fas fa-money-check-alt"></i>
                                        <span>Payment Methods</span>
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
            <div id="main-panel">
                <div id="notifications-container">
                        <h3>Movies</h3>
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
                                    <img src="../assets/images/admin.jpg" height="25px" width="25px">
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
                <div class="row">
        <div class="col-sm-12">
            <div id="add-movie-header">
                <h4>Add Car</h4>
            </div>
            <div id="add-movie-form-container">
                <form class="form-horizontal" method="post" id="edit-car-form" action='' autocomplete="off" enctype="multipart/form-data" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="" name="car_name" value="<?= $car[0]['car_name'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Car Price:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="title" placeholder="" name="car_price" value="<?= $car[0]['car_price'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Rental:</label>
                        <div class="col-sm-10">
                            <?php                             
                            include_once "./config/Crud.php";
                                $crud = new Crud();

                                $rentals = $crud->read('SELECT * FROM rentals', false);
                                $current_rental = $car[0]['rental_name'];
                            ?>
                        
                            <select data-placeholder="Select Rental..."  class="form-control rental"  name="rentals" id="rental" value="">
                                <?php foreach($rentals as $rental){ ?>

                                    <option value="<?=$rental['rental_id']?>"><?=$rental['rental_name']?></option>

                                <?php } ?>

                                    <option value="<?= $rental['rental_id'] ?>" selected="selected"><?=$rental['rental_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Brand:</label>
                        <div class="col-sm-10">
                        <?php                             
                            include_once "./config/Crud.php";
                                $crud = new Crud();

                                $brands = $crud->read('SELECT * FROM brands', false);
                                $current_brand = $car[0]['brand_name'];
                            ?>
                        
                            <select data-placeholder="Select Brand..."  class="form-control brand"  name="brands" id="brand" value="">
                                <?php foreach($brands as $brand){ ?>

                                    <option value="<?=$brand['brand_id']?>"><?=$brand['brand_name']?></option>

                                <?php } ?>

                                    <option value="<?= $brand['brand_id'] ?>" selected="selected"><?=$brand['brand_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Category:</label>
                        <div class="col-sm-10">
                        <?php                             
                            include_once "./config/Crud.php";
                                $crud = new Crud();

                                $category = $crud->read('SELECT * FROM category', false);
                                $current_category = $car[0]['category_name'];
                            ?>
                        
                            <select data-placeholder="Select Category..."  class="form-control category"  name="category" id="category" value="">
                                <?php foreach($category as $categoryy){ ?>

                                    <option value="<?=$categoryy['category_id']?>"><?=$categoryy['category_name']?></option>

                                <?php } ?>

                                    <option value="<?= $categoryy['category_id'] ?>" selected="selected"><?=$categoryy['category_name']?></option>

                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available From:</label>
                        <div class="col-sm-10">
                            <input id="datepicker" name="car_start" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="<?= $car[0]['car_start'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Car Available To :</label>
                        <div class="col-sm-10">
                            <input id="datepickerEnd" name="car_end" data-date-format="yyyy-mm-dd" class="form-control" type="text" value="<?= $car[0]['car_end'] ?>">
                                        <span class="help-block"></span>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="year">Cover Image:</label>
                        <div class="col-sm-10">
                            <img src="../<?= $car[0]['img_path'] ?>" width="194" height="259" style="margin-buttom:15px" alt="">
                            <input type="file" name="cover_image" class="form-control" id="customFile" value="">
                                        <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn pull-right">Submit</button>
                            <a href="list-cars.php" class="btn pull-right" style="margin-right: 5px;">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> goodmovies</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    </div>

        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="../js/datepicker.min.js"></script>
<script src="../js/datepicker.en.js"></script>
<script src="../js/chosen.jquery.js"></script>


<script>
    $('#datepicker').datepicker({
        language: 'en',
    })    
    $('#datepickerEnd').datepicker({
        language: 'en',
    })
    $('.category').chosen('Select Category')
    $('.brand').chosen('Select Brand')
    $('.rental').chosen('Select Category')

</script>

</body>
</html>