<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{

       $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

       if(mysqli_num_rows($check_wishlist_numbers) > 0){
           mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
       }

       mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="reg.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Food is life</h3>
      <p><b>Home_Made_Food</b> is as healthy and distinct as the state itself. Homemade food is usually prepared with natural ingredients compared to commercially prepared food. Plainly, the food has its taste however those are ready using unprocessed foods that are by no means healthy.</p>
      <!--a href="about.php" class="btn">discover more</a-->
   </div>
   <div class="image">
    <img src="images/home.jpg" alt="">
   </div>

</section>
<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading1"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="Set meal/sm5.jpg" alt="">
            <div class="content">
                <img src="images/s-1.png" alt="">
                <h3>tasty meal</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="Steaks/st4.jpg" alt="">
            <div class="content">
                <img src="images/s-3.png" alt="">
                <h3>tasty steak</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="Snacks/sv5.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>tasty wings</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="Dessert/ds6.jpg" alt="">
            <div class="content">
                <img src="images/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="Snacks/sv2.jpg" alt="">
            <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>healty soup</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/parata.jpg" alt="">
            <div class="content">
                <img src="images/s-7.png" alt="">
                <h3>special parata</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="Seafood/sf4.jpg" alt="">
            <div class="content">
                <img src="images/s-8.png" alt="">
                <h3>sea food</h3>
                <p>The company itself is a very successful company.You can try once It is to be assumed that the inventor is not obliged to open the pleasures of free time or labor.</p>
            </div>
        </div>
       

    </div>

</section>

<!-- speciality section ends -->
<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading1">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->
<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading1"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Food is not simply organic fuel to keep body and soul together, it is a perishable art that must be savoured at the peak of perfection.</p>
                
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading1"> Our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.png" alt="">
            <h3>Sharmin Akter Rimi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>This food website has left the best impressions! Delicious dishes list and wonderful dessert. I recommend to everyone! I would like to order here again and again.</p>
        </div>
        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>Ahmed Faisal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> I have to say, I enjoyed every single bite of the meal in . I had a 3 course meal, with a couple of juice. Considering the quality, the price is reasonable.</p>
        </div>
        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>Sanjida Binta Aziz</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Best snacks on the chittagong! Try the hash!</p>
        </div>
        <div class="box">
            <img src="images/pic4.png" alt="">
            <h3>MD. Nayem Uddin</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>The absolute best red sauce. Weather on Pizza or Pasta, it is s honestly delicious. Portions are huge .</p>
        </div>
        <div class="box">
            <img src="images/pic5.png" alt="">
            <h3>Tasfia Tasnim</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Bestest Food ever.</p>
        </div>
        <div class="box">
            <img src="images/pic6.png" alt="">
            <h3>Humaira Tasnim Eshika</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p> I have to say, I enjoyed every single bite of the meal .</p>
        </div>
    </div>

</section>

<!-- review section ends -->

<!--latest product started here-->
<!--section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container"-->

      <?php
         //$select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         //if(mysqli_num_rows($select_products) > 0){
          //  while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <!--form action="" method="POST" class="box">
         <a href="view_page.php?pid=<?php //echo $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <div class="price">BDT <?php //echo $fetch_products['price']; ?>/-</div>
         <img src="uploaded_img/<?php //echo $fetch_products['image']; ?>" alt="" class="image">
         <div class="name"><?php //echo $fetch_products['name']; ?></div>
         <input type="number" name="product_quantity" value="1" min="0" class="qty">
         <input type="hidden" name="product_id" value="<?php// echo $fetch_products['id']; ?>">
         <input type="hidden" name="product_name" value="<?php// echo $fetch_products['name']; ?>">
         <input type="hidden" name="product_price" value="<?php //echo $fetch_products['price']; ?>">
         <input type="hidden" name="product_image" value="<?php //echo $fetch_products['image']; ?>">
         input type="submit" value="add to wishlist" name="add_to_wishlist" class="option-btn">
         <input type="submit" value="add to cart" name="add_to_cart" class="btn">
      </form>
      <?php
         //}
     // }else{
      //   echo '<p class="empty">no products added yet!</p>';
      //}
      ?>

   </div>

   <div class="more-btn">
      <a href="shop.php" class="option-btn">load more</a>
   </div>

</section-->

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <!--p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio officia aliquam quis saepe? Quia, libero.</p-->
      <a href="contact.php" class="btn">contact us</a>
   </div>

</section>
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<?php @include 'footer.php'; ?>

<script src="script1.js"></script>

</body>
</html>