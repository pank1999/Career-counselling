<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .container{
            width:100%;
        }

        .progressbar{
            counter-reset:step;

        }
        .progressbar li{
            list-style-type:none;
            float:left;
            width:25%;
            position:relative;
            text-align:center;

        }
        .progressbar  li:before{
            content:counter(step);
            counter-increment:step;
            width:30px;
            height:30px;
            line-height:30px;
            border:1px solid #ddd;
            display:block;
            text-align:center;
            margin:0 auto 10px auto ;
            border-radius:50%;
            background-color:white;

        }
        .progressbar li:after{
            content:'';
            position:absolute;
            width:100%;
            height:2px;
            background-color:black;
            top:15px;
            left:-100%;
            z-index:-1;
        }
     .progressbar li:first-child:after{
         content:none;


     }
     .progressbar li.active{
         color:green;


     }
     .progressbar li.active:before{
         border-color:green;
     }

     .progressbar li.active + li:after{
         background-color:green;
     }    
    </style>
</head>

                     
        
         
          <ul class="progressbar">
            <li <?php if(isset($_SESSION['Personality4_10'])){ ?>  class="active"<?php } ?>>step 1</li>
            <li <?php if(isset($_SESSION['interest_10'])){ ?>  class="active"<?php } ?> >step 2</li>
            <li <?php if(isset($_SESSION['skills_10'])){ ?>  class="active"<?php } ?>>step 3</li>
             <li <?php if(isset($_SESSION['Academic_10'])){ ?>  class="active"<?php } ?>>step 4</li>
         </ul>      
        
               
</body>
</html>