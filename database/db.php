<?php
  $server="localhost";
  $user="root";
  $password="";
  $database="shopping_website";


  $conn=mysqli_connect($server,$user,$password, $database);

  if(!$conn)
  {
    ?>
    <script>
        alert(" no connection seccuesful");
        </script>  
        <?php
  }
  
?>