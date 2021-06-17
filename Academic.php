<?php
require('include/common.php');

$con= new mysqli("localhost:3308","root","","class_8_10_academic_report") or die(mysqli_error($con));

$email=$_SESSION['email'];

$user_check = "SELECT email from academic_marks where email = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 



if( mysqli_num_rows($user_check_query )> 0){
  $_SESSION['Academic_10']=1;
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = 'dashboard.php'</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous academic performance</title>
    <?php
    
    include('include/csslinks.php');
    ?>
</head>
<body>
    <?php
     include('include/header.php');

    
    ?>
       <h1 style="text-align:center;margin-top:50px;">Hii <?php echo $_SESSION['email'];?> </h1>
       <div class="container-fluid" style="">
       
         <div class="panel panel-primary col-xs-6" style="margin-left:400px; " >
             <div class="panel-heading">
               <h2> Previous Class Marks </h2>
             </div>
             <div class="panel-body">
             <form action="check_class_8_10_academic.php" method="post">
                 
                 <table class="table table-striped table-bordered-bottom table-hover">
                                     <div class="row">
                                       <div class="col-xs-6">
                                         <h2 style="text-align:center; text-decoration:underline;">Subjects</h2>
                                           
                                       </div>
                                       <div class="col-xs-6">
                                       <h2 style="text-align:center;text-decoration:underline;">Marks</h2>
                                       </div>

                                     </div>
                    

                                      <tr>
                                          <th> Maths:  <input type="text" name="Maths" class="" style="float:right;" required="true" placeholder=""> </th>
                                      </tr>
                                       <tr>
                                          <th>Science:  <input type="text" name="Science" class="" style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                        <tr> 
                                           <th>English:  <input type="text" name="English" class=""style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                         <tr>
                                           <th>Hindi:  <input type="text" name="Hindi" class="" style="float:right;" required="true" placeholder=""> </th>
                                            </tr>
                                          <tr>
                                             <th>Social science:  <input type="text" name="Social_science" style="float:right;"class="" required="true" placeholder=""></th>
                                          </tr>
                                          <tr>
                                          
                                            <th>Computer: <input type="text" name="Computer"style="float:right;" class="" required="true" placeholder=""> </th>
                                          </tr>
                        
                     </table>
                   
                 
                           

                     <button class="btn btn-primary " style="margin-left:250px;" type="submit">submit</button>
            </form>

             </div>
             <div class="panel-footer">
             </div>

         </div>     
      </div>
       
    

  <?php
  
  include('include/footer.php');
  ?>
</body>
</html>