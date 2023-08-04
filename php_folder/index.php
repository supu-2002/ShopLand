<?php
session_start();
include '../database/db.php';
?>

<?php

if(isset($_SESSION['id']))
       {
            $user_id=$_SESSION['id'];
            
       }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image" href="../image_folder/logo.png">

  <title>ShopLand</title>

  <link rel="stylesheet" href="../css_folder/index.css" />
  <link rel="stylesheet" href="../css_folder/testimonial.css" />
  <link rel="stylesheet" href="../css_folder/banner.css" />


</head>
<body>
  <!-- nav bar  html-->
    <?php 
    include 'nav.php';
    ?>
    <!-- nav bar  html-->
    
     <!-- //necessary things -->
     <?php
      include '../html_folder/grid.html';
      ?>
     <!-- //necessary things -->



<!-- Carousel wrapper -->     <!-- slider -->
<?php
 include '../html_folder/slider.html';
 ?>
<!-- Carousel wrapper -->


 <!-- all product  -->
 <?php
 include '../php_folder/product.php';
 ?>
     <!-- all product  -->


      <!-- banner -->
      <div class="banner">
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p> -->
            <div id="bannerbtn"><button >SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->

     <!-- card part -->
     <div class="card-container">
        <div class="row">
         <div class="col-md-3 mt-4">
          <h2 class="card-heading" style="color:rgb(27, 1, 105);">Top Deals</h2>
         </div>
         </div>

        <div class="row px-3 py-3">

          <div class=" col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/watch1.png" class="card-img-top" alt="..." height=190px/>
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Watch</h5>
                <p class="card-text fs-5">
                   20%off
                </p>
                <a href="shop.php?my_id=7" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>

          <div class="  col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/phone1.png" class="card-img-top" alt="..."  height=190px/>
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Phone</h5>
                <p class="card-text fs-5">
                     30%off
                </p>
                <a href="shop.php?my_id=4" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>

          <div class="  col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/shirt3.png" class="card-img-top" alt="..."  height=190px />
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Fashion</h5>
                <p class="card-text fs-5">
                     15%off
                </p>
                <a href="shop.php?my_id=1" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>

          <div class="  col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/headph2.png" class="card-img-top" alt="..." height=190px/>
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Headset</h5>
                <p class="card-text fs-5">
                     35%off
                </p>
                <a href="shop.php?my_id=2" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>

          <div class="  col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/shoe1.png" class="card-img-top" alt="..." height=190px/>
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Shoes</h5>
                <p class="card-text fs-5">
                     15%off
                </p>
                <a href="shop.php?my_id=3" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>

          <div class="  col-sm-6 col-xl-2 col-md-4 py-1">
            <div class="card box-shadow">
              <img src="../image_folder/product_image/bag2.png" class="card-img-top" alt="..." height=190px/>
              <div class="card-body">
                <h5 class="card-title text-center fs-4">Bags</h5>
                <p class="card-text fs-5">
                     25%off
                </p>
                <a href="shop.php?my_id=5" class="btn btn-info">Explore</a>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- card part -->


<!-- review section(testimonial) -->
      <div class="review " >
        <div style="margin-right:10%;">
      <h3 style="color:rgba(25, 0, 114, 0.943);" > Our Customer's review</h3>
      </div>

  <div class="wrapper py-3 mx-3" style="margin-left:0.5%;">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Alex Smith</div>
          <div class="job">YOUTUBER</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="../image_folder/review_person_image/profile-1.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Steven Chris</div>
          <div class="job">Blogger</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="../image_folder/review_person_image/profile-2.jpeg" alt="">
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
      <div class="content">
        <div class="info">
          <div class="name">Kristina Bellis</div>
          <div class="job">Freelancer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="image">
          <img src="../image_folder/review_person_image/profile-3.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- review section(testimonial) -->


  <!-- free shipping -->
<div class="container" style="background-color:rgb(234, 217, 255);">
<div class="row -grids-footer border-top border-bottom py-sm-4 py-3" style="margin-top: 30px;">
  <div class="col-md-4 offer-footer">
    <div class="row">
      <div class="col-4 icon-fot">
        <i><img src="../image_folder/shipping/free-shipping.png" alt="" width="70px"></i>
      </div> 
      <div class="col-8 text-form-footer">
        <h3>Free Shipping</h3>
        <p>on orders over $100</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 offer-footer my-md-0 my-4">
    <div class="row">
      <div class="col-4 icon-fot">
        <i><img src="../image_folder/shipping/fast-delivery.png" alt="" width="70px"></i>
      </div>
      <div class="col-8 text-form-footer">
        <h3>Fast Delivery</h3>
        <p>World Wide</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 offer-footer">
    <div class="row">
      <div class="col-4 icon-fot">
        <i><img src="../image_folder/shipping/like.png" alt="" width="70px"></i>
      </div>
      <div class="col-8 text-form-footer">
        <h3>Big Choice</h3>
        <p>of Products</p>
      </div>
    </div>
  </div>
</div>
</div>
  <!-- free shipping -->



 <!-- footer -->
 <?php 
    include '../html_folder/footer.html';
    ?>
   
</body>
</html>