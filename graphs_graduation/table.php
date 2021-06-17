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
           <?php 
           
           $connection= new mysqli('localhost:3308','root','','graduation') or die(mysqli_error($connection));
           $email_id=$_SESSION['email'];
           $sql="SELECT * FROM `academic_marks` WHERE email='$email_id'";
           $result=mysqli_query($connection,$sql) or die(mysqli_error($connection));
           if(mysqli_num_rows($result)>0){
               //$id=1;
               $row=mysqli_fetch_array($result);
                 //  echo "<tr><td>".$id."</td><td>".$row['']."</td><td>".$row['Marks']."</td></tr>";
                 //$id++;               
                //}
               ?> <th>college name: <h4 style="float:right;"> <?php echo $row['college_name'];?></h4> </th> <?php
                 

               
           }
           
           ?>
         </tr>
      
          <tr>
           <th> course : <h4 style="float:right;"> <?php echo $row['course']; ?></h4></th>
          </tr>
          <tr>
           <th> Branch : <h4 style="float:right;"> <?php echo $row['Branch']; ?></h4></th>
          </tr>

          <tr>
            <th>year :  <h4 style="float:right;"> <?php echo $row['year'];?></h4></th>
          </tr>
          <tr>
            <th> CGPA:  <h4 style="float:right;"> <?php echo $row['percentage']; ?></h4> </th>
          </tr>
      </table>


</body>
</html>