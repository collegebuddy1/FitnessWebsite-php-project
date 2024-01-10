
<?php
if(isset($_POST['send']))
{
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];

    $query="INSERT INTO `contact` (`first_name`, `last_name`, `phone`, `email`, `massage`)";
    $query .= "VALUES ('$first_name', '$last_name', $phone, '$email', '$massage' )";
    $result=mysqli_query($connect,$query);
}



?>
