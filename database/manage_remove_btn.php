
<?php
      session_start();

?>
<?php
      include 'db.php';
      $p_id=$_POST['item_id'];
	
	   //    if user is login user
       if(isset($_SESSION['id']))
       {
            $user_id=$_SESSION['id'];
			$sql="delete from add_to_cart_t where p_id='$p_id' and u_id='$user_id'";
			$query=mysqli_query($conn,$sql);
			echo 1;

	}







    //   user login na thakle
      else{
		foreach($_SESSION['cart'] as $key =>$value)
		{
			if($value['item_id']==$p_id){
				// oi row takei del kore debe
			     unset($_SESSION['cart'][$key]);
                 $_SESSION['cart']=array_values($_SESSION['cart']); 
			     echo 1;
			}
			// array rearrange korbe session cart variable akta del hoye gele
			
		}
	}
	
 ?>