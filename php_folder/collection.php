<?php
session_start();

include '../database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection</title>
  <link rel="stylesheet" href="../css_folder/banner.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<style>
    .add_to_cart_btn{
      background-color:rgba(140, 127, 255)!important;
      margin-left:10%;
      color:white!important;
      
    }
    </style>
</head>
<body>

<!-- nav bar  html-->
<?php 
    include 'nav.php';
    ?>
 <!-- nav bar  html-->




    <!-- banner -->
    <div class="banner2">
        <div class="content2">
            <h1>Get More Product</h1>
            <div id="bannerbtn2"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->




    <!-- product cards -->
   
    <div class="container" id="product-cards">
        <div class="row">
        <?php
      $sql="select * from collection";
      $query=mysqli_query($conn, $sql);
      while($row_no=mysqli_fetch_assoc($query)){
        $item_id=$row_no['i_id'];
        $sql1="select * from product where item_id='$item_id'";
        $query1=mysqli_query($conn, $sql1);
        $row=mysqli_fetch_assoc($query1);
    ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 mb-3 p-3">
				  <form method="POST" action="<?php $_SERVER['PHP_SELF']?>" class="inline-block">

				  <div class="card " style="width: 18rem;">


                    <img src="<?php echo  $row['image'] ?>" alt="" height="250">
                    <div class="card-body">
                        <h4 class="text-center fw-bold"style="color:rgba(9, 0, 91)"><?php echo  $row['item_name'] ?></h4>
                        <!-- <p><?php echo  $row['item_desc'] ?></p> -->
                        <h5 class="text-center">PRICE:  <?php echo $row['price'] ?></h5>
						<div class="d-flex my-2 justify-content-center ">
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #f1dd04;"></i>
						  <i class="fa-solid fa-star" style="color: #546787;"></i>
						  <!-- <span class="badge text-bg-primary ms-4"></span> -->
						</div>

						<div class="d-flex justify-content-between align-items-center p-2 mt-gx-3" style=" margin-left:10%;">
						  <!-- <a href="#"><i class=" text-danger fa-solid fa-heart fs-3"></i></a> -->
						  <button  data-product_id="<?php echo $row['item_id'];?>" name="add_to_cart"  class="add_to_cart_btn btn  fw-bold  py-2 mx-4 px-3"><i class="fa-solid fa-cart-shopping me-2 "></i> Add to Cart</button>
						</div>
						
					
                                       
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
     
    </div>
    <!-- product cards -->

     <!-- footer -->
 <?php 
    include '../html_folder/footer.html';
    ?>
    



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



  