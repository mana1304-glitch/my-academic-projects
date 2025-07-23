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
<style type="text/css">
    <?php include 'style.css';
    ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Medicure</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
<div class="banner">
    <!-- <h1 style="color: green;">about us</h1> -->
</div>
<div class="title2">
    <a href="home.php">home</a><span> / about</span>
</div>
<!-- <div class="about-category">
    <div class="box">
        <img src="img/3.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon green</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/about.png">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon teaname</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/2.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon teaname</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="img/3.webp">
        <div class="detail">
            <span>coffee</span>
            <h1>lemon green</h1>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
</div> -->

<section class="services">
    <div class="title">
        <!-- <img src="img/download.png" class="logo">
        <h1>why choose us</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex, veritatis!</p> -->
    </div>
    <div class="box-container">
        <div class="box">
            <img src="img/buy 1 get 1free.jpg">
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
        <div class="box">
            <img src="img/cash back.jpg">
            <div class="detail">
                <h3>gift vouchers</h3>
                <!-- <p>vouchers on every festivals</p> -->
            </div>
        </div>
        <!-- <div class="box">
            <img src="img/icon.png">
            <div class="detail">
                <h3>worldwide delivery</h3>
                <p>dropship worldwide</p>
            </div>
        </div> -->
    </div>
</section>

<div class="about">
    <div class="row">
        <div class="img-box">
            <img src="img/3.png">
        </div>
        <div class="detail">
            <h1>visit our beautiful showroom</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi enim voluptas autem earum vero, eaque dolorem animi debitis ullam quaerat?</p> -->
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>
</div>

<div class="testimonial-container">
    <div class="title">
        <img src="img/download.png" class="logo">
        <h1>what people say about us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, architecto.</p>
        </div>
        <div class="container">
            <div class="testimonial-item active">
            <img src="img/01.jpg">
            <h1>sara smith</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores maxime consectetur at minima! Ratione quas exercitationem laborum, saepe dignissimos maxime itaque, culpa vel ad incidunt asperiores eligendi neque assumenda, perferendis rem obcaecati repellendus sequi id suscipit enim voluptates voluptatibus libero.</p>
            </div>
            <div class="testimonial-item">
            <img src="img/02.jpg">
            <h1>john smith</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores maxime consectetur at minima! Ratione quas exercitationem laborum, saepe dignissimos maxime itaque, culpa vel ad incidunt asperiores eligendi neque assumenda, perferendis rem obcaecati repellendus sequi id suscipit enim voluptates voluptatibus libero.</p>
            </div>
            <div class="testimonial-item">
            <img src="img/03.jpg">
            <h1>selena ansari</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores maxime consectetur at minima! Ratione quas exercitationem laborum, saepe dignissimos maxime itaque, culpa vel ad incidunt asperiores eligendi neque assumenda, perferendis rem obcaecati repellendus sequi id suscipit enim voluptates voluptatibus libero.</p>
            </div>
            <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>

        
</div>
<?php include 'components/footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>

    
</body>

</html>