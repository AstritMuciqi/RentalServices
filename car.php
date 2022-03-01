<?php include("includes/header.php"); ?>
    <body>
    <?php 
      include_once "./admin/config/CarController.php";

      $carController = new CarController();

      $cars = $carController->getCars();
                
    ?>

        <div class="Car-products">
        <?php foreach($cars as $key => $car){ ?>
            <div class="product" >
              <img src="./<?=$car['img_path'] ?>" alt="cover" class="product__cover">
             <h2 style="margin-top:5px" class="product__title"><?= $car['car_name'] ?></h2>
              <p style="margin-top:10px" class="product__price">Price: 
                <span class="product__amount"><?= $car['car_price'] ?> Euro</span>
              </p>
              <form action="" class="product__add">
                <p style="margin-top:10px" class="add-to-quantity">
                  <label  for="quantity">Sasia:</label>
                  <select name="quantity" id="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </p>
                <input style="font-weight: bold;background-image: linear-gradient(to right top, #14bba7, #1ebba6, #25bca6, #2cbca5, #31bca5, #31bea6, #31bfa6, #31c1a7, #2cc5aa, #26c9ac, #1eceaf, #14d2b1); height:30px;" 
                type="submit" value="Add To Cart" class="add-to-submit" />
              </form>
            </div>
        <?php } ?>
          </div> 
<?php include("includes/footer.php"); ?>