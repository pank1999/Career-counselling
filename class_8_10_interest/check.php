<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');

}
$connection= new mysqli('localhost:3308','root','','quizAssignment1') or die(mysqli_error($connection));

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count=count($_POST['quizcheck']);

       // echo "out of 10 you have attemted ".$count."questions";
        $result=0;    
        $i=1;
        $select=$_POST['quizcheck'];
        //print_r($select);

        $q="SELECT *FROM question";
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

$_SESSION['class_10_interest_01_result']=$result;
$name=$_SESSION['email'];
$id=mysqli_insert_id($connection);
$_SESSION['I_1_10']=$result;

$final_result="INSERT INTO user(user_name,total_question,ans_correct) VALUE ('$name','10','$result')";
$query_result=mysqli_query($connection,$final_result)  or die(mysqli_error($connection));
$assess_part1_result="INSERT INTO result_interest_class_10(email,Assessment,marks) VALUE ('$name','science','$result')";
$assess_result=mysqli_query($connection,$assess_part1_result)  or die(mysqli_error($connection));



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
<div class="jumbotron" style="background-color:skyblue;">

 <h1 style="text-align:center;">you have successfully completed your assessment part 1 </h1>
 <h2 style="text-align:center;">click below to start your next assessment</h2>

 <a href="http://localhost/phplessons/hackathon-website/class_8_10_interest/Assignments_01_02.php"> <button class="btn btn-success  " style="margin-left:500px;font-size:20px; width:100px;">start</button></a>

 
 
<div>
</div>
</body>
</html>
