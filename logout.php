<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:Homepage.php');
}
else{
    session_destroy();
    
    echo "<script>alert('You are successfully logout !')</script>"; 
    header('location:Homepage.php');
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    
</body>
</html>