<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaNoi Food</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--Navbar Section starts-->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" alt="Logo nhahang" class="img-responsive">
            </div>
            <div class="menu text-right">
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
                        <a href="order.php">Order</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!--Navbar Section ends-->

    <!--Order Food Section starts-->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Fill this form to confirm your order</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Select Food</legend>
                    <div class="food-menu-img">
                        <img src="img/menu-pizza.jpg" alt="Chicken Hawan Pizza" class="img-responsive img-cruve">
                    </div>
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                        <p class="food-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>

                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="fullname" placeholder="e.g tuan duc pham" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="e.g 0xxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="e.g tuanduc@gmail.com" class="input-responsive" required>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="fullname" placeholder="e.g tuan duc pham" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="eg. Stress,city,country" class="input-responsive" required></textarea>
                     
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
    <!--Order Food Section ends-->
    <!--Social Section starts-->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                   <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook.png"/></a> 
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/64/000000/instagram-new--v2.png"/></a> 
                 </li>
                 <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/64/000000/twitter.png"/></a> 
                 </li>
            </ul>  
        </div>
    </section>
    <!--Social Section ends-->
    <!--Footer Section starts-->
    <section class="footer text-center">
        <div class="container">
           <p> All rights reserved. Design by <a href="#">CSE.TLU</a></p>  
        </div>
    </section>
    <!--Footer Section ends-->
</body>
</html>