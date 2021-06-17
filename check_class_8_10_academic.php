<?php

$con= new mysqli("localhost:3308","root","","class_8_10_academic_report") or die(mysqli_error($con));
session_start();

$Maths = $_POST['Maths'];
$Science= $_POST['Science'];
$English = $_POST['English'];
$Hindi = $_POST['Hindi'];
$Social_science= $_POST['Social_science'];
$Computer = $_POST['Computer'];

$email=$_SESSION['email'];

$_SESSION['id']=mysqli_insert_id($con);
$_SESSION['math']=$_POST['Maths'];
$_SESSION['science']= $_POST['Science'];
$_SESSION['english']= $_POST['English'];
$_SESSION['hindi'] = $_POST['Hindi'];
$_SESSION['computer']= $_POST['Computer'];
$_SESSION['social science']= $_POST['Social_science'];



$user_check = "SELECT email from academic_marks where email = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 

$_SESSION['Academic_10']=1;


if( mysqli_num_rows($user_check_query )> 0){
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = 'dashboard.php'</script>";
}

else{



   $mysqli="INSERT INTO academic_marks(email,Maths,Science,English,Hindi,Social_science,Computer) VALUES('$email','$Maths','$Science','$English','$Hindi','$Social_science','$Computer')";
   $sql1="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','Science','$Science')";
   $sql2="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','Maths','$Maths')";
   $sql3="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','Social science','$Social_science')";
   $sql4="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','English','$English')";
   $sql5="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','Hindi','$Hindi')";
   $sql6="INSERT INTO final_academic_marks(email,Subject,Marks) VALUES('$email','Computer','$Computer')";
   $user_submition=mysqli_query($con,$mysqli) or die(mysqli_error($con));
   $sql_result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
   $sql_result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
   $sql_result3=mysqli_query($con,$sql3) or die(mysqli_error($con));
   $sql_result4=mysqli_query($con,$sql4) or die(mysqli_error($con));
   $sql_result5=mysqli_query($con,$sql5) or die(mysqli_error($con));
   $sql_result6=mysqli_query($con,$sql6) or die(mysqli_error($con));

   
   
   echo "<script>alert('you have successfully submitted ')</script>";
   echo "<script>location.href = 'dashboard.php'</script>";

}
   
   
 
  

  


  
 ?>


