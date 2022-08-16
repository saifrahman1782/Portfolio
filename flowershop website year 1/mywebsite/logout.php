<?php 

session_start();
session_destroy();

header("Location: login.php");      //sends you back to the login screen when press logout on the homepage//

?>