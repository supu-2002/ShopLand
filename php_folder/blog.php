<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"
  />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">





    <style>
      body{
        background-color: rgb(220, 228, 228);
      }
 .box {
  display: grid;
  padding: 2rem;
  grid-template-columns: 300px 1fr;
  gap: 1rem;
  align-items: center;
  max-width: 800px;
  margin: 0 auto;
  font: 500 100%/1.5 system-ui;
}
.blog_image {
  max-width: 100%;
  height: auto;
}
@media (max-width: 650px) {
  .box {
    display: block;
    font-size: 80%;
  }
  .blog_para{
    position: relative;
    margin: -3rem 0 2rem 1rem;
    padding: 1rem;
    background: rgba(white, 0.8);
    background-image: url("image_folder/bg_image/bg-grey.avif");

  }
}


.banner-wrapper {
  display: flex;
  flex-direction: row;
  align-items: stretch;
  position: relative;
  flex-wrap: nowrap;
  flex-shrink: 0;
  justify-content: center;
  .banner-container {
    align-items: center;
    flex-grow: 1;
    flex-direction: column;
    flex-shrink: 1;
    display: flex;
    max-width: 1127px;
    position: relative;
    flex-basis: 0px;
    justify-content: center;
    .banner-img-wrapper {
      border-radius: 8px;
      overflow-y: hidden;
      overflow-x: hidden;
      position: relative;
      width: 100%;
      .banner-padding {
        padding-top: 21.296%;
        @media only screen and (max-width: 768px) {
          padding-top: 25.296%;
        }
        overflow-y: hidden;
        overflow-x: hidden;
        position: relative;
        width: 100%;
        background-color: #ccc;
        .banner-abs {
          padding-left: 0;
          flex-grow: 1;
          flex-direction: column;
          margin-right: 0;
          z-index: 0;
          flex-shrink: 1;
          align-items: stretch;
          margin-left: 0;
          min-width: 0;
          bottom: 0;
          justify-content: space-between;
          display: flex;
          left: 0;
          padding-top: 0;
          top: 0;
          right: 0;
          margin-bottom: 0;
          position: absolute;
          padding-bottom: 0;
          min-height: 0;
          .banner-abs-main {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            padding-top: 25%;
            @media only screen and (max-width: 768px) {
              padding-top: 25%;
            }
            width: 100%;
            height: 0;
            overflow-y: hidden;
            overflow-x: hidden;
            .banner-inner-wrapper {
              position: absolute;
              padding-left: 0;
              right: 0;
              top: 0;
              left: 0;
              bottom: 0;
              flex-grow: 1;
              flex-direction: column;
              margin-right: 0;
              flex-shrink: 1;
              align-items: stretch;
              justify-content: space-between;
              display: flex;
            }
            .CoverPhoto {
              position: absolute;
              right: 0;
              top: 0;
              left: 0;
              bottom: 0;
              width: 100%;
            }
          }
        }
      }
    }
  }
}


  @media (max-width: 650px) {
    .blog-para{
    position: relative;
    margin: -3rem 0 2rem 1rem;
    padding: 1rem;
    /* background-color:black; */
    color:black;
    font-size:4rem;
  }
  .box img{
  opacity: 0.7;
}
}

    </style>
</head>


<body>
 <?php
  include 'nav.php';
 ?>
 <div class="banner-wrapper">
  <div class="banner-container">
    <div class="banner-img-wrapper">
      <div class="banner-padding">
        <div class="banner-abs">
          <div class="banner-abs-main">
            <div class="banner-inner-wrapper">
              <img alt="" class="CoverPhoto" src="https://blog.shift4shop.com/hubfs/ecommerce%20myths%20feature.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="box">
    <img src='../image_folder/blog/blog1.jpg' width="400" height="300" alt=''class="blog_image">
    <p class="blog_para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati odio voluptatum sit quis commodi? Obcaecati harum rerum expedita numquam necessitatibus.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae nisi quidem sint eius quos corrupti, perferendis unde at. Ipsam saepe error, quos iste enim temporibus voluptatum ea harum inventore neque!</p>
    
    <img src='../image_folder/blog/blog2.jpg' width="400" height="300" alt='' class="blog_image">
    <p class="blog_para">Aut dolor aspernatur cupiditate repudiandae eos accusantium inventore molestiae sequi earum perspiciatis qui odio minima magni, iste fugit reiciendis atque tenetur quaerat itaque incidunt, consequuntur esse. Accusantium doloribus odit debitis.</p>
   
    <img src='../image_folder/blog/blog3.jpg' width="400" height="300" alt='' class="blog_image">
    <p class="blog_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae nisi quidem sint eius quos corrupti, perferendis unde at. Ipsam saepe error, quos iste enim temporibus voluptatum ea harum inventore neque!</p>

    <img src='../image_folder/blog/blog4.jpg' width="400" height="300" alt='' class="blog_image">
    <p class="blog_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae nisi quidem sint eius quos corrupti, perferendis unde at. Ipsam saepe error, quos iste enim temporibus voluptatum ea harum inventore neque!</p>
  </div>





   <!-- footer -->
 <?php 
    include '../html_folder/footer.html';
    ?>


  </body>
</html>