<?php
// session_start();

include '../database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    <link rel="stylesheet" href="../css_folder/product.css" />
  </head>
  <style>
    .add_to_cart_btn{
      margin-left:45%;
    }
    @media screen and (max-width: 1100px) {
      .add_to_cart_btn{
      margin-left:0%;
    }
    }
    @media screen and (max-width: 764px) {
      .add_to_cart_btn{
      margin-left:70%;
    }
    }
    .product_name
    {
      text-align:center;
      color:rgb(63, 23, 158);
    }
    .pr_price{
      color:rgb(16, 76, 167);
    }
    </style>
  
  <body>
    <!-- product cards -->
    <div class="container my-3" id="product-cards">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" class="inline-block">

      <h1 class="text-center" style="color:rgb(35, 0, 116);">OUR POPULAR PRODUCT</h1>
      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/headph2.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">BUDS</h3>
              <div class="star py-1">
                <i class="fas fa-star checked" style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
              </div>
              <h5 class="py-1 pr_price">
                2000
                <span><button  data-product_id="17" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>
              </h5>
            
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/mob2.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">MI 10 </h3>
              <div class="star py-1">
                <i class="fas fa-star checked" style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
              </div>
              <h5 class="py-1 pr_price">
              20000
              <span><button  data-product_id="24" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
              
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/bag3.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">BAG</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
             
              </div>
              <h5 class="py-1 pr_price">
              1200
              <span><button  data-product_id="23" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
           
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/shoe4.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name"> SHOE</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
              </div>
              <h5 class="py-1 pr_price">
              700
              <span><button  data-product_id="25" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
            
            </div>
          </div>
        </div>

      <div class="row" style="margin-top: 30px">
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/shirt8.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">SHIRT</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
              </div>
              <h5 class="py-1 pr_price" >
              750
              <span><button  data-product_id="26" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/watch7.jpeg" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name"> WATCH</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
            
              </div>
              <h5 class="py-1 pr_price">
              12000
              <span><button  data-product_id="27" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
             
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/headphone.png" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">HEADSET</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
              
              </div>
              <h5 class="py-1 pr_price">
              1100
              <span><button  data-product_id="28" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg  "style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5>
           
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <div class="card px-0" >
            <img src="../image_folder/product_image/bag9.jpg" alt=""  width=70% height=60% style="margin-left:12%"/>
            <div class="card-body">
              <h3 class="product_name">BAG</h3>
              <div class="star py-1">
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
                <i class="fas fa-star checked"style="color:yellow;"></i>
               
              </div>
              <h5 class="py-1 pr_price">
              990
              <span><button  data-product_id="29" name="add_to_cart"  class="add_to_cart_btn btn " ><i class="fa fa-shopping-cart fa-lg " style="color:rgb(0, 77, 129);"></i> </button></i></span>

              </h5 >
             
            </div>
          </div>
        </div>
   
     <div class="text-center my-3"><a href="../php_folder/collection.php" class="viewmore_btn btn" style="color:#1c1c50; border: 2px solid #1c1c50;">View More</a></div>
    </div>
    <!-- product cards -->
    <script>
		$(document).ready(function(){
  
  // for add to cart function
	$(document).on('click','.add_to_cart_btn',function(){
	  var id=$(this).data('product_id');// here this refers this object.
	//    alert('the value of id is'+id);
  
		$.ajax({
		  url: "../database/manage_add_to_cart.php",
		  type :"POST",
		  data :{item_id : id},
		  success : function(data){
			if(data==1)
			{
			  alert('Item is  added');
			}
			else 
			{
				console.log(data);
			  alert('Item is already added');
			}
		  }
	  });
  });
  });
	  </script>
  </body>
</html>
