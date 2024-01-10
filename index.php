<?php 


include 'includes/register_m.php';


// log user in log form page 



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Fitness </title>

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
            <br><br><br><br><br><br> <br>
            </div>
                <h4 class="h4 mb-4">Sig In</h4>

        <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="username" name="username" class="form-control" required>
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
       
        <button type="submit" name="login" class="btn btn-primary ">Submit</button>
        &nbsp;  &nbsp;  &nbsp;  
        <a class="link" href="register.php">Dont Have an account</a>
        </form>
            </div>
            </section>



<?php
if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($connect,$_POST['username']);
    $password=mysqli_real_escape_string($connect,$_POST['password']);
    
    

  // Verify the hash against the password entered 
   

  $sql="SELECT password FROM users WHERE username= '$username' ";
        $result=mysqli_query($connect,$sql);

        if(mysqli_num_rows($result)==1)
        {
            while($row=mysqli_fetch_assoc($result)):
            $password_v=$row['password'];
            if (password_verify($password, $password_v))
            {
                $_SESSION['username']= $username;
                header('location: home.php');
            
            } 
            endwhile;
       }

        
        else
        {
            
            echo "
           
            <h6 style='color:white'>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
            Worng Username / password Confirmed</h6>
            ";
            //  
        }
 

    



    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header("location:index.php");
    }
    // function for errors 




}

?>
</div>












