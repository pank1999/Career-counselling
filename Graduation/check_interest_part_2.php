<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');

}
$connection= new mysqli('localhost:3308','root','','graduation') or die(mysqli_error($connection));

if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){
        $count=count($_POST['quizcheck']);
        //echo "out of 10 you have attemted ".$count."questions";
        $result=0;    
        $i=1;
        $select=$_POST['quizcheck'];
        //print_r($select);

        $q="SELECT *FROM question_interest_part_2";
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
$_SESSION['I_2_g']=$result;
$name=$_SESSION['email'];

$final_result="INSERT INTO result_interest_part_2(user_name,total_questions,correct_answer) VALUE ('$name','10','$result')";
$query_result_part_2=mysqli_query($connection,$final_result) or die(mysqli_error($connection));
$assess_part2_result="INSERT INTO result_interest_class_g(email,Assessment,marks) VALUE ('$name','Masters','$result')";
$assess_result=mysqli_query($connection,$assess_part2_result)  or die(mysqli_error($connection));





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

 <h1 style="text-align:center;">you have successfully completed your assessment part 2 </h1>
 <h2 style="text-align:center ; text-decoration:underline;">click below to start your next assessment</h2>

 <a href="http://localhost/phplessons/hackathon-website/Graduation/interest_part_3.php"> <button class="btn  btn-success " style="margin-left:500px; font-size:20px;">start</button>

 
 
<div>
</div>
</body>
</html>
