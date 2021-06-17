<?php

$con= new mysqli("localhost:3308","root","","graduation") or die(mysqli_error($con));
session_start();


$college_name = $_POST['college'];
$course= $_POST['course'];
$Branch=$_POST['Branch'];
$year = $_POST['year'];
$cgpa = $_POST['percentage'];




$email=$_SESSION['email'];

$_SESSION['id']=mysqli_insert_id($con);


$user_check = "SELECT email from academic_marks where email = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 



if( mysqli_num_rows($user_check_query )> 0){
   $_SESSION['Academic_12']=1;
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = '../dashboard_graduation.php'</script>";
}

else{



   $mysqli="INSERT INTO academic_marks (email,college_name, course,Branch,year,percentage) VALUES('$email','$college_name','$course','$Branch','$year','$cgpa')";
  // $s="INSERT INTO `streams` (`email`, `stream`) VALUES ('$email', '$stream')";
   //$s_query=mysqli_query($con,$s);
   $user_submition=mysqli_query($con,$mysqli) or die(mysqli_error($con));
   //$sql1="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','$Sub1','$Sub1mark')";
   //$sql2="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','$Sub2','$Sub2mark')";
   //$sql3="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','$Sub3','$Sub3mark')";
   //$sql4="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','$Language','$Languagemark')";
   //$sql5="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','$Additional','$Additionalmark')";
  // $sql6="INSERT INTO academic_report_class_12(email,Subject,Marks) VALUES('$email','Computer','$Computer')";
//   $user_submition=mysqli_query($con,$mysqli) or die(mysqli_error($con));
  // $sql_result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
   //$sql_result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
   //$sql_result3=mysqli_query($con,$sql3) or die(mysqli_error($con));
   //$sql_result4=mysqli_query($con,$sql4) or die(mysqli_error($con));
   //$sql_result5=mysqli_query($con,$sql5) or die(mysqli_error($con));
  // $sql_result6=mysqli_query($con,$sql6) or die(mysqli_error($con));

   
   //$_SESSION['Academic_12']=1;
   //$_SESSION['sub1']=$_POST['Sub1mark'];
   //$_SESSION['sub2']=$_POST['Sub2mark'];
   //$_SESSION['sub3']=$_POST['Sub3mark'];
   ///$_SESSION['language']= $_POST['Languagemark'];
   //$_SESSION['additional']=$_POST['Additionalmark'];       
   echo "<script>alert('you have successfully submitted ')</script>";
   echo "<script>location.href = '../dashboard_graduation.php'</script>";

}
   
   
 
  

  


  
 ?>


