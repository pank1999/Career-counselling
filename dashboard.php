<?php
session_start();



if(!isset($_SESSION['email'])){
    header('location:login.php');
}
$email=$_SESSION['email'];
$connect=new mysqli('localhost:3308','root','','personality') or die(mysqli_error($connect));
$connect1=new mysqli('localhost:3308','root','','quizassignment1') or die(mysqli_error($connect1));
$connect2=new mysqli('localhost:3308','root','','assignment_2') or die(mysqli_error($connect2));
$connect3=new mysqli('localhost:3308','root','','class_8_10_academic_report') or die(mysqli_error($connect3));
$q="SELECT * FROM `personality_result_class_10` WHERE email='$email'";
$q1="SELECT * FROM `result_interest_class_10` WHERE email='$email'";
$q2="SELECT * FROM `result_skills_class _8_10` WHERE user_name='$email'";
$q3="SELECT * FROM `final_academic_marks` WHERE email='$email'";
$q_result=mysqli_query($connect,$q);
$q1_result=mysqli_query($connect1,$q1);
$q2_result=mysqli_query($connect2,$q2);
$q3_result=mysqli_query($connect3,$q3);
$row=mysqli_num_rows($q_result);
$row1=mysqli_num_rows($q1_result);
$row2=mysqli_num_rows($q2_result);
$row3=mysqli_num_rows($q3_result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    tr{
        height: 50px;
        margin-left:0px;
    }

       .career_hover{
           transition-duration: 1s;
       }    
      .career_hover:hover{
          color: aquamarine;
          
      }    
           
    
    .ass:hover{
        background-color: dimgray;
    }


</style>

<body>
    <?php
    include("include/header.php");
    ?>
   

    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row row-style" >
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <!--panel has some other property
                    1. panel-success
                    2. panel-primary
                    3.panel-warning
                    4. panel-danger
                    5. panel-info-->
                
                    <div class="panel-heading" style="background-color: rgb(138, 138, 141);">
                   <h1 style="color: rgb(255, 255, 255);">Dashboard  class(8-10) <h3><?php echo $_SESSION['email'];?>
        
                   <span style="color: aliceblue;  font-size: 30px; float:right;" class="glyphicon glyphicon-user"></span></h3>
                
                   
                   
                    </h1>    
                       
                        
                    </div>
                    <div class="panel-body" style="  background-color:rgb(138, 138, 141);">
                                                
                        <div class="container-fluid" >
                            <div class="row">
                                <div class="col-xs-2 column_style sidebar " style=" margin-left: 0px; height: 600px; color:rgb(255, 255, 255)">
                                    <table class="table   table-bordered-bottom ">
                                        
                                        <tr >
                                            <th> <span class="glyphicon glyphicon-link"></span> Dashboard</th>
                                        </tr>
                                        <tr>
                                            <th><a href="https://career-counselling.herokuapp.com/profile.php" ><span class="glyphicon glyphicon-user"></span> profile</a></th>
                                        </tr>
                                        <tr>
                                            <th>
                                               
                                                <div class="dropdown show">
                                                
                                                   <a href="#"> <span class="glyphicon glyphicon-book"></span> Assignments </a> 
                                                 
                                                   <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" background-color: rgb(159, 161, 163); color:white;">
                                                      <a class="dropdown-item ass" href="#" style=" height:10px;color: rgb(21, 21, 22);">Assignment-1</a>
                                                      <a class="dropdown-item ass" href="#" style=" height: 10px; color: rgb(15, 15, 15);">Assignment-2</a>
                                                      <a class="dropdown-item ass" href="#" style=" height: 10px; color: rgb(20, 20, 20);">Assignment-3</a>
                                                    </div>
                                                    -->
                                                  </div>
                                                
                                            </th>
                                        </tr>
                                        <tr>
                                        <?php 
                                          
                                          
                                          
                                          
                                          if($row > 0)
                                          {
                                             if($row1>0)
                                             {
                                                 if($row2>0)
                                                 {
                                                     if($row3>0)
                                                     {
                                                        ?>
                                                        <th> <a href="https://career-counselling.herokuapp.com/Graduation/graduation_report.php"> <span class="glyphicon glyphicon-signal"></span> report</a> </th>              
                                                         <?php 
                                                    }
                                                    else{
                                                        ?>
                                                        <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> report</a></th>              
                                                         <?php
                                                      }
                                                 }
                                                 else{
                                                    ?>
                                                    <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> report</a></th>              
                                                     <?php
                                                  }
                                             }
                                             else{
                                                ?>
                                                <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> report</a></th>              
                                                 <?php
                                              }
                                             
                                          }
                                        
                                          else{
                                            ?>
                                            <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> report</a></th>              
                                             <?php
                                          }

                                          
                                          
                                          ?>
                                        </tr>
                                        <tr>
                                            <th> <a href="https://career-counselling.herokuapp.com/index.php"> <span class="glyphicon glyphicon-th"></span> career </a></th>
                                        </tr>
                                        <tr>
                                        <?php 
                                          
                                          
                                          
                                          
                                          if($row > 0)
                                          {
                                             if($row1>0)
                                             {
                                                 if($row2>0)
                                                 {
                                                     if($row3>0)
                                                     {
                                                        ?>
                                                        <th> <a href="https://career-counselling.herokuapp.com/report_class_10.php"> <span class="glyphicon glyphicon-signal"></span> result</a> </th>              
                                                         <?php 
                                                    }
                                                    else{
                                                        ?>
                                                        <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> result</a></th>              
                                                         <?php
                                                      }
                                                 }
                                                 else{
                                                    ?>
                                                    <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> result</a></th>              
                                                     <?php
                                                  }
                                             }
                                             else{
                                                ?>
                                                <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> result</a></th>              
                                                 <?php
                                              }
                                             
                                          }
                                          else{
                                            ?>
                                            <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> result</a></th>              
                                             <?php
                                          }

                                          
                                          
                                          ?>
                                        </tr>
                            

                                    </table>                                    

                                </div>

                                <div class="col-xs-10" style="border: 1px solid rgb(19, 92, 151); height: 1200px; background-color:white">
                                     <div >
                                       
                                       
                                        <div class="container">
                                           <!-- <div class="row">
                                                <div class=" col-sm-3" style="">
                                                    
                                                    <a class="thumbnail">  <img src="http://localhost/phplessons/hackathon-website/image/backgroundpdf.jpg" alt=""></a>
                                                    
                                                </div>
                                                <h3 style="margin-left:100px;"> these assignments will help us to find best career option for </h3>

                                            </div>
                                            -->
                                         
                                        <div class="jumbotron " style="background-color:rgb(10, 221, 186); margin-top: 10px;width:1000px; height:130px;" >
                                           <h2 style="text-align:center;">Assignments</h2>
                                            
                                        </div>
                                        

                                        <div class="container">
                                            <div class="row">
                                                

                                            <div class=" col-xs-4" style="margin-left: 100px;" >
                                                   <h2 style="margin-left:100px; text-decoration:underline;">Personality</h2>
                                                   <div class="thumbnail">
                                                      <img src="https://career-counselling.herokuapp.com/image/assingnment-image.jpg" alt="responsive image">
                                                   </div>
                                                   
                                                   <?php 

                                                
                                                   $r=0;
                                                  if($row > 0){ $r++;?>

                                                     <a href="https://career-counselling.herokuapp.com/personality/Personality_part_1.php"> <button class="btn btn-primary  btn-block " disabled >Already Submitted</button></a>
                                                   <?php }   
                                                   
                                                   else{ ?>
                                                    <a href="http://localhost/phplessons/hackathon-website/personality/Personality_part_1.php"> <button class="btn btn-primary  btn-block " >Start</button></a>
                                                  <?php }
                                                   
                                                   ?>


                                                </div>



                                                <div class=" col-xs-4 " style="margin-left: 50px;" >
                                                   <h2 style="margin-left:120px; text-decoration:underline;">Interest</h2>
                                                   <div class="thumbnail">
                                                      <img src="https://career-counselling.herokuapp.com/image/assingnment-image.jpg" alt="responsive image">
                                                   </div>
                                                   <?php 

                                                    
                                                 if($row1 > 0){ $r++; ?>

                                                    <a href="https://career-counselling.herokuapp.com/class_8_10_interest/Assignments_01_01.php"> <button class="btn btn-primary  btn-block " disabled >Already submitted</button></a>
                                                       <?php }   

                                                       else{ ?>
                                                     <a href="https://career-counselling.herokuapp.com/class_8_10_interest/Assignments_01_01.php"> <button class="btn btn-primary  btn-block " >Start</button></a>
                                                         <?php }

                                                       ?>


                                                </div>
                                                <div class="col-xs-4" style="margin-left: 100px;">
                                                    <h2 style="margin-left:50px; text-decoration:underline;">Skills & strength</h2>
                                                    <div class="thumbnail" >
                                                        <img src="https://career-counselling.herokuapp.com/image/assingnment-image.jpg" alt="responsive image">
                                                     </div>
                                                     <?php 

                                                      if($row2 > 0){ $r++;
                                                          
                                                          ?>

                                                         <a href="https://career-counselling.herokuapp.com/class_8_10_skills_strength.php"> <button class="btn btn-primary  btn-block " disabled >Already submitted</button></a>
                                                          <?php }   

                                                            else{ ?>
                                                          <a href="https://career-counselling.herokuapp.com/class_8_10_skills_strength.php"> <button class="btn btn-primary  btn-block " >Start</button></a>
                                                          <?php }

                                                          ?>

  

                                                </div>
                                                <div class="col-xs-4" style="margin-left: 50px;">
                                                    <h2 style="text-decoration:underline;">Academic  performance</h2>
                                                    <div class="thumbnail">
                                                        <img src="https://career-counselling.herokuapp.com/image/assingnment-image.jpg " alt="responsive image">
                                                     </div>
                                                     <?php 

                                                   

                                                     if($row3 > 0){  $r++;?>

                                                     <a href="https://career-counselling.herokuapp.com/Academic.php"> <button class="btn btn-primary  btn-block " disabled >Already submitted</button></a>
                                                   <?php }   
                                                   
                                                   else{ ?>
                                                    <a href="https://career-counselling.herokuapp.com/Academic.php"> <button class="btn btn-primary  btn-block " >Start</button></a>
                                                  <?php }
                                                   
                                                   ?>
  
                                                </div>


                                            </div>

                                        </div>
                                         <div class="container" style="margin-top:100px;">
                                            <h2 style="margin-left:350px; text-decoration:underline rgb(57, 184, 162);">check your result here  </h2>
                                          
                                          <?php 
                                          
                                          
                                          if($r==4){?>
                                           <a href="https://career-counselling.herokuapp.com/report_class_10.php"> <button class="btn btn-primary "  style="margin-left:450px;" >Result</button> </a>
                                          <?php } else{?>
                                            <a href="https://career-counselling.herokuapp.com/report_class_10.php"> <button class="btn btn-primary " disabled style="margin-left:450px;" >Attempt first</button> </a>
                                          <?php } ?>
                                         </div>       


                                        
                                     </div>

                                     

                                </div>



                            </div>

                        </div>
                     
                    </div>
                    <div class="panel-footer" style="background-color:rgb(138, 138, 141);">
                       
                    </div>


                </div>

            </div>

        </div>
        
    </div>
    <?php
     include('include/footer.php');
   
   ?>



</body>
</html>
