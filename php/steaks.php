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
    <h3>Steaks Menu</h3>
    <p> <a href="home.php">home</a> /steaks</p>
</section>

<section class="popular1" id="popular1">
    
    <h1 class="heading1"> <span>Steaks Menu</span></h1>
    <div class="box-container1">

    <div class="box">
            <span class="price"> 2390 BDT </span>
            <img src="Steaks/st1.jpg" alt="">
            <h3>T-Bone Steak</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 1950 BDT </span>
            <img src="Steaks/st2.jpg" alt="">
            <h3>Rump Steak</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
           
        </div>
        <div class="box">
            <span class="price"> 1700 BDT </span> 
            <img src="Steaks/st3.jpg" alt="">
            <h3>Giant Spare Ribs</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 2100 BDT </span>
            <img src="Steaks/st4.jpg" alt="">
            <h3>Tanderloin Steak</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 2400 BDT </span>
            <img src="Steaks/st5.jpg" alt="">
            <h3>Sirloin Steak</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            
        </div>
        <div class="box">
            <span class="price"> 3000 BDT </span>
            <img src="Steaks/st6.jpg" alt="">
            <h3>Ribeye Steak</h3>
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