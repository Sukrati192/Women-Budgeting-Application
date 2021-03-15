<?php include 'connection.php';
         session_destroy();
         header('location: index.php');
         session_unset ();
         unset($_SESSION["firstname"]);
         unset($_SESSION["email"]);
         unset($_SESSION["goal"]);         
         die();
?>