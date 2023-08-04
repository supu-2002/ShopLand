
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Signup page</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css_folder/sign_css/signup.css">
   </head>
<body>

<?php

include '../../database/db.php';

 if(isset($_POST['submit']))
 {
    $fname=mysqli_real_escape_string($conn,$_POST['first-name']);
    $lname=mysqli_real_escape_string($conn,$_POST['last-name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $number=mysqli_real_escape_string($conn,$_POST['number']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $c_password=mysqli_real_escape_string($conn,$_POST['c-password']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);

  //  passowrd encrypt
    $pass=password_hash( $password,PASSWORD_BCRYPT);
    $cpass=password_hash( $c_password,PASSWORD_BCRYPT);


    $emailQuery="select * from registration where email='$email'";
    $query=mysqli_query($conn,$emailQuery);
    $emailCount=mysqli_num_rows($query);

    if($emailCount>0)
    {
      ?>
      <script>
          alert("email already exist");
          </script>  
          <?php
    }
    else{
      if( $password=== $c_password)
      {
           $insertQuery="insert into registration (fname,lname,email,ph_no,password,gender)values('$fname','$lname','$email','$number','$pass',' $gender')";
           $iquery=mysqli_query($conn,$insertQuery);
           if($iquery)
           {
             ?>
             <script>
                 alert("insertion seccuesful");
                 </script>  
                 <?php
                 header("Location: http://localhost/shopping_website/php_folder/sign_php/signin_page.php");

           }
           else{
             ?>
             <script>
                 alert(" no inserton seccuesful");
                 </script>  
                 <?php
           }
         
      }
      else{
        ?>
        <script>
            alert("passwords are not matching");
            </script>  
            <?php
      }
    }
    
 }
?>




  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="POST" >
        <div class="user-details">
          <div class="input-box">

            <span class="details">First Name</span>
            <input type="text" name="first-name" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="last-name" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="number"placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="c-password"placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male" required>
          <input type="radio" name="gender" id="dot-2" value="female" required>
          <input type="radio" name="gender" id="dot-3" value="Prefer not to say" required>
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <button type="submit" name="submit">Register</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

