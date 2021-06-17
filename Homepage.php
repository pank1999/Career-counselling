<?php
include('modal.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>career counselling</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php
include('include/csslinks.php');
?>
<style>
   .inner{
     overflow: hidden;
     margin-bottom:30px;
   }
   .inner img{
     transition:all 1.5s ease;

   }
   .inner:hover{
     transform:scale(1.05);
   }
</style>

</head>

<body>

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2 ;background-color:rgb(74, 206, 230);" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button" style=" background-color:#fff; ">Career</a>
  <a href="#" class="w3-bar-item w3-button">Stream</a>
  <a href="#" class="w3-bar-item w3-button">Advice</a>
  <a href="#" class="w3-bar-item w3-button">Contact</a>
  <a href="#" class="w3-bar-item w3-button">About us</a>
</nav>

<!-- navbar-->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="http://localhost/phplessons/hackathon-website/Homepage.php" style="text-decoration:none;" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="http://localhost/phplessons/hackathon-website/index.php" style="text-decoration:none;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Career</a>
  <a href="http://localhost/phplessons/hackathon-website/expert.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="text-decoration:none;">Advice</a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white" style="text-decoration:none;">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Select <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="http://localhost/phplessons/hackathon-website/Dashboard01.php" class="w3-bar-item w3-button w3-hover-teal" style="text-decoration:none;">class 8-10</a>
      <a href="http://localhost/phplessons/hackathon-website/Dashboard01.php" class="w3-bar-item w3-button w3-hover-teal"style="text-decoration:none;">class 11 & 12</a>
      <a href="http://localhost/phplessons/hackathon-website/Dashboard01.php" class="w3-bar-item w3-button w3-hover-teal"style="text-decoration:none;">Graduation</a>
    </div>
  </div>

  <?php
   
   if(!isset($_SESSION['email'])){
   ?>
      <a href="http://localhost/phpmyadmin/" style="text-decoration:none;" target="blank" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Admin"><span class="glyphicon glyphicon-user"></span>Admin</a>
    <a href="http://localhost/phplessons/hackathon-website/signup.php" style="text-decoration:none;"class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-white" title="signup"><span class="glyphicon glyphicon-user"></span>signup</a>
    <a href="#" data-toggle="modal" data-target="#loginmodal" class="w3-bar-item w3-button w3-hide-small  w3-hover-white" style="text-decoration:none;margin-left:600px;"title="login"><span class="glyphicon glyphicon-log-in"></span>login</a>
   <?php } ?>
    <?php 

      if(isset($_SESSION['email'])){ ?>
        <a href="http://localhost/phplessons/hackathon-website/logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="logout"><span class="glyphicon glyphicon-log-out"></span>logout</a>
      <?php } ?>
 </div>
<!-- Navbar on small screens -->
 <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="http://localhost/phplessons/hackathon-website/index.php" class="w3-bar-item w3-button">Career</a>
    <a href="#work" class="w3-bar-item w3-button">Streams</a>
    <a href="#pricing" class="w3-bar-item w3-button">Advice</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">About us</a>
  </div>
</div>


  <header style="margin-top:0px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" > 
        
        
          <img src="http://localhost/phplessons/hackathon-website/image/career-slide-5" alt="responsive" class="img img-responsive" style="width:100%; height:100%;">
          
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color:white; margin-top:50px;"></h2>
            <p></p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" >
        <img src="http://localhost/phplessons/hackathon-website/image/careers_slide-4.jpg" alt="responsive" class="img img-responsive" style="width:100%;height:100%;">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" >

        <img src="http://localhost/phplessons/hackathon-website/image/Career-slide-3" alt="responsive" class="img img-responsive" style="width:100%;height:100%;">
          <div class="carousel-caption d-none d-md-block">
            <h3></h3>
            <p></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <style>
  </style>
  <?php 
      if(isset($_SESSION['email'])){   
        ?> 
    <button class="button " style="margin-left:600px ; margin-top:20px;
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    
    color: #fff;
    background-color: rgb(74, 206, 230);
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px rgb(94, 93, 91); ">
     
     <a href="http://localhost/phplessons/hackathon-website/Dashboard01.php"  style="text-decoration:none;">Get Started</a>
     </button>
      <?php } 
      else{ ?>
        <button class="button " style="margin-left:600px ; margin-top:20px;
    padding: 15px 25px;
    font-size: 24px;
    text-align: center;
    cursor: pointer;
    
    color: #fff;
    background-color: rgb(74, 206, 230);
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px rgb(94, 93, 91); ">
     
     <a href="#" data-toggle="modal" data-target="#loginmodal" style="text-decoration:none;">Get Started</a>
     </button>
     <?php }
     ?>      

    


  <!-- Pricing Row -->
  <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2 style="font-size:50px; text-decoration:underline;">How we help you </h2>
    <p style="font-size:30px;text-decoration:underline;">Choose a class to get start your counselling.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">class 8-10</p>
        </li>
        <li class="w3-padding-16">finding interest and goals </li>
        <li class="w3-padding-16">Evaluating skills and strength</li>
        <li class="w3-padding-16">pervious academic performance</li>
        <li class="w3-padding-16"> avalibility of scope </li>
        
          
        </li>
        <li class="w3-theme-l5 w3-padding-24">
        
        <?php if((isset($_SESSION['email']))){?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/Dashboard01.php" style="text-decoration:none;">Start</a></button>
        <?php } else{?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/login.php" style="text-decoration:none;">Start</a></button>
        <?php }?> 

        
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">class 11-12</p>
        </li>
        <li class="w3-padding-16">finding interest and goals</li>
        <li class="w3-padding-16">Evaluating skills and strength</li>
        <li class="w3-padding-16">pervious academic performance</li>
        <li class="w3-padding-16">career recomendation</li>
       
        </li>
        <li class="w3-theme-l5 w3-padding-24">
        <?php if((isset($_SESSION['email']))){?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/Dashboard01.php" style="text-decoration:none;">Start</a></button>
        <?php } else{?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/login.php" style="text-decoration:none;">Start</a></button>
        <?php }?> 
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Graduation</p>
        </li>
        <li class="w3-padding-16">finding interest and goals</li>
        <li class="w3-padding-16">Evaluating skills and strength</li>
        <li class="w3-padding-16">Job recomendation</li>
        <li class="w3-padding-16">steps for success</li>
        
        <li class="w3-theme-l5 w3-padding-24">
        <?php if((isset($_SESSION['email']))){?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/Dashboard01.php" style="text-decoration:none;">Start</a></button>
        <?php } else{?>
          <button   class="w3-button w3-teal w3-padding-large"> <i class=""></i> <a  href="http://localhost/phplessons/hackathon-website/login.php" style="text-decoration:none;">Start</a></button>
        <?php }?> 
        </li>
      </ul>
    </div>
</div>


              
    <!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2 style="font-size:50px;">Our Report</h2>
<p>our report contails all importance aspects such as statistics,pictorial represtation,results and suggetions .</p>



</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="http://localhost/phplessons/hackathon-website/image/slide1.jpg" alt="Snow" style="width:100% ;height:230px;">
  <div style="margin-top:10px; background-color:black;"> </div> 
 
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="http://localhost/phplessons/hackathon-website/image/slide2.png" alt="Lights" style="width:100% ;height:230px;">
 
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="http://localhost/phplessons/hackathon-website/image/slide3.png" alt="Mountains" style="width:100% ;height:230px;">
  
  </div>
</div>



</div>
                                        

                                         
                                        

                                        

                                        




  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4" style="text-align:center; text-decoration:underline;">Find your best career option here! </h1>

    <!-- Marketing Icons Section 
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100" >
        
          <h4 class="card-header" style="background-color:black; color:white;">Class 8-10</h4>
          <div class="card-body">
          <p>Discover your perfect stream, and subject combinations through a comprehensive
            assessment of your strengths and personalised counselling from leading career coaches.
            </p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">start</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"style="background-color:black;color:white;">Class 11-12</h4>
          <div class="card-body">
          Discover your perfect course based on your unique strengths & abilities, and get expert career counselling on your targeted career options to plan your course and college.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">start</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"style="background-color:black;color:white;">Graduation</h4>
          <div class="card-body">
          <p>Discover your perfect career based on your unique strengths & abilities, and get expert career counselling on your targeted career options to plan your course and college.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">start</a>
          </div>
        </div>
      </div>
    </div>

-->
    <!-- /.row -->

    
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2 style="text-decoration:underline;">Career counselling</h2>
        <p>steps for good career:</p>
        <ul>
          <li>
            <strong>Career assessments</strong>
          </li>
          <li>personality</li>
          <li>Interest</li>
          <li>Skills and strength</li>
          <li>Academic performance</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6  inner">
        <img class="img-fluid rounded" src="http://localhost/phplessons/hackathon-website/image/backgroundpdf.jpg">
      </div>
    </div>
    <!-- /.row -->

   

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <?php if(!isset($_SESSION['email'])){ ?>
        
          <a class="btn btn-lg btn-success btn-block" href="http://localhost/phplessons/hackathon-website/signup.php">Get started</a>
      
        <?php } else{ ?>
          <a class="btn btn-lg btn-success btn-block" href="http://localhost/phplessons/hackathon-website/Dashboard01.php">Get started</a>
        <?php } ?>
    
      
      
      </div>
    </div>

  </div>
  <!-- /.container -->


  <!-- Team Container 
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - our office rats:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="C:\Users\pankaj\web development\image\pankajimg.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Pankaj  kumar pandey</h3>
  <p>Web Designer</p>
</div>

<div class="w3-quarter">
  <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Chitransh khare</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="C:\Users\pankaj\Documents\shiva.jpeg" alt="Boss" style="width:45% ;height:130px; border-radius:50px;" class="w3-circle w3-hover-opacity">
  <h3>Shiva Agrawal</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="C:\Users\pankaj\Documents\srajan.jpg" alt="Boss" style="width:45% ;heigth:130px;" class="w3-circle w3-hover-opacity">
  <h3>Srajan Nigam</h3>
  <p>Fixer</p>
</div>

<div class="w3-quarter">
  <img src="C:\Users\pankaj\Documents\ankita.jpeg" alt="Boss" style="width:45% ;margin-top:50px;" class="w3-circle w3-hover-opacity">
  <h3>Ankita Singh</h3>
  <p>Web Designer</p>
</div> 



<div class="w3-quarter">
  <img src="C:\Users\pankaj\Document\pushpendra.JPEGs" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Pushpendra Tiwari</h3>
  <p>Web Designer</p>
</div>

</div>
</div>
-->
<!-- Contact Container -->

<div class="container">
     <h1 style="text-align:center;text-decoration:underline;">Assessments</h1>
    <div class="row">
       <div class="col-xs-3  shadow inner">
          <div cl="thumbnail  ">
          <img class="img-fluid rounded" style="height:200px;" src="http://localhost/phplessons/hackathon-website/image/interest.jpg">
          </div>
       </div>

       <div class="col-xs-3 shadow inner">
          <div cl="thumbnail ">
          <img class="img-fluid rounded" style="height:200px;width:300px;" src="http://localhost/phplessons/hackathon-website/image/skills.jpg">
          </div>
       </div>

       <div class="col-xs-3  shadow inner">
          <div cl="thumbnail ">
           <img class="img-fluid rounded" style="height:200px;" src="http://localhost/phplessons/hackathon-website/image/strengths-img.jpg">
          </div>
       </div>

       <div class="col-xs-3  shadow inner">
          <div cl="thumbnail ">
          <img class="img-fluid rounded" style="height:200px;" src="http://localhost/phplessons/hackathon-website/image/goals.jpg">
          </div>
       </div>
    </div>
</div>





<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
<p style="margin-left:750px; font-size:50px;">Feedback / Query</p>
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="../feedback_action_page.php"  method="POST">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <?php 
      if(!isset($_SESSION['email'])){?>
        
        <button type="submit" name="submit" class="w3-button w3-right w3-theme" disabled > first Login</button>
          <?php
        }
        else{ ?>
         <button type="submit" name="submit" class="w3-button w3-right w3-theme">Send</button>
        <?php } ?>
      
      </form>
    </div>
  </div>
</div>


  <?php
  
  include('include/footer.php');
  ?>

  <!-- Footer -
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
-->
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
