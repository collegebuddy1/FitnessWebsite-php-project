<?php
session_start();
$username="";
$email="";
$errors = array();
$connect=mysqli_connect('localhost','root','','fitness');
// log user in log form page 

if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($connect,$_POST['username']);
    $password=mysqli_real_escape_string($connect,$_POST['password']);



    if(empty( $username))
        {
            array_push($errors,"username is required ");
        }

    if(empty( $password))
        {
            array_push($errors,"Password is required ");
        }
        // if errors login form
    if(sizeof($errors)==0)
    {
        $sql="SELECT * FROM users WHERE username= '$username' AND password= '$password'";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['username']= $username;
            // $_SESSION['success']= "You are logging in";
            header('location: home.php');
             
        }
        else
        {
            array_push($errors,"Worng Username / password Confirmed");
            //  
        }

    }







}

    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header("location:index.php");
    }
    // function for errors 
function errros()
{
    global $errors;
    if(count($errors)> 0)
    {
        foreach($errors as $error)
        {
            echo
            "<div class='error'>
            <p>$error</p>
            </div>
            ";
        }
    }
}

function success_login()
{
    if(isset($_SESSION['success']))
    {
      echo$_SESSION['success'];
      
    }
    else {
        unset($_SESSION['success']);
    }
    
      if(isset($_SESSION['username']))
         {
             echo $_SESSION['username'];
         }


}