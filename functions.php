<?php

function check_login($conn)
{
    if(isset($_SESSION['user_id']))
{

$id = $_SESSION['user_id'];
//SQL Query
$user_name="";
$password="";
$query = "INSERT INTO users(user_name,password) values('$user_name','$password')";

//read from database
$query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1";

$query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";

$result = mysqli_query($conn,$query);
if($result && mysqli_num_rows($result) > 0)
{
    $user_data= mysqli_fetch_assoc($result);
    return $user_data;
}

//redirect to login
header("location: login.php");
die;
}
}

function random_num($length)
{

    $text = "";
    if($length < 5)
    {
      $length = 5;
      
    }
    $len = rand(4, $length);

    for ($i = 0; $i < $length; $i++){
        # code...

        $text .= rand(0,9);
    }
    return $text;
}