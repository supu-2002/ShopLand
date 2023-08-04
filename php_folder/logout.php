<?php
include '../database/db.php';

session_start();
session_unset();
session_destroy();

header("Location: http://localhost/shopping_website/php_folder/index.php");


?>