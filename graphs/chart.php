<html>


<?php
$connection= new mysqli('localhost:3308','root','','personality') or die(mysqli_error($connection));
?>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['personality','marks'],
          <?php 
            $email_id=$_SESSION['email'];
             $sql="SELECT * FROM personality_result_class_10 where email='$email_id'";
              $fire=mysqli_query($connection,$sql);
                while($result=mysqli_fetch_assoc($fire)){
               echo"['".$result['personality']."',".$result['marks']."],";

          }
        
        
        ?>
        ]);

        var options = {
          title: ' Different personalities of persons '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 700px; height: 400px;"></div>
  </body>
</html>