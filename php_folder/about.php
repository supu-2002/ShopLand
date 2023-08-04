<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
    
/* about */
#about{
    margin-top: 50px;
}
#about h1{
    text-align: center;    
    font-weight: bold;
    color: #1c1c50;
}
/* about */
    </style>
<body>


 <!-- nav bar  html-->
 <?php 
    include 'nav.php';
    ?>
    <!-- nav bar  html-->
    
<!-- about -->
<div class="container" id="about">
    <h1>ABOUT US</h1>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
            <div class="card">
                <img src="../image_folder/about.png" alt="">
            </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, vitae numquam aspernatur repellendus autem sint beatae, facilis quas deserunt iure natus minus ab deleniti eveniet neque quasi ullam id in alias consectetur quia nesciunt. Exercitationem vitae atque commodi architecto tenetur! Fugit necessitatibus nesciunt, eligendi tempora reprehenderit suscipit doloribus animi mollitia maiores? Numquam, est laborum dicta aperiam nobis deserunt libero non dolorem cum dolorum distinctio commodi iure, tenetur animi? Nam similique culpa consequuntur itaque quasi ipsa placeat ea perferendis est quo, ut eaque quis dolorem, aliquam iste reprehenderit provident neque magnam voluptatibus. Eaque provident omnis reiciendis ducimus, magni qui voluptatem quibusdam.</p>
        </div>
    </div>
</div>
<!-- about -->



 <!-- footer -->
 <?php 
    include '../html_folder/footer.html';
    ?>
       <script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>

</body>
</html>