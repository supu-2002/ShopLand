<?php
      session_start();

?>
<?php
       include 'db.php';
       if(isset($_SESSION['id']))
       {
         echo 1;
       }
       else{
        $_SESSION['buy_now_user']=1;
        echo 0;
       }

       ?>