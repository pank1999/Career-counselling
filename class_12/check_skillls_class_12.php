<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');

}
$connection= new mysqli('localhost:3308','root','','class_12') or die(mysqli_error($connection));

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count=count($_POST['quizcheck']);
      //  echo "out of 10 you have attemted ".$count."questions";
        $result=0;    
        $i=1;
        $select=$_POST['quizcheck'];
        //print_r($select);

        $q="SELECT *FROM skills_class_12";
        $query=mysqli_query($connection,$q)  ;
         while($rows=mysqli_fetch_array($query)){
             //print_r($rows['ans_id']);
             $checked=$rows['ans_id']==$select[$i];
             if($checked){
                 $result++;
             }
             $i++;
         } 
       // echo "your result is: ".$result;
    }
}
$_SESSION['skill_12']=$result;
$name=$_SESSION['email'];
$_SESSION['skills_12']=1;
$final_result="INSERT INTO `result_skills_class _12`(user_name,total_questions,correct_answer) VALUE ('$name','10','$result')";
$query_result_part_2=mysqli_query($connection,$final_result) or die(mysqli_error($connection));




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top:100px;">
<div class="jumbotron" style="background-color:rgb(10, 221, 186);">

 <h1 style="text-align:center;">you have successfully completed your assessment  </h1>
 <h2 style="text-align:center ; text-decoration:underline;">Thanks</h2>

 <a href="http://localhost/phplessons/hackathon-website/dashboard_class_12.php"> <button class="btn  btn-success " style="margin-left:450px;">OK</button>

 
 
<div>
</div>
</body>
</html>
