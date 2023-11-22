<?php
session_start();
include("connection.php");
include("functions.php");

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$user_data = check_login($conn);

if (!$user_data) {
    header("Location: login.php"); // Redirect to the login page
    exit();
}

$_SESSION
?>

<!DOCTYPE html>
<html>
<head>
 <title>Knitting Hub</title>
</head>     
<body>


<h1>Woolen Wonders</h1>
Hello, <?php echo $user_data["user_name"];?>
<br>
        <p>Knitting garments for yor loved ones is a nice way of showing your love to them.
            It ca be a baby shawl, a sweater or even socks.
        </p>
        <a href="logout.php">Logout</a>

<style>
            body {
                background-color:ghostwhite ;
                background-blend-mode:darken ;
                background-size: cover;
                background-repeat: no-repeat;
                font-size: larger;
                font-family: 'Comic Sans';
            }
            h1{
                text-align: center;
                font-family:sans-serif;
            }
           
            </style>
</body>
</html>