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
   <title>pizza</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="reg.css">

</head>
<body>
   
<?php @include 'header.php'; ?>
<section class="heading">
    <h3>Pizza Menu</h3>
    <p> <a href="home.php">home</a> /pizza</p>
</section>

<section class="popular1" id="popular1">
    
    <h1 class="heading1"> <span>pizza Menu</span></h1>
    <div class="box-container1">

    <div class="box">
            <span class="price"> 700 BDT </span>
            <img src="Pizza/pz1.jpg" alt="">
            <h3>Chicken Classic Pizza(8 inch)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 800 BDT </span>
            <img src="Pizza/pz2.jpg" alt="">
            <h3>Chicken Masala Pizza(8 inch)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 1300 BDT </span>
            <img src="Pizza/pz3.jpg" alt="">
            <h3>Four Seasons Pizza(12 inch)</h3>
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
            <img src="Pizza/pz4.jpg" alt="">
            <h3>Special Pizza(8 inch)</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 800 BDT </span>
            <img src="Pizza/pz5.jpg" alt="">
            <h3>Sausage Blast Pizza(8 inch)</h3>
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
            <img src="Pizza/pz6.jpg" alt="">
            <h3>Tanduri Chicken Pizza(8 inch)</h3>
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