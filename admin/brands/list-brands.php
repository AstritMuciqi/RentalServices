<?php 
    include_once "../config/Session.php";

    Session::start();

?>

<?php include "../includes/sidebar.php" ?>
 
            <div id="users-container">
                <div id="pagination-container">
                    <ul style="display:flex; position:relative;margin-top:6px">
                        <li>Show</li>
                        <li>
                            <select name="per_page" id="per_page">
                                <option >5</option>
                                <option selected>10</option>
                                <option  >15</option>
                                <option >20</option>
                            </select>
                        </li>
                        <li>entries</li>
                    </ul>
                    <ul style="display:flex;margin-left: auto" class="paginator-ul">
                        <li class='page-item active'>
                            <a class = 'page-link'  href='#' class = 'page-link'>1</a>
                        </li><li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>2</a>
                        </li>
                        <li class='page-item '>
                            <a class = 'page-link'  href='#' class = 'page-link'>3</a>
                        </li>                    
                    </ul>
                </div> 
                <div id ="add-btn-container">
                    <div class = "sidebar-row">
                        <a href="add-brand.php" class = "btn btn-add">
                        <i class="fas fa-plus"></i>
                        Add New Brand</a>
                    </div>    
                </div>           
                <?php 
                    include_once "../config/CarController.php";

                    $carController = new CarController();

                    $cars = $carController->getCars();
                
                ?>
                <table id="movies">
                    <tr>
                        <th>Brand Name</th> <th>Cover Imagge</th> <th>Actions</th>
                    </tr>
                        <?php foreach($cars as $key => $car){ ?>
                            
                            <tr>
                                <td><?= $car['car_name'] ?></td>
                                <td style="width:15px"><img src="../<?=$car['img_path'] ?>" height="25px" width="25px"></td>
                                <td style="width:15px">
                                    <a href="edit-brand.php?id=<?= $car['car_id']?>">edit</a>
                                    <a href="admin.php?action=edit-movie">delete</a>
                                </td>   
                            </tr>   
                        <?php } ?>
                     
                </table>
            </div>            
        </div>
            <!-- Footer -->
            <footer style="position:absolute; bottom:0;width:98%" class="page-footer font-small blue">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/"> rental car</a>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
            </div>

        </div>
    </div>
</div>
    </div>
    <script src="../js/jquery.toast.min.js"></script>
    <?php if(Session::exists('success-message')){?>
    <script>
        $.toast({
            heading: 'Information',
            text: '<?= Session::get('success-message')?>',
            showHideTransition: 'slide',
            icon: 'info',
            position: 'bottom-right'
        })
    </script>
    <?php } 
    Session::destroy('success-message');
    ?>
</body>
</html>