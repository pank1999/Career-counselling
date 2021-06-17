<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
       include('../include/header.php');
    ?>
       <div class="container " style="margin-top:50px;">
          
           <div class="jumbotron" style="background-color:rgb(20, 202, 148);">

              <h1 style="text-align:center;"> Detailed Report</h1>   
            
           </div>
         <h2  style="text-decoration:underline rgb(20, 202, 148);">1. Personality</h2> 
         <div class="row ">
             
              <div class="col-xs-5">
                 After analysing your responses we have evaluated your personality type which are shown below.
                <br>

                  <li>Set A:{ extrovert,debator,social}</li> <br>
                  <li>Set B:{logical,architect,introvert}</li>  <br>
                  <li>Set C:{commander,leadership,executive,consul}</li> <br>
                  <li>Set D:{adventurous,explores,entertainer}</li>              
              
              </div>
               <div class="col-xs-3">
                 <?php include('../graphs_graduation/chart.php');?>


               </div>
             </div>
           <hr>

         <h2 style="text-decoration:underline rgb(20, 202, 148);" >2.Interest</h2>   
         <div class="row ">
             
              <div class="col-xs-5"style="margin-top:50px;">
                 After analysing your responses we have evaluated your Interest area by taking various assessments  which are shown below.
                 <br> <ul>
                      <li>Jobs</li> <br>
                       <li>Master's</li> <br>
                       <li>Bussiness</li> 
                       
                  </ul>
            
              </div>
              <div class="col-xs-3">
               <?php include('../graphs_graduation/bar_graph.php'); ?>
              </div>
         
         
        </div>  
  <hr>
        <div class="row " style="margin-top:100px;">
             <h2 style="text-decoration:underline rgb(20, 202, 148);">3.Skills & strength</h2>
              <div class="col-xs-5">
                 After analysing your responses we have evaluated your skills & strength assessments ,in which we find your reasoning and logical abilities and the result are shown below.
              </div>
         </div>      
         <div class="row">
          <h3 style="color:black; margin-left:1000px;"></h3>              
                   <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width:<?php $connection= new mysqli('localhost:3308','root','','graduation') or die(mysqli_error($connection));
                              $email_id=$_SESSION['email'];

                             $sql="SELECT * FROM `result_skills_graduation` WHERE user_name='$email_id'";
                              $sql_result=mysqli_query($connection,$sql) or die(mysqli_error($connection)) ;
                                 $row=mysqli_fetch_array($sql_result);
                                $result=$row['correct_answer'];
                                  echo $result*10; ?>%;">
                                    
                        
                        </div>
                    </div>
         </div>       <hr>
         <div class="row">
                 
             <h3 style="text-decoration:underline rgb(20, 202, 148);">4.Academic marks</h3>
                 
                 <div class="col-xs-8" style="margin-left:400px;">
                    <?php include('../graphs_graduation/table.php'); ?>
                 </div>
              
              </div>
                  <hr>
              <div class="container">
                   <div class="row " style="">
                      <h1 style="margin-left:120px; text-decoration:underline; text-align:center;">Your best top streams matches are shown below:</h1>
                    </div>
                     <div class="thumbnail" style=" background-color:rgb(221, 230, 224); margin-top:50px;">
                        <h3 style="text-align:center;">After analysing and calulating the responses of various assessments.we have finded your <br> best stream matches which are shown below, I hope that this career counselling would <br> help   you for chooseing  your stream.  </h3> 
                    </div>
                                            <div class="row " style="margin-top:50px; margin-left:300px;">
                                                <div class="col-xs-2" style="margin-left: 150px;">
                                                    
                                                    
                                                    <div class="thumbnail"style=" background-color:rgb(20, 202, 148); width:300px;"> 
                                                         
                                                         <h3 style="text-align:center; color:black; "><?php include('../graphs_graduation/final_result_graduation.php'); ?></h3>
                                                       </div>
                                                       
    
      
    
                                                </div>

                                            </div>
                                            <div class="thumbnail" style=" margin-top:50px;">
                                            <h3 style="text-align:center;"> you can also asks to the experts for any query <button class="btn btn-success " style="margin-left:100px;">  <a href="http://localhost/phplessons/hackathon-website/expert.php"style="text-decoration:none; font-size:20px;">expert advice</a></button></h3>
                                                     <h3>Note: you can also evaluate your second and third best option from the above given report</h3>
                                             </div>


      </div>                                       

       
       </div>

</body>
</html>