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

    .button {
  transition-duration: 0.4s;
  width:265px;
  height:50px;
}

.button:hover {
  background-color:skyblue; /* Green */
  color: white;
}
</style>

<body>
<?php

include('include/header.php');


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
                
                    <div class="panel-heading" style="background-color:rgb(138, 138, 141);">
                    
        
                   <h1 style="color: white; ">Dashboard 
                   
                   <span style="color: aliceblue; margin-top: 0; font-size: 30px; float:right; " class="glyphicon glyphicon-user"></span> <h3 style="margin-left:10;"> <?php echo $_SESSION['email'] ?>  </h3>

                    
                    
                   </h1>   
                       
                        
                    </div>
                    <div class="panel-body" style="background-color:rgb(138, 138, 141);">
                                                
                        <div class="container-fluid" >
                            <div class="row">
                                <div class="col-xs-2 column_style sidebar " style="  margin-left: 0px; height: 600px; color:white;">
                                    <table class="table   table-bordered-bottom "  >
                                        
                                        <tr >
                                            <th> <span class="glyphicon glyphicon-link"></span> Dashboard</th>
                                        </tr>
                                        <tr>
                                            <th><a  style="color:white;" href="https://career-counselling.herokuapp.com/profile.php"><span class="glyphicon glyphicon-user"></span> profile</a></th>
                                        </tr>
                                        <tr>
                                            <th>
                                               
                                               <span class="glyphicon glyphicon-book"></span>Assessment
                                        
                                                      
                                                    
                                             </th>
                                        </tr>
                                        <tr>
                                            <th> <span class="glyphicon glyphicon-education"></span> result</th>
                                        </tr>
                                        <tr>
                                            <th> <a href="https://career-counselling.herokuapp.com/index.php"> <span class="glyphicon glyphicon-th"></span> career</a> </th>
                                        </tr>
                                        <tr>
                                            <th> <a href="#"> <span class="glyphicon glyphicon-signal"></span> report </a></th>
                                        </tr>
                            

                                    </table>                                    

                                </div>

                                <div class="col-xs-10" style="border: 1px solid black; height: 800px; background-color:white">
                                     <div >
                                            

                                         
                                        <div class=" " style=" margin-top: 10px; height:100px;" >
                                           <h2 style="text-align: center; color:black;"> Welcome</h2>
                                           <h3 style="text-align: center; color:black; text-decoration:underline;">choose your current status to get start</h3>
                                            
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class=" col-xs-3 " style="margin-left: 50px;" >
                                                   
                                                   
                                                   <div class="thumbnail"> 
                                                     <div >
                                                     <h2 style="text-align:center; color:skyblue; text-decoration:underline blue;">class 8-10 </h2>
                                                     <h3 style="text-align:center;">subject selection</h3>
                                                     <p>Discover your perfect stream, and subject combinations through a comprehensive
                                                      assessment of your strengths and personalised counselling from leading career coaches.</p>
                                                     
                                                     </div>
                                                   </div>
                                                   
                                                   <a href="dashboard.php" style="text-decoration:none;"><button class="btn btn-primary btn-block "  >Start</button></a>


                                                </div>
                                                <div class="col-xs-3" style="margin-left: 50px;">
                                                    
                                                    
                                                <div class="thumbnail" > 
                                                     <div >
                                                     <h2 style="text-align:center; color:skyblue; text-decoration:underline lightgreen;">class 11 & 12 </h2>
                                                     <h3 style="text-align:center; ">course selection</h3>
                                                     <p>Discover your perfect course based on your unique strengths & abilities, and get expert career counselling on your targeted career options to plan your course and college.</p>
                                                     
                                                     </div>
                                                   </div>
                                                   <a href="dashboard_class_12.php" style="text-decoration:none;"><button class="btn btn-success btn-block "  >Start</button></a>

  

                                                </div>
                                                <div class="col-xs-3" style="margin-left: 50px;">
                                                    
                                                <div class="thumbnail"> 
                                                     <div >
                                                     <h2 style="text-align:center; color:skyblue; text-decoration:underline red;">Graduation</h2>
                                                     <h3 style="text-align:center;">career selection</h3>
                                                     <p>Discover your perfect career based on your unique strengths & abilities, and get expert career counselling on your targeted career options to plan your course and college.</p>
                                                     
                                                     </div>
                                                   </div>
                                                   
                                                   <a href="https://career-counselling.herokuapp.com/dashboard_graduation.php" style="text-decoration:none;"><button class="btn btn-danger btn-block "  >Start</button></a>
  
                                                </div>


                                            </div>

                                        </div>
                                        
                                     </div>

                                     <!--image gallary-->
                                     <div class="row" style="margin-top:50px;">
                                           <div class="col-md-3">
                                                <div class="thumbnail">
                                                      <a href="/w3images/lights.jpg">
                                                        <img src="image\interest.jpg" alt="Lights" style=" height:200px;width:100%">
                                                            
                                                         </a>
                                                   </div>
                                             </div>
                                            <div class="col-md-3">
                                                     <div class="thumbnail">
                                                           <a href="/w3images/nature.jpg">
                                                                <img src="image\goals.jpg" alt="Nature" style=" height:200px;width:100%">
                                                               
                                                              </a>
                                                         </div>
                                             </div>
                                             <div class="col-md-3">
                                                      <div class="thumbnail">
                                                            <a href="/w3images/fjords.jpg">
                                                                          <img src="image\Skill-Word.jpg" class="image-responsive" alt="Fjords" style="height:200px; width:100%">
                                                                         
                                                              </a>
                                                         </div>
                                                 </div>


                                                 


                                                 <div class="col-md-3">
                                                      <div class="thumbnail">
                                                            <a href="/w3images/fjords.jpg">
                                                                          <img src="image\strengths-img.jpg" class="image-responsive" alt="Fjords" style="height:200px;width:100%">
                                                                         
                                                              </a>
                                                         </div>
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
<!-- Footer -->
<?php

include('include/footer.php');
?>


</body>
</html>