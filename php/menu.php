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
   <title>menu</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="reg.css">

</head>
<body>
   
<?php @include 'header.php'; ?>
<section class="heading">
    <h3>food service menu</h3>
    <p> <a href="home.php">home</a> / menu </p>
</section>

<section class="menu" id="menu">
    
    <h1 class="heading1"> <span>Menu</span></h1>
    <div class="box-container">

        <div class="box">
            <span class="price"> 300 BDT- 1200 BDT </span>
            <img src="Set meal/p-1.jpg" alt="">
            <h3>Set Meal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="set_meal.php" class="btn">see more</a>
        </div>
        <div class="box">
            <span class="price"> 500 BDT - 2000 BDT </span>
            <img src="pizza/p-2.jpg" alt="">
            <h3>Tasty Pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="pizza.php" class="btn">see more</a>
        </div>
        <div class="box">
            <span class="price"> 2000 BDT - 4000 BDT </span>
            <img src="Steaks/p-3.jpg" alt="">
            <h3>Tasty Steaks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="steaks.php" class="btn">see more</a>
        </div>
        <div class="box">
            <span class="price"> 350 BDT - 450 BDT </span>
            <img src="Snacks/sv1.jpg" alt="">
            <h3>Savouries</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="savories.php" class="btn">see more</a>
        </div>
        <div class="box">
            <span class="price"> 350 BDT - 1500 BDT </span>
            <img src="Seafood/sf1.jpg" alt="">
            <h3>Sea Food</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="sea_food.php" class="btn">see more</a>
        </div>
        <div class="box">
            <span class="price"> 150 BDT - 1000 BDT </span>
            <img src="Dessert/ds1.jpg" alt="">
            <h3>Dessert Menu</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="dessert.php" class="btn">see more</a>
        </div>

    </div>
</section>   





<?php @include 'footer.php'; ?>

<script src="script1.js"></script>

</body>
</html>
