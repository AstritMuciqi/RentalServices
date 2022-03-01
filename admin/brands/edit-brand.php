<?php 
    include_once "../config/Session.php";

    Session::start();
    include_once "../config/CarController.php";

    $carController = new CarController();

    $car = $carController->getCar($_GET['id']);
    if(($_SERVER['REQUEST_METHOD'] == 'POST')){
        
        $carController->editCar($_GET['id']);

        // $carController->addCar();
         
    }



?>
<?php include "../includes/sidebar.php" ?>



                <div class="row">
        <div class="col-sm-12">
            <div id="add-movie-header">
                <h4>Edit Brand</h4>
            </div>
            <div id="add-movie-form-container">
                <form class="form-horizontal" method="post" id="edit-car-form" action='' autocomplete="off" enctype="multipart/form-data" />

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Brand Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" placeholder="" name="brand_name" value="<?= $car[0]['car_name'] ?>">
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
                            <a href="list-brands.php" class="btn pull-right" style="margin-right: 5px;">Back</a>
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
<script src="../../js/datepicker.min.js"></script>
<script src="../../js/datepicker.en.js"></script>
<script src="../../js/chosen.jquery.js"></script>


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