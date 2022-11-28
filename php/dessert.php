<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>steaks</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="reg.css">

</head>
<body>
   
<?php @include 'header.php'; ?>
<section class="heading">
    <h3>Dessert Menu</h3>
    <p> <a href="home.php">home</a> /dessert</p>
</section>

<section class="popular1" id="popular1">
    
    <h1 class="heading1"> <span>Dessert Menu</span></h1>
    <div class="box-container1">

    <div class="box">
            <span class="price"> 300 BDT (6 piece)</span>
            <img src="Dessert/ds1.jpg" alt="">
            <h3>Cup Cakes </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
           
        </div>
        <div class="box">
            <span class="price"> 450 BDT (6 piece)</span>
            <img src="Dessert/ds2.jpg" alt="">
            <h3>Malai Sandesh </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 450 BDT (6 piece)</span>
            <img src="Dessert/ds3.jpg" alt="">
            <h3>Browny </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 400 BDT (6 box)</span>
            <img src="Dessert/ds4.jpg" alt="">
            <h3>Cream Cheese Crackers </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
           
        </div>
        <div class="box">
            <span class="price"> 450 BDT (per box)</span>
            <img src="Dessert/ds5.jpg" alt="">
            <h3>Cookies </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 200 BDT (per dish)</span>
            <img src="Dessert/ds6.jpg" alt="">
            <h3>Kashmiri Dessert</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        
    </div>
    
</section>   




<?php @include 'footer.php'; ?>

<script src="script1.js"></script>

</body>
</html>