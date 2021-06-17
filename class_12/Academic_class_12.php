<?php
require('../include/common.php');

$con= new mysqli("localhost:3308","root","","class_12") or die(mysqli_error($con));

$email=$_SESSION['email'];

$user_check = "SELECT email from class_12_academic_mark where email = '$email' "
or die(mysqli_error($con));

$user_check_query = mysqli_query($con,$user_check)
or die(mysqli_error($con)); 

//if(isset($_POST[['submit']]))
//{
  //  $stream=$_POST['stream'];
    //echo "$stream";
    //$s="INSERT INTO  `streams`(email,stream) VALUES($email,$stream)";
    //$s_result=mysqli_query($con,$s);
//}

if( mysqli_num_rows($user_check_query )> 0){
  $_SESSION['Academic_12']=1;
echo "<script>alert('you have already submitted')</script>";
echo "<script>location.href = '../dashboard_class_12.php'</script>";
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
       <h1 style="text-align:center;margin-top:50px;">Hii <?php echo $_SESSION['email'];?> </h1>
       <div class="container-fluid" style="">
       
         <div class="panel panel-primary col-xs-6" style="margin-left:400px; " >
             <div class="panel-heading">
               <h2> Previous Class Marks </h2>
             </div>
             <div class="panel-body">
                          <!-- <form action="" method="post">
                                     <label>Select stream:</label>
                                        
                                        <select name="stream">
                                        <option value="">--Select--</option>
                                        <option value="science">science</option>
                                        <option value="commerce">commerce</option>
                                        <option value="arts">arts</option>
                                        <option value="agriculture">agriculture</option>
                                                                                 
                                        
                                        
                                        </select>
                                        <input type="submit" name="submit" value="submit" >
                                        </form>-->
             <form action="check_academic_class_12.php" method="post">
                 
                 <table class="table table-striped table-bordered-bottom table-hover">
                                     <div class="row">
                                        <h3 style="color:orange;"> Note: Enter the subject name and correspnding marks. <br> Please enter valid marks  </h3>
                                        <label>select stream :</label> 
                                       <!-- <input type="radio" value="science" name="stream"> science

                                        <input type="radio" value="arts" name="stream"> arts
                                        
                                        <input type="radio" value="commerce" name="stream"> commerce
                                      
                                        <input type="radio" name="stream" value="agriculture">agriculture
                                        -->
                                        <select name="stream">
                                        <option value="">--select--</option>
                                        <option value="science">science</option>
                                        <option value="commerce">commerce</option>
                                        <option value="arts">arts</option>
                                        <option value="agriculture">agriculture</option>
                                                                                 
                                        
                                        
                                        </select>
                                       <div class="col-xs-6">
                                         <h2 style="text-align:center; text-decoration:underline;">Subjects</h2>
                                           
                                       </div>
                                       <div class="col-xs-6">
                                       <h2 style="text-align:center;text-decoration:underline;">Marks</h2>
                                       </div>

                                     </div>
                    

                                      <tr>
                                          <th> <input type="text" name="Sub1" class="" style=" border:bottom; float:left;" required="true" placeholder="Maths/Bio/Accounts">  <input type="text" name="Sub1mark" class="" style="float:right;" required="true" placeholder=""> </th>
                                      </tr>
                                       <tr>
                                          <th><input type="text" name="Sub2" class="" style=" border:bottom;float:left;" required="true" placeholder="Physics/Bussiness studies">  <input type="text" name="Sub2mark" class="" style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                        <tr> 
                                           <th><input type="text" name="Sub3" class="" style=" border:bottom;float:left;" required="true" placeholder="Chemistry/Economic">  <input type="text" name="Sub3mark" class=""style="float:right;" required="true" placeholder=""> </th>
                                        </tr>
                                         <tr>
                                           <th><input type="text" name="Language" class="" style=" border:bottom;float:left;" required="true" placeholder="English/Hindi">  <input type="text" name="Languagemark" class="" style="float:right;" required="true" placeholder=""> </th>
                                            </tr>
                                          <tr>
                                             <th><input type="text" name="Additional" class="" style=" border:bottom;float:left;" required="true" placeholder="Additional subjects">  <input type="text" name="Additionalmark" style="float:right;"class="" required="true" placeholder=""></th>
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
  
  include('../include/footer.php');

  
  ?>
</body>
</html>