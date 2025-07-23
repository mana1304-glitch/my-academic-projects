<?php
 include 'components/connection.php';
 session_start();

 if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
}else{
    $user_id='';
}

if(isset($_POST['logout'])){
   session_destroy();
   header("location:login.php");
}
?>

<!-- <style type="text/css">
   
</style> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Medicure</title>

<link rel="stylesheet" href="style.css">
</head>

 
<body>
<?php include 'components/header.php'; ?>  
    <div class="main">
     
        <section class="home-section">
            <div class="slider">
            <div class="slider__slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, veritatis.</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>

            <!-- slide ends -->
        <div class="slider_slider slide2">
            <div class="overlay"></div>
            <div class="slide_detail">
                <h1>Welcome to our shop</h1>
                <p>Harmony through Ayurveda: Nurturing Wellness Naturally</p>
                <a href="view_products.php" class="btn">shop now</a>

            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!-- slide ends -->
        <div class="slider_slider slide3">
            <div class="overlay"></div>
            <div class="slide_detail">
                <h1>welcome to our shop</h1>
                <p>Harmony through Ayurveda: Nurturing Wellness Naturally</p>
                <a href="view_products.php" class="btn">shop now</a>

            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!-- slide ends -->
        <div class="slider_slider slide4">
            <div class="overlay"></div>
            <div class="slide_detail">
                <h1>welcome to our shop</h1>
                <p>Harmony through Ayurveda: Nurturing Wellness Naturally</p>
                <a href="view_products.php" class="btn">shop now</a>

            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!-- slide ends -->
        <div class="slider_slider slide5">
            <div class="overlay"></div>
            <div class="slide_detail">
                <h1>welcome to our shop</h1>
                <p>Harmony through Ayurveda: Nurturing Wellness Naturally</p>
                <a href="view_products.php" class="btn">shop now</a>

            </div>
            <div class="hero-dec-top"></div>
            <div class="hero-dec-bottom"></div>
        </div>
        <!-- slide ends -->
        <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
        <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
    </div>
</div>
    </section>
    <!-- home slider Ends-->
    <section class="thumb">
    <div class="box-container">
        <div class="box">
            <img src="img/dabur.jpg" style="width: 90px;px; height:90px;">
            <h3>Ayurvedic Medicine</h3>
            <p>Harmony through Ayurveda: Nurturing Wellness Naturally, dolor sit amet consectetur adipisicing elit. Reiciendis, ex.</p>
            <!-- <i class="bx bx-chevron-right"></i> -->
        </div>
        <div class="box">
            <img src="img/dabur.jpg" style="width: 90px;px; height:90px;">
            <h3>Ayurvedic Medicine</h3>
            <p>Harmony through Ayurveda: Nurturing Wellness Naturally, dolor sit amet consectetur adipisicing elit. Reiciendis, ex.</p>
            <!-- <i class="bx bx-chevron-right"></i> -->
        </div>
        <div class="box">
            <img src="img/dabur.jpg" style="width: 90px;px; height:90px;">
            <h3>Ayurvedic Medicine</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, ex.</p>
            <!-- <i class="bx bx-chevron-right"></i> -->
        </div>
        <div class="box">
            <img src="img/dabur.jpg" style="width: 90px;px; height:90px;">
            <h3>Ayurvedic Medicine</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, ex.</p>
            <!-- <i class="bx bx-chevron-right"></i> -->
        </div>
    </div>
</section>

<section class="container">
    <div class="box-container">
        <div class="box">
            <img src="img/pain-relief- himalaya.jpg" style="width: 500px;px; height:300px;">
        </div>
        <div class="box">
            <img src="img/honeytus.jpg" style="width: 200px;px; height:200px;">
            <span>Healthy Medicine</span>
            <h1>save up to 50% off</h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, quae?</p> -->
        </div>
    </div>
</section>

