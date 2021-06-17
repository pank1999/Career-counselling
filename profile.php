<?php

require('include/common.php');
$connect=new mysqli("localhost:3308","root","","register") or die(mysqli_error($connect));
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
//$id=$_SESSION['id'];
$email=$_SESSION['email'];
$name="SELECT * FROM user_info where email_id='$email'";
$name_result=mysqli_query($connect,$name) or die(mysqli_error($connect));
$row=mysqli_fetch_array($name_result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>


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
    include('include/header.php');
    
    ?>

             <!-- panel start-->  
            <div class="container col-xs-6" style="margin-top:100px; margin-left:400px;">  
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>User Profile Info </h1>

                    </div>
                     <div class="panel-body">

                      <div class="container" style="">
                         <div class="row">
                
                              <div class="col-sm-6 column-style ">

                                <table class="table table-striped table-bordered-bottom table-hover">
                                      <tr>
                                          <th>Name:   <p style="float:right; color:green;"> <?php echo $row['name']; ?> </p></th>
                                      </tr>
                                       <tr>
                                          <th>Class:  <p style="float:right;color:green;"> <?php echo $row['class']; ?></p></th>
                                        </tr>
                                        <tr> 
                                           <th>Father's name:  <p style="float:right;color:green;"> <?php echo $row['father_name'] ;?></p></th>
                                        </tr>
                                         <tr>
                                           <th>Phone number: <p style="float:right;color:green;"> <?php echo $row['phone_number']; ?></p></th>
                                            </tr>
                                          <tr>
                                         <th>Email id:  <p style="float:right;color:green;"> <?php echo $row['email_id'] ;?></p></th>
                                          </tr>
                                          
                        
                                 </table>
                   
                              </div>
              
                           </div>
                        </div>
                    </div>
                    <div class="panel-footer">

                    </div>
               
             </div>  

             </div>
             
             <?php
             
             ?>
              
            
</body>
</html>