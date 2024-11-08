
<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
      <div class="container">
        <form action="food-search.html" method="POST">
          <input
            type="search"
            name="search"
            placeholder="Search for Food.."
            required
          />
          <input
            type="submit"
            name="submit"
            value="Search"
            class="btn btn-primary"
          />
        </form>
      </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
  
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Categories Section Ends Here -->

    
    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
      <div class="container">
        <h2 class="text-center">Food Menu</h2>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-pizza.jpg"
              alt="Chicke Hawain Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Italian Pizza</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-burger.jpg"
              alt="Chicke Hawain Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Smoky Burger</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-burger.jpg"
              alt="Chicke Hawain Burger"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Nice Burger</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-pizza.jpg"
              alt="Chicke Hawain Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Food Title</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-pizza.jpg"
              alt="Chicke Hawain Pizza"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Food Title</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="food-menu-box">
          <div class="food-menu-img">
            <img
              src="images/menu-momo.jpg"
              alt="Chicke Hawain Momo"
              class="img-responsive img-curve"
            />
          </div>

          <div class="food-menu-desc">
            <h4>Chicken Steam Momo</h4>
            <p class="food-price">$2.3</p>
            <p class="food-detail">
              Made with Italian Sauce, Chicken, and organice vegetables.
            </p>
            <br />

            <a href="order.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>

      <p class="text-center">
        <a href="#">See All Foods</a>
      </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>