<!-- <?php
  session_start();
  ?> -->
  <?php
  include '../database/db.php';
  ?>
  <!doctype html>
  <html lang="en">
  
  <head>
	<title>Shop</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
	.add_to_cart_btn{
      background-color:rgb(90, 72, 255)!important;
      margin-left:15%;
      color:white!important;
	  padding:0 5%;
    }
	.card-para{
		background-color:rgb(196, 210, 255)!important;

	}
	.card-desc{
		color:rgb(0, 13, 79)!important;
	}
	.card-price{
		color:rgb(9, 29, 125)!important;

	}
	</style>
  
  </head>
  
  <body>
  <!-- data fetch from database -->
  
  <?php 
  include 'nav.php';
  ?>

<?php
  
  if(isset($_GET['my_id']))
  {
	  $id=$_GET['my_id'];
	  $_SESSION['cat_id']=$id;
  }
  else if(isset($_SESSION['cat_id']))
  {
	  $id=($_SESSION['cat_id']);
  }
  
  $sql="select catagory_name from catagory where catagory_id=$id";
  $query=mysqli_query($conn,$sql);
  $row =mysqli_fetch_assoc($query);
  $c_name=$row['catagory_name'];
  
  
  
  $sql="select * from product where c_id=$id";
  $query=mysqli_query($conn,$sql);
  
  
  ?>
  <!-- data fetch from database -->
  
  
  
  
	  <div class="container">
		  <h2 class="text-center mt-2 mb-3">Best of <?php echo $c_name ?> items </h2>
		  <div class="row">
			  <?php
			while($row =mysqli_fetch_assoc($query)){
		 ?>
		  <!-- data fetch from database -->
			  <!------------------------------------------------------------------- 1st card ------------------------------->
			  <div class="col-lg-4 col-md-6 col-sm-12 mt-3 mb-3 p-3">

				  <div class="card mx-auto" style="width: 18rem;">
  
				  <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" class="inline-block">
  
					  <img src="<?php echo $row["image"];?>" class="mx-auto card-img-top" alt=""  height=220px />
					  <div class="card-body  card-para">
						<p class="card-text fs-5 fw-bold  card-desc"><?php echo $row["item_desc"];?></p>
						<h5 class="card-price">Price: <?php echo $row["price"];?></h5>
						<div class="d-flex mt-3">
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #546787;"></i>
  
						  <span class="badge text-bg-primary ms-4"><?php echo $row["star"];?>.0</span>
						</div>
						<div class="d-flex justify-content-between align-items-center p-2 mt-1" style=" margin-left:10%;">
						  <!-- <a href="#"><i class=" text-danger fa-solid fa-heart fs-3"></i></a> -->
						  <button  data-product_id="<?php echo $row["item_id"];?>" name="add_to_cart"  class="add_to_cart_btn btn  fw-bold  py-2" style="margin-left:20px"><i class="fa-solid fa-cart-shopping me-2 " ></i> Add to Cart</button>
						</div>
						
					  </div>
					  </form> 
					</div>
			  </div>
	   
   <!------------------------------------------------------------------- end ------------------------------->
  <!-- data fetch from database -->
  <?php
  }
  ?>
  <!-- data fetch from database -->
		  </div>
	  </div>
  
 <!-- footer -->
 <?php 
    include '../html_folder/footer.html';
    ?>
 <!-- footer -->
    

  
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

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