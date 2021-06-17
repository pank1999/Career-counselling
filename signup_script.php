

<?php
    
    $con= new mysqli("localhost:3308","root","","register") or die(mysqli_error($con));
    session_start();
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $class =  mysqli_real_escape_string($con,$_POST['class']);
    $father_name=mysqli_real_escape_string($con,$_POST['father_name']);
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $password = md5($password);
    $phone_number =  mysqli_real_escape_string($con,$_POST['phone_number']);
    $email_id=  mysqli_real_escape_string($con,$_POST['email']);
    $confirom_password=  mysqli_real_escape_string($con,$_POST['confirom_password']);
    
//$regex_email ="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_contact="/^[6789][0-9]{9}$/";

/*if(!preg_match($regex_email,$email_id)){
    
    echo "<script>alert('Please enter a valid email id.')</script>";
    echo"<script>location.href='signup.php'</script>";
}*/
 if(strlen($password)<6){
    echo "<script>alert('Please enter a valid password.')</script>";
    echo"<script>location.href='signup.php'</script>";
}
else if(strlen($phone_number)<10){
    echo "<script>alert('Please enter a valid phone number.')</script>";
    echo"<script>location.href='signup.php'</script>";
}
else if(!preg_match($regex_contact,$phone_number)){
    
     echo "<script>alert('Please enter a valid contact no.')</script>";
     echo"<script>location.href='signup.php'</script>";
}
   else  {    $user_check = "SELECT email_id from user_info where email_id = '$email_id' "
              or die(mysqli_error($con));

              $user_check_query = mysqli_query($con,$user_check)
              or die(mysqli_error($con)); 



           if( mysqli_num_rows($user_check_query )> 0){
            echo "<script>alert('User with this email already exits!')</script>";
            echo "<script>location.href = 'signup.php'</script>";
           }

 
           else{
                 $user_reg ="INSERT INTO user_info(name, class, father_name, phone_number, email_id, password) VALUE('$name','$class','$father_name','$phone_number','$email_id','$password')"
                 or die(mysqli_error($con)) ;

                 $user_sub = mysqli_query($con,$user_reg)
                 or die(mysqli_error($con));



              if($user_sub){
   
                $_SESSION['email'] = $email_id;
                $_SESSION['u_id'] = mysqli_insert_id($con);
                echo "<script>alert('Resgistered successfully ')</script>";
                //echo "<script>location.href = 'product.php'</script>";
                header('location:Dashboard01.php');
                 }
      
               else {
               echo "<script>alert('Not registered successfully !retry')</script>";
               echo "<script>location.href = 'signup.php'</script>";
                }

        }
   }
?>



        