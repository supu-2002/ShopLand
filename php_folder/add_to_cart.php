<?php
  session_start();

?>

<!doctype html>
<html lang="en">
<head>
  <title>Add to cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

<?php 
    include 'nav.php';
    ?>

   <!-- cart number -->
   <?php
       include '../database/db.php';

 $count=0;
 if(isset($_SESSION['id'])){
       $user_id=$_SESSION['id'];
       $sql1="select * from add_to_cart_t where u_id='$user_id'";
        $query1=mysqli_query($conn,$sql1);
        $count=mysqli_num_rows($query1);
 } 
 else if(isset($_SESSION['cart']))
 {
     $count=count($_SESSION['cart']);
 }
  ?>
   <!-- cart number -->

  <section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - <?php echo $count ?> items</h5>
          </div>
          <!-- Single item -->
          <div class="card-body">

            <!-- add to cart(fetch the details) -->
          <?php
  include '../database/db.php';
  $product_total=0;
  $grand_total=0; 

  //user login thakle
  if(isset($_SESSION['id'])){
    $user_id=$_SESSION['id'];
       $sql2="select * from add_to_cart_t where u_id='$user_id'";
      $query2=mysqli_query($conn,$sql2);
      $row_no=mysqli_num_rows($query2);
     

      if( $row_no > 0){
        while($row3 = mysqli_fetch_assoc($query2)) {
            $p_id=$row3['p_id'];
            // echo  $p_id;
            // echo '--';

            $sql="select * from product where item_id='$p_id'";
            $query=mysqli_query($conn,$sql);
            while($row =mysqli_fetch_assoc($query)){
              echo '<div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="'.$row["image"].'"
                    class="w-100" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p style="color:rgb(0, 13, 79);"><strong>'.$row["item_desc"].'</strong></p>        
                <p style="color:rgb(9, 29, 125)" class="fs-5 fw-bold">Price:'.$row["price"].'<input type="hidden" class="i_price" value="'.$row["price"].'"></p>
               
                <button type="submit" data-product_id="'.$row["item_id"].'"  class=" remove_btn btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <input type="hidden" name="item_id" value="'.$row["item_id"].'">
                  <i class="fas fa-trash"></i>
                </button>
                
                
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <form class="quantity"> 
                <div class="d-flex mb-4" style="max-width: 300px">
              
                

                  <div class="form-outline">
                  <label class="form-label" for="form1">Quantity</label>
                    <input   id="form1" min="1" name="quantity" onChange="product_total()" value="'.$row["item_quantity"].'" type="number" class="i_quantity form-control" />
                  </div>


                   </form>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <span style="font-size:130%"><strong>TOTAL:</strong> </span>
                <span class=" i_total text-start text-md-center fw-bold fs-5 " style="font-style:bold;color:rgb(29, 22, 95)">'.$row["price"].'    </span>
               
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          
            <hr class="my-4" />
            ';
          
            }
          
         }
        }
      }
  



             //user login thakle
    if(!isset($_SESSION['id'])){
   if(isset($_SESSION['cart']))
  {
    foreach($_SESSION['cart'] as $key =>$value)
    {  
            echo '<div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="'.$value["item_image"].'"
                    class="w-100" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p style="color:rgb(0, 13, 79);"><strong>'.$value["item_desc"].'</strong></p>        
                <p style="color:rgb(9, 29, 125)"class="fs-5 fw-bold">Price:'.$value["item_price"].'<input type="hidden" class="i_price" value="'.$value["item_price"].'"></p>
               
                <button type="submit" data-product_id="'.$value["item_id"].'"  class=" remove_btn btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <input type="hidden" name="item_id" value="'.$value["item_id"].'">
                  <i class="fas fa-trash"></i>
                </button>
                
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <form class="quantity"> 
                <div class="d-flex mb-4" style="max-width: 300px">
              
                

                  <div class="form-outline">
                  <label class="form-label fw-bold" for="form1">Quantity</label>
                    <input id="form1" min="1" name="quantity" onChange="product_total()" value="'.$value["item_quantity"].'" type="number" class="i_quantity form-control" />
                  </div>


                   </form>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <span style="font-size:130%"><strong>TOTAL:</strong> </span>
                <span class=" i_total text-start text-md-center fw-bold fs-5 " style="font-style:bold;color:rgb(29, 22, 95);">'.$value["item_price"].'    </span>
               
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          
            <hr class="my-4" />
            ';
          }}}?>
            </div>
            </div>
        </div>              
       <!-- hr er porer ta just body a -->





       <!-- grand total -->
        <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Summary</h5>
              </div>
              <div class="card-body">
                  <ul class="list-group list-group-flush">
                 
                  
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3"
                  >
                    <div>
                      <strong>Total amount</strong>
                      <strong>
                        <p class="mb-0">(including GST)</p>
                      </strong>
                    </div>
                    <span class="grand_total fw-bold fs-4">
                      <p class="grand_total "></p>
                    </span>
                  </li>
                  </ul>
                  <button type="submit" class=" buy_now_btn btn btn-primary btn-lg btn-block">
                   Buy now
                   </button>
                    
              </div>
            </div>
          </div>
        <!-- grand total -->

    </div>
  </div>
</section>
     

















<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<!-- for item total and grand total -->
<script>
  var i_price=document.getElementsByClassName('i_price');
  var i_quantity=document.getElementsByClassName('i_quantity');
  var i_total=document.getElementsByClassName('i_total');
  var grand_total=document.getElementsByClassName('grand_total')[0];
   var g_total=0;
   var price=0;


  // for first time show the grand total
  for(i=0;i<i_price.length;i++)
    {
      price= parseFloat(i_total[i].innerText);
    g_total=g_total+price;
   
    }
    grand_total.innerText=g_total;
      // for first time show the grand total


      //  for quantity change--product and grand price change
   function product_total()
   {
    g_total=0;
    for(i=0;i<i_price.length;i++)
    {

      // console.log(i_quantity[0].value);
      i_total[i].innerText=(i_price[i].value)*(i_quantity[i].value);

      price=parseFloat(i_total[i].innerText);
      g_total=g_total+price;
    }
    grand_total.innerText=g_total;
  }
  </script>
      <!-- //  for quantity change--product and grand price change -->

   

<!-- for remove button -->
<script>
	  $(document).ready(function(){

// for add to cart function
  $(document).on('click','.remove_btn',function(){
	var id=$(this).data('product_id');// here this refers this object.
	//  alert('the value of id is'+id);

      $.ajax({
		url: "../database/manage_remove_btn.php",
		type :"POST",
	    data :{item_id : id},
	    success : function(data){
        console.log(data);
          if(data==1)
		  {
       
            alert('Item removed');
            location.reload();
		  }

		
        }
	});
});
});
	</script>
<!-- for remove button -->


<!-- buy_now user -->
<script>
	  $(document).ready(function(){


  $(document).on('click','.buy_now_btn',function(){
    var grand1_total = document.querySelector('.grand_total').innerText;// here this refers this object.
    if(grand1_total==0){
	  alert('No item is added');
    }
     else{
      $.ajax({
		url: "../database/manage_buy_now.php",
		 type :"GET",
	  //  data :{item_id : grand_total},
	    success : function(data){
          if(data==1)
		  {
         let url="http://localhost/shopping_website/php_folder/buy_now.php?grand_total="+grand1_total;
         window.location.href=url;
		  }
      else{
        location.replace("http://localhost/shopping_website/php_folder/sign_php/signin_page.php");
      }
        }
	});
}
});
});
	</script>
<!-- buy_now user -->



</body>

</html>