<section class="shop">
    <div class="title">
        <!-- <img src="img/patanjali honey.jpg" style="width: 90px;px; height:90px;"> -->
        <!-- <h1>Trending Products</h1> -->
    </div>
    <div class="row">
        <!-- <img src="img/patanjali honey.jpg" style="width: 90px;px; height:90px;">  -->
        <!-- <h1>Trending Products</h1> -->
        <div class="row-detail">
        <!-- <img src="img/patanjali honey.jpg" style="width: 90px;px; height:90px;"> 
            <img src="img/patanjali honey.jpg" style="width: 90px;px; height:90px;">
            <img src="img/patanjali honey.jpg" style="width: 90px;px; height:90px;"> -->
           
            <div class="top-footer">
                <h1> a cup of Ayurvedic Medicine makes you Healthy</h1>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="img\pain-relief- himalaya.jpg">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img\himalaya_hadjod_tablets">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img\honeytus.jpg">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img\zandu shilajeet">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img\patanjali honey.jpg">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img\himalaya gas.jpg">
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
</section>

<section class="shop-category">
    <div class="box-container">
        <div class="box">
            <!-- <img src="img/dabur.jpg"> -->
            <div class="detail">
                <span>BIG OFFER</span>
                <h1>Extra 15% off</h1>
                <!-- <a href="view_products.php" class="btn">shop now</a> -->
            </div>
        </div>
        <div class="box">
            <!-- <img src="img/dabur.jpg"> -->
            <div class="detail">
                <span>New in Taste</span>
                <h1>coffee house</h1>
                <!-- <a href="view_products.php" class="btn">shop now</a> -->
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="box-container">
        <div class="box">
            <img src="img/cash back.jpg">
            <div class="detail">
                <h3>great savings</h3>
                <!-- <p>save big every order</p> -->
            </div>
        </div>
        <div class="box">
            <img src="img/24service.jpg">
            <div class="detail">
                <h3>24*7 support</h3>
                <!-- <p>one-on-one support</p> -->
            </div>
        </div>
        <!-- <div class="box">
            <img src="img/icon0.png">
            <div class="detail">
                <h3>gift vouchers</h3>
                <p>vouchers on every festivals</p>
            </div>
        </div> -->
        <div class="box">
            <img src="img\buy 1 get 1free.jpg">
            <div class="detail">
                <h3>Buy 1 Get 1 Free</h3>
                <!-- <p></p> -->
            </div>
        </div>
    </div>
</section>

<!-- <section class="brand">
    <div class="box-container">
        <div class="box">
            <img src="img/brand (1).jpg">
        </div>
        <div class="box">
            <img src="img/brand (2).jpg">
        </div>
        <div class="box">
            <img src="img/brand (3).jpg">
        </div>
        <div class="box">
            <img src="img/brand (4).jpg">
        </div>
        <div class="box">
            <img src="img/brand (5).jpg">
        </div>
    </div>
</section> -->
<?php include 'components/footer.php'; ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="script.js"></script>
<?php include 'components/alert.php'; ?>
 <script>
    "user strict"
const leftArrow = document.querySelector('.left-arrow .bxs-left-arrow'),
rightArrow = document.querySelector('.right-arrow .bxs-right-arrow'),
  slider = document.querySelector('.slider');

  /*----- SCroll to  right----- */
  function scrollRight(){
    if(slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
        slider.scrollTo({
            left:0,
            behavior: "smooth"
        });

    } else{
        slider.scrollBy({
            left: window.innerWidth,
            behavior: "smooth"
        });
    }
  }
   /*----- SCroll to  left----- */
function scrollLeft(){
    slider.scrollBy({
        left:-window.innerWidth,
        behavior: "smooth"
    })
}
let timerId = setInterval(scrollRight, 7000);
// reset timer to sroll right


function resetTimer(){
    clearInterval(timerId);
    timerId = setInterval(scrollRight, 7000);
    
}
// ---------scroll Event
slider.addEventListener('click', function(ev){
    if(ev.target === leftArrow){
        scrollLeft();
        resetTimer();

    }
})
slider.addEventListener('click', function(ev){
    if(ev.target === rightArrowArrow){
        scrollRight();
        resetTimer();
        
    }
})
 </script>

</body>

</html>