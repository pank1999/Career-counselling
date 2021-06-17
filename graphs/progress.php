<?php 
$connection= new mysqli('localhost:3308','root','','assignment_2') or die(mysqli_error($connection));
//$email_id=$_SESSION['email'];

$sql="SELECT * FROM `result_skills_class _8_10` WHERE user_name='3@gmail.com'";
$sql_result=mysqli_query($connection,$sql) or die(mysqli_error($connection)) ;
    $row=mysqli_fetch_array($sql_result);
      $result=$row['correct_answer'];
      echo $result*10;
 
 
?>