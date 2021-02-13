<?php

$db = mysqli_connect("localhost","root","root","food project");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login']))
{		
    $user_id = $_POST['user_id'];
	$password = $_POST['password'];
 
    $insert = mysqli_query($db,"INSERT INTO `signin`(`u_id`, `password`) VALUES ('$user_id', '$password')");

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