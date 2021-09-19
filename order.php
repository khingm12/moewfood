<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order-MoewFood</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar section stars here -->
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
    <!-- Navbar section ends here -->
    <!-- Food search section stars here -->
    <section class="food-search">
        <div class="Container">
            <h2 class="text-center text-white">Fill this form to confirm your order</h2>
            <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>
                <div class="food-menu-img">
                    <img src="images/pizzatraitim.jpg" alt="Heart Shaped Foods For Valentines" class="img-responsive img-curve">

                </div>
                <div class="food-menu-desc">
                    <h3>Heart Shaped Foods For Valentines</h3>
                    <p class="food-price">$5.20</p>
                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>
            </fieldset>
            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Bùi Thị Khánh Linh" class="input-responsive" required>
                <div class="order-label">Phone Number</div>
                    <input type="contact" name="phone-number" placeholder="E.g 0245729448" class="input-responsive" required>
                <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g khanhlinhbuithi@gmail.com" class="input-responsive" required>
                <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. 364 Đường Láng, Đống Đa, Hà Nội" class="input-responsive" required></textarea>
                <input type="submit" name="submit"value="Confirm Order" class="btn btn-primary">
            </fieldset>
            </form>
        </div>
    </section>
    <!-- Food search section ends here -->
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
    <!-- Footer section ends here -->
</body>
</html>