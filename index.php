<?php
include 'config.php';



error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariana Tour | Web Desgin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>


    <a href="index.php" class="logo">Ariana <span>Tour</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Places</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact Us</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        
        <?php
            if(($_SESSION["users"])==null)                                       
            echo '<a href="login.php" class="fas fa-user"></a>';
            if(!isset($_SESSION["users"])){
                echo "  Welcome " . $_SESSION['username']  . "!";
                echo '<a href="logout.php"><img src="images/logout.png" width = "8%"   alt="logout" class="logo img-fluid"></a>';}
        
        
        
            
        
        ?>
    </div>

</header>

<!-- header ends -->

<!-- home starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Africa</h3>
        <span> Natural & Beautiful Places </span>
        <p>Africa is the most tropical of all continents.
            Climate and vegetation range from equatorial rainforests, 
            tropical deserts and savanna grassland to Mediterranean</p>
        <a href="booking.php" class="btn">Travel Now</a>
    </div>

</section>

<!-- home ends -->

<!-- about starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Places</h3>
        </div>

        <div class="content">
            <h3>why choose Africa?</h3>
            <p>embark on a wildlife safari or to climb Kilimanjaro.
                While Africa certainly does have some of the most prolific wildlife viewing opportunities and one of the seven summits,
                there are so many more 'other' reasons to travel to Africa</p>
            
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about ends -->

<!-- icons starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free booking</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>

</section>

<!-- icons ends -->

<!-- Popular Places  -->

<section class="products" id="products">

    <h1 class="heading"> Popular <span>Places</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-1.jfif" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Matmata</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/img-2.jfif" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Abu Simbel, Egypt</h3>
                <div class="price">  dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/img-3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Avenue of the Baobabs, Madagascar</h3>
                <div class="price">  dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/img-4.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>South-africa</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="images/img-5.jpg" wiedth = 30% alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Sidi bousaid</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="images/img-6.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Lake Nasser</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="images/img-7.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Best Place</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-8.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tundavala Gap, Angola</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/img-9.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Senegal</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/img-10.png" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Visit Us</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Hoggar Mountains, Algeria</h3>
                <div class="price"> dt95.75 <span>dt125.75</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts ends -->

<!-- review starts  -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>algeria is a nice place .</p>
        <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div class="user-info">
                <h3> ayman</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>i love senegal !</p>
        <div class="user">
            <img src="images/pic-2 .png" alt="">
            <div class="user-info">
                <h3>sayf</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>I visited Tunisia it's a nice place !.</p>
        <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div class="user-info">
                <h3>Amine</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>

</section>

<!-- review  ends -->

<!-- contact  starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" href="contact.php"  class="btn">
        </form>

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#products">Places</a>
            <a href="#">Review</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="https://www.facebook.com/iheb.gara.14/">My account</a>
            <a href="#">My List</a>
            <a href="#home">My favorite</a>
        </div>

        <div class="box">
            <h3>Africa Tracel Locations</h3>
            <a href="https://www.planetware.com/tourist-attractions/tunisia-tun.htm">Tunisia</a>
            <a href="https://www.thecrazytourist.com/15-best-places-to-visit-in-algeria">Algeria</a>
            <a href="https://www.lonelyplanet.com/articles/best-places-to-visit-in-south-africa">South africa</a>
            <a href="https://traveltriangle.com/blog/best-places-to-visit-in-morocco/">Morocco</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://www.linkedin.com/in/iheb-gara-hellal-935200219/">iheb</a>
            <a href="https://www.facebook.com/sayfeddine.hajbi">sayf</a>
            <a href="https://www.facebook.com/amine.dhwaya">amine</a>
            <a href="https://www.facebook.com/aymen.elhajji.70">aymen</a>
            <img src="images/payment.png" alt="">
        </div>

        <div class="box">
            <h3>other Tracel Locations</h3>
            <a href="#">Netherlands</a>
            <a href="#">Switzerland</a>
            <a href="#">France</a>
            <a href="#">Finland</a>
            <a href="#">UK</a>
        </div>

    </div>

    <div class="credit">| created by <span> G.Iheb,H.SAYF,H.aymen,D.Mohamed </span> | all rights reserved |</div>

</section>

<!-- footer section ends -->

</body>
</html>

