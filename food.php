<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-MoewFood</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="Navbar">
        <div class="Container">
            <div class="logo">
               <img src="images/I will.png" alt="MoewFood Logo" class="img-responsive">
            </div>
            <div class="Menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="food.php">Food</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->
    <!-- Food menu section stars here -->
    <section class="Food-menu">
        <div class="Container">
            <h2 class="text-center">Food Menu</h2>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/tofubokchoydumplings.jpg" alt="Meat Pelmeni" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Nepali Momos with Spinach and Ricotta</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/momorecipes.jpg" alt="Momo Recipes" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Vegetable Momo with Spicy Chili Chutney</h4>
                    <p class="food-price">$4.5</p>
                    <p class="food-detail">
                        Made with Bell pepper, Red or green chilies, and Soy sauce.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/hamburguesa.jpg" alt="hamburguesa" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Hamburguesa Roquefort</h4>
                    <p class="food-price">$3.5</p>
                    <p class="food-detail">
                        Made with Beef chuck flat iron steak, Black pepper, and Yum yum Sauce.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mignonburger.jpg" alt="Mignon Burger" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Mignon Burger</h4>
                    <p class="food-price">$4.2</p>
                    <p class="food-detail">
                        Made with Sauce aux champignons, Beef, and Cheese.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/mixedpizza.jpg" alt="Mixed Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Mixed Pizza</h4>
                    <p class="food-price">$5</p>
                    <p class="food-detail">
                        Made with Italian sausage, Cooked and Crumbled spicy
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="Food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pizzatraitim.jpg" alt="Pizza Love" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Heart Shaped Foods For Valentines</h4>
                    <p class="food-price">$5.20</p>
                    <p class="food-detail">
                        Made with Pizza sauce, Mozzarella cheese, and Basil.
                    </p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
     <!-- Food menu section ends here -->
      <!-- Social section stars here -->
    <section class="Social">
        <div class="Container text-center">
            <div class="Social-img"></div>
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/wired/64/000000/facebook.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/wired/64/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/wired/64/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Social section ends here -->

    <!-- Footer section stars here -->
    <section class="Footer">
        <div class="Container text-center">
            <p>All rights reserved. Design by <a href="#">Khanh Lingm</a></p>
        </div>
    </section>
</body>
</html>