<?php

$db = mysqli_connect("localhost","root","root","food project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $email = $_POST['email'];
	$password = $_POST['password'];
    $mobile = $_POST['mobile'];
 
    $insert = mysqli_query($db,"INSERT INTO `register`(`name`, `email`, `password`, `mobile`) VALUES ('$name', '$email', '$password', '$mobile')");

    if(!$insert)
    {
        echo mysqli_error($db);
    }
    else
    {
        header("location: signin.html");
    }
}

mysqli_close($db); // Close connection
?>