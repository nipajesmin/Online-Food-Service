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
    <h3>Sea Food Menu</h3>
    <p> <a href="home.php">home</a> /sea food menu</p>
</section>

<section class="popular1" id="popular1">
    
    <h1 class="heading1"> <span>Sea Food Menu</span></h1>
    <div class="box-container1">

    <div class="box">
            <span class="price"> 450 BDT </span>
            <img src="Seafood/sf1.jpg" alt="">
            <h3>King Prawn Shots</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 900 BDT </span>
            <img src="Seafood/sf2.jpg" alt="">
            <h3>Red Snaper (300gm)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 400 BDT </span>
            <img src="Seafood/sf3.jpg" alt="">
            <h3>Grilled Shrimps</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 350 BDT </span>
            <img src="Seafood/sf4.jpg" alt="">
            <h3>Calamari Friiters</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 420 BDT </span>
            <img src="Seafood/sf5.jpg" alt="">
            <h3>Prawn Tempura</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 1500 BDT </span>
            <img src="Seafood/sf6.jpg" alt="">
            <h3>King Lobster</h3>
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