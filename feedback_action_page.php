<?php

$connect= new mysqli("localhost:3308","root","","feedback") or die(mysqli_error($connect));

$name=$_POST['Name'];
$email=$_POST['Email'];
$message=$_POST['Message'];

$query="INSERT INTO user_feedback(name,email,message) VALUE('$name','$email','$message')";
$query_run=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo "<script>alert('Feedback recorded successfully $name')</script>"; 
echo "<script>location.href = 'startbootstrap-modern-business-gh-pages/Homepage.php'</script>";



?>

