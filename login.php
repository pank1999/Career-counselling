

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    include('include/header.php');
    ?>

    <div class="container" style="margin-left: 400px; margin-top: 100px;">
        <div class="row row-style">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    
                         <h1>Login</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning">Login to make career</p>
                       <form action="login_submit.php"  method="POST">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$">
                                 
                           </div>
                           <div class="form-group" >
                               <input type="text" name="password" class="form-control" placeholder="Password" required="true0" pattern="{6,}">
                               
                           </div>
                           <button class="btn btn-primary" type="submit">Login</button>
                       </form>

                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account ? <a href="http://localhost/phplessons/hackathon-website/signup.php">Register</a></p>

                    </div>


                </div>


            </div>

        </div>

    </div>


    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" style="margin-top:300px;">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>



</body>
</html>