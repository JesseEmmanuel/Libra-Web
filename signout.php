<?php 

session_start();

session_unset();

session_destroy();

header("Location: signin.php?message=You've Signed Out Successfully");