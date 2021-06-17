<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../include/csslinks.php');?>

</head>
<body>
      <table class="table table-striped table-bordered table-hover">
         <tr>
            <th>S.no</th>
            <th>Subject</th>
            <th>Marks</th>
         </tr>
         <tr>
           <?php 
           
           $connection= new mysqli('localhost:3308','root','','class_12') or die(mysqli_error($connection));
           $email_id=$_SESSION['email'];
           $sql="SELECT * FROM academic_report_class_12 WHERE email='$email_id'";
           $result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
           if(mysqli_num_rows($result)>0){
               $id=1;
               while($row=mysqli_fetch_assoc($result)){
                   echo "<tr><td>".$id."</td><td>".$row['Subject']."</td><td>".$row['Marks']."</td></tr>";
                 $id++;               
                }
               echo "</table>";
           }
           
           ?>
         </tr>
      
      </table>


</body>
</html>