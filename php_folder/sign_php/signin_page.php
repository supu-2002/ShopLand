<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../../css_folder/sign_css/signin.css">
</head>
<body>
   

    <?php

  include '../../database/db.php';

 if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $eQuery="select * from registration where email='$email'";
    $query=mysqli_query($conn,$eQuery);
    $emailCount=mysqli_num_rows($query);

    if($emailCount==0) {
      ?>
      <script>
          alert("email doesnot exist");
          </script>  
          <?php
    }
    else{
     $email_pass=mysqli_fetch_assoc($query);
     $db_pass=$email_pass['password'];
     $pass_decode=password_verify($password, $db_pass);
     if( $pass_decode) {

      echo "login successful";
      $_SESSION['id']=$email_pass['user_id'];
      $_SESSION['username']=$email_pass['fname'];


    

       $user_id=$_SESSION['id'];
        // session cart var is set(means user  without login add to cart koreche)
       
       if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key =>$value) {  
            $p_id=$value["item_id"];
            $sql="select * from add_to_cart_t where p_id='$p_id' and u_id='$user_id'";
            $query=mysqli_query($conn,$sql);
            $row_no=mysqli_num_rows($query);
            if($row_no==0) {
                $sql="Insert into add_to_cart_t values('$user_id','$p_id')";
                $query=mysqli_query($conn,$sql);
            }
          
         }
         
                 foreach($_SESSION['cart'] as $key =>$value)
                 {
                     
                         // oi row takei del kore debe
                          unset($_SESSION['cart'][$key]);
                        
                 }     
        }
        
        //if buy now click korar por then login koreche
        if(isset($_SESSION['buy_now_user'])){
       header("Location: http://localhost/shopping_website/php_folder/add_to_cart.php");

        }
        else{
       header("Location: http://localhost/shopping_website/php_folder/index.php");
        }

     }
     else{
      echo " login unsuccessful";

     }
    } 
 }
 ?>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>"; method="POST">
            <div class="form-control">

                <input type="email" name="email" required>
                <label>Enter your email</label>
            </div>

            <div class="form-control">
                <input type="password" name="password" required>
                <label>Enter your password</label>
            </div>
            <button type="submit" name="submit">Sign In</button>

            <div class="form-help"> 
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>

                <a href="#">Forget password?</a>
            </div>

        </form>
        <p>Not have an account?<a href="signup_page.php">Signup now</a></p>
    </div>
</body>
</html>
