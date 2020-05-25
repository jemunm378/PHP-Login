<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.html");
	  exit;
  }
?>

<!-- Show password protected content down here -->

