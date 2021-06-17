<?php
require('../include/common.php');

$con= new mysqli("localhost:3308","root","","graduation") or die(mysqli_error($con));
$email=$_SESSION['email'];
$user_check = "SELECT email from academic_marks where email = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 



if( mysqli_num_rows($user_check_query )> 0){
 $_SESSION['Academic_10']=1;
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = '../dashboard_graduation.php'</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous academic performance</title>
    <?php
    
    include('../include/csslinks.php');
    ?>
</head>
<body>
    <?php
     include('../include/header.php');

    
    ?>
       <h1 style="text-align:center;margin-top:50px;">Hii <?php// echo $_SESSION['email'];?> </h1>
       <div class="container" style="">
       
         <div class="panel panel-success col-xs-12" style="margin-bottom:300px; " >
             <div class="panel-heading">
               <h2 style="text-align:center;"> Academic information </h2>
             </div>
             <div class="panel-body">
             <form action="check_graduation_academic.php" method="post">
                 
                 <table class="table table-striped table-bordered-bottom table-hover">
                                     <div class="row">
                                       

                                     </div>
                    

                                      <tr>
                                          <th> College Name:  <input type="text" name="college" class="" style="float:right;" required="true" placeholder=""> </th>
                                      </tr>
                                      <tr> 
                                           <th>course pursuing:  <input type="text" name="course" class=""style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                        <tr> 
                                           <th>Branch:  <input type="text" name="Branch" class=""style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                       <tr>
                                          <th> Current year of studying: 
                                          
                                          <select style="float:right;" name="year">
                                        <option value="">--select--</option>
                                        <option value="1st">first year</option>
                                        <option value="2nd">second year</option>
                                        <option value="3rd">third year</option>
                                        <option value="4th">fourth year</option>
                                         </th>
                                        </tr>
                                        <tr> 
                                           <th>CGPA:  <input type="int" name="percentage" class=""style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                        
                                           
                        
                     </table>
                   
                 
                           

                     <button class="btn btn-success " style="margin-left:500px;" type="submit">submit</button>
            </form>

             </div>
        

         </div>     
      </div>
       
    

  <?php
  
  include('../include/footer.php');
  ?>
</body>
</html>