

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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
        body{
            background-image:url('signup-Wallpaper-4.jpg');
        }
    </style>
<body>
    
    <!--navbar-->

    <div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/phplessons/hackathon-website/design1.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="http://localhost/phplessons/hackathon-website/startbootstrap-modern-business-gh-pages/index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Career</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Streams</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Advice</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Select <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">class 8-10</a>
      <a href="#" class="w3-bar-item w3-button">class 11 & 12</a>
      <a href="#" class="w3-bar-item w3-button">Graduation</a>
    </div>
  </div>
  <a href="http://localhost/phplessons/hackathon-website/signup.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="signup"><span class="glyphicon glyphicon-user"></span>signup</a>
  <a href="http://localhost/phplessons/hackathon-website/login.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="login"><span class="glyphicon glyphicon-log-in"></span>login</a>
 </div>

 <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="http://localhost/phplessons/hackathon-website/startbootstrap-modern-business-gh-pages/index.php" class="w3-bar-item w3-button">Career</a>
    <a href="#work" class="w3-bar-item w3-button">Streams</a>
    <a href="#pricing" class="w3-bar-item w3-button">Advice</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">About us</a>
  </div>
</div>

    <div class="container" style="margin-left: 400px;">
        <div class="row row-style">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading" >
                    
                         <h1>Register</h1>   

                    </div>

                    <div class="panel-body">

                       <p class="text-warning">Login to make a perfect career</p>
                       <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="true" placeholder="name">

                           </div>
                           <div class="form-group" >
                               <input type="text" name="class" class="form-control " required="true" placeholder="class between(8-12) "  >

                           </div>
                           <div class="form-group" >
                               <input type="text" name="father_name" class="form-control" required="true" placeholder="father's name">

                           </div>
                           <div class="form-group" >
                               <input type="text" name="phone_number" class="form-control"required="true" placeholder="phone number"  pattern=".{10,}" >

                           </div>
                           <div class="form-group" >
                               <input type="text"  name="email" class="form-control" required="true"  placeholder="email id" >

                           </div>

                           <div class="form-group" >
                               <input type="password"  name="password" class="form-control" required="true" placeholder="password" pattern=".{6,}">

                           </div>
                           <div class="form-group" >
                               <input type="password" name="confirom_password" class="form-control" required="true" pattern=".{6,}"  placeholder="confirom password">

                           </div>

                           <button class="btn btn-primary" type="submit">Register</button>
                       </form>

                    </div>
                    <div class="panel-footer">
                        <p>already  have an account ? <a href="login.php">login</a></p>

                    </div>


                </div>


            </div>

        </div>

    </div>

    <?php
    include('include/footer.php');
    ?>





</body>
</html>