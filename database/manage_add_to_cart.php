
<?php
      session_start();

?>
<?php
       include 'db.php';
		$p_id=$_POST["item_id"];
          $sql="select * from product where item_id='$p_id'";
         $query=mysqli_query($conn,$sql);
         $row =mysqli_fetch_assoc($query);

         
    //    if user is login user
       if(isset($_SESSION['id'])) {
            $user_id=$_SESSION['id'];
          
           
           
            $sql="select * from add_to_cart_t where p_id='$p_id' and u_id='$user_id'";
            $query=mysqli_query($conn,$sql);
            $row_no=mysqli_num_rows($query);
             // product ta na thakle table e
            if($row_no==0) {
                $sql="Insert into add_to_cart_t values('$user_id','$p_id')";
                $query=mysqli_query($conn,$sql);
                echo 1;
            }
            else{
              echo 0;
            }
          }




            
     
                 
          
       










        //    not login user 
       
    //    cart session var set na thake
    if(!isset($_SESSION['id'])){
       if(isset($_SESSION['cart']))
	   {
        $cartid=array_column($_SESSION['cart'],'item_id');
		//age theke item ta thakle
        if(in_array($row['item_id'],$cartid))
        {
            
            echo 0;
            
        }
        else{
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('item_id' =>$row['item_id'],'item_name' =>$row['item_name'],
        'item_desc' =>$row['item_desc'],'item_price' =>$row['price'],'item_image' =>$row['image'],
        'item_star' =>$row['star'],'item_wishlist' =>$row['wishlist'],'item_quantity' =>1);

        echo 1;

        }
      }
    //    cart session var set na thake
	   else{
		$_SESSION['cart'][0]=array('item_id' =>$row['item_id'],'item_name' =>$row['item_name'],
                                          'item_desc' =>$row['item_desc'],'item_price' =>$row['price'],'item_image' =>$row['image'],
                                          'item_star' =>$row['star'],'item_wishlist' =>$row['wishlist'],'item_quantity' =>1);
      
                                        
	   
                                        echo 1;
                                      
	   } 
    
    }
	
    



	
