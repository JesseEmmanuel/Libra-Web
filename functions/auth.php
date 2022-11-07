<?php 

session_start();

include "conn.php";

if(isset($_POST['uname']) && isset($_POST['password']))
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

    
    if(empty($uname) || empty($password))
    {
        header("Location: http://localhost:8080/Libra/signin.php?message=All Fields are required");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM tblaccounts WHERE accountUserName='$uname' AND acountPassWord='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row['accountUserName'] === $uname && $row['acountPassWord'] === $password)
        {
            echo "Logged in!";
            $_SESSION['logged_in'] = 1;
            $_SESSION['accountUserName'] = $row['accountUserName'];
            $_SESSION['acountPassWord'] = $row['acountPassWord'];
            $_SESSION['accountID'] = $row['accountID'];
            
            header("Location: http://localhost:8080/Libra/");

            exit();
        }
        else
        {
            header("Location: http://localhost:8080/Libra/signin.php?message=Sorry, User not found");

            exit();
        }
    }
}
else
{
    header("Location: http://localhost:8080/Libra/signin.php");

    exit();
}