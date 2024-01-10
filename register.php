<?php 
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fitness </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    

</head>

<body>
<section class="ftco-appointment">
<!-- Page Content -->
    <div class="container"><div class="row no-gutters d-md-flex align-items-center">
	    	<div style="margin-left:30%" class="col-md-6 appointment ftco-animate">
            <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <h2 class="mb-4">Welcome <small>in</small> Fitness</h2>
            </div>
            </div>
                <h4 class="mb-3">Register</h4>

        <form action="" method="POST"> 
        <div class="form-group">
            <label class="text-light">User Name</label>
            <input type="name" class="form-control" name="username">
            
        </div>
        <div class="form-group">
            <label class="text-light" for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"name="email"  aria-describedby="emailHelp" required>
           
        </div>
        <div class="form-group">
            <label class="text-light">Phone</label>
            <input type="phone" class="form-control"name="phone" aria-describedby="phoneHelp" required>
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="text-light">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1"required>
           
        </div>
        <div class="form-group">
            <label class="text-light" for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password2" id="exampleInputPassword1"required>
            <small id="exampleInputPassword1" class="form-text text-muted">must two Password matched.</small>
        </div>
        
        <button type="submit" name="reg" class="btn btn-primary">Submit</button>
        &nbsp; &nbsp;  
        
        <a  class="link" href="index.php">Have an account</a>
        
        </form>
            </div>
            </section>
            <?php
$Connect=mysqli_connect('localhost','root','','fitness');
if(isset($_POST['reg']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $password_2=$_POST['password2'];
   /* Secure password hash. */
    $hash = password_hash($password_2, PASSWORD_DEFAULT);
    if($password == $password_2){
    $qeury="INSERT INTO `users`(username, password, email, phone ) VALUES ('$username','$hash','$email','$phone' )";
    $result=mysqli_query($Connect,$qeury);

if(!$result)
    {
        echo"faild".mysqli_error($Connect);
    }
    $_SESSION['username']= $username;
    header('location: index.php');
}
else {
    $error="Two Password not Confirm";
    echo "
           <br>
           
            <h6 style='color:white'>  

            &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
            $error</h6>
            ";
}
}


?>




</div>

