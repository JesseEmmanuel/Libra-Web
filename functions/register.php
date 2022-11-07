<?php 

session_start();

include("conn.php");

if(isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['fname']) && isset($_POST['lname'])
    && isset($_POST['re_password']) && isset($_POST['profession']) 
    && isset($_POST['email']) && isset($_POST['contactInfo']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $uname = validate($_POST['uname']);
        $password = validate($_POST['password']);
        $re_password = validate($POST['re_password']);
        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $profession = validate($_POST['profession']);
        $email = validate($_POST['email']);
        $contactInfo = validate($_POST['contactInfo']);

        if(empty($uname) || empty($password) || empty($re_password)
        || empty($fname) || empty($lname) || empty($profession)
        || empty($profession) || empty($email) || empty($contactInfo))
        {
            if($password != $re_password)
            {
                header("Location: http://localhost:8080/Libra/signup.php?message=All Fields are required");

                exit();
            }
        }
    }