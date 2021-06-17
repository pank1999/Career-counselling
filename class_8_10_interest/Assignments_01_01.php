<?php

session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');

}

$con= new mysqli("localhost:3308","root","","quizassignment1") or die(mysqli_error($con));

$email=$_SESSION['email'];

$user_check = "SELECT user_name from user where user_name = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 



if( mysqli_num_rows($user_check_query )> 0){
    $_SESSION['interest_10']=1;
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = '../dashboard.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments-interest </title>
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .row-style{
            margin-top: 50px;
        }
    </style>
<body>
    <?php
    include('../include/header.php');
    ?>
        <div class="container" style=" margin-top: 50px;">
        <h3> Note:  Attempt all question ,to know more about you</h3> 
        </div>

     <div class="container">
        <h3 style="color:black; margin-left:1000px;">progress bar</h3>              
                   <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width:0%;">
                                               
                        
                        </div>
                    </div>
      </div>              

    <div class="container" style="">
        <div class="row row-style">
            <div class="col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    
                         <h1 style="text-align: center;">Assignments-Interest(part-1)</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning">total <br>question:10</p>
                       <div>
                         
 
 
                        </div>

                        <form action="check.php " method="POST">
                        <?php
                        $connection= new mysqli('localhost:3308','root','','quizAssignment1') or die(mysqli_error($connection));
                         
                        for($i=1;$i<11;$i++){ 
                        $q="SELECT * FROM question where qid=$i";
                        $query=mysqli_query($connection,$q);
                        
                        while($rows=mysqli_fetch_array($query)){
                            ?>
                            <h3> <?php 
                            echo "Q.$i  ";
                            echo $rows['1'] ?></h3>
                            <?php
                        }
                        

                        ?>
                        <?php

                        
                        $q="SELECT * FROM answer where ans_id=$i ";
                        $query=mysqli_query($connection,$q);
                        
                        while($rows=mysqli_fetch_array($query)){
                            ?>

                            <div>
                            
                            <input type="radio" required="true" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['a_id'] ;?>">

                            <?php 
                            
                            echo $rows['1'];
                            ?>
                            
                            </div> 
                        
                        
                         <?php 

                        }
                       }

                        ?>
                        <br><br>
                        <input type="submit" name="submit" value="submit" class="btn btn-success" style="margin-left:500px;">
                        
                        
                    </form>





                       

                    </div>
                    <div class="panel-footer">
                        

                    </div>


                </div>


            </div>

        </div>

    </div>


   <?php
   include('../include/footer.php');
   ?>



</body>
</html>