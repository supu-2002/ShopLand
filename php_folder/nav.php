<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
     <!-- fontawesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- bootstrap css -->
   
   
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Exo+2:wght@300;700;900&display=swap");

        .nav_icon{
            text-decoration:none;
        }
        .nav_link:hover{
            color:rgb(253, 255, 255)!important;
            background-color: rgb(140, 87, 255)!important;
            border-radius:8px!important;
            
        }
        .icon_name{
            letter-spacing:3px;
            font-size:1.5rem;
            color:rgb(17, 75, 81);
            font-family: "Exo 2", sans-serif;
          


        }
        </style>
    
</head>
<body>

  
  <!-- for showing the count -->
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
  <!-- for showing the count -->

     <nav class = "navbar navbar-expand-lg navbar-light bg-white py-2 sticky-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.php">
                <!-- <img src = "images/shopping-bag-icon.png" alt = "site icon"> -->
                <span class = "ms-1 fw-bold icon_name">ShopLand</span>
            </a>

            <div class = "order-lg-2 nav-btns">

                <a href="add_to_cart.php" class = " position-relative px-2 border border-0 nav_icon" >
                    <i class = "fa fa-shopping-cart fa-lg" style="color:rgb(0, 60, 77);"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-info"><?php echo$count ?> </span>
                </a>
               
                <a  href="#" class = " position-relative px-3  border border-0 nav_icon" style="margin-left:8px;">
                    <!-- <i class = "fa fa-heart fa-lg" style="color: #809ac6;"></i> -->
                    <i class="fas fa-search fa-lg" style="color:rgb(0, 60, 77)"></i>
                    <!-- <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">2</span> -->
                 </a>
                <?php
                if(isset($_SESSION['id']))
                 {?>
                    <a href="logout.php" class = " position-relative  border border-0 nav_icon" onclick=show()>
                <i class="fas fa-sign-out-alt fa-lg" style="color: rgb(0, 60, 77);"></i>
                
                </a>
                <?php
                 }
                 else {
                ?>
                <a href="sign_php/signin_page.php"  class = " position-relative  border border-0 nav_icon">
                <i class="fas fa-user-plus fa-lg" style="color: rgb(0, 60, 77);"></i>
                </a>
                <?php
                 }
                 ?>
            </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark nav_style nav_link" href = "index.php">home</a>
                    </li>

                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark  nav_link" href = "collection.php">Collection</a>
                    </li>

                    <li class="nav-item dropdown px-2 py-2">
                    <a class="nav-link dropdown-toggle text-uppercase text-dark  nav_link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Catagory
                     </a>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="shop.php?my_id=7">Watch</a></li>
                       <!-- <li><hr class="dropdown-divider"></li> -->
                       <li><a class="dropdown-item" href="shop.php?my_id=1">Fashion</a></li>
                       <!-- <li><hr class="dropdown-divider"></li> -->
                       <li><a class="dropdown-item" href="shop.php?my_id=4">Phones</a></li>
                       <li><a class="dropdown-item" href="shop.php?my_id=3">Shoes</a></li>
                       <li><a class="dropdown-item" href="shop.php?my_id=2">Headphones</a></li>
                       <li><a class="dropdown-item" href="shop.php?my_id=5">Bags</a></li>


                     </ul>
                      </li>
                
                    
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark  nav_link" href ="blog.php">Blog</a>
                    </li>
                      
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark  nav_link" href ="about.php">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->






<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- bootstrap js link -->

<script>
    function show(){
   alert("You are logout from this website");
    }
</script>

</body>
</html